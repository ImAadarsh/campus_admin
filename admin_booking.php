<?php
include 'config/show_errors.php';
session_start();

// Check if user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// Include database connection
$conn = require_once 'config/config.php';

// Get user type and name from session
$userType = $_SESSION['user_type'];
$userName = $_SESSION['user_name'];
$userId = $_SESSION['user_id'];

// Check if user is admin
if ($userType !== 'admin') {
    header("Location: index.php");
    exit();
}

// Fetch all users
$users_sql = "SELECT id, first_name, last_name, email, mobile FROM users WHERE user_type = 'user' ORDER BY first_name ASC";
$users_result = mysqli_query($conn, $users_sql);

// Fetch all trainers
$trainers_sql = "SELECT id, first_name, last_name, designation, profile_img FROM trainers ORDER BY first_name ASC";
$trainers_result = mysqli_query($conn, $trainers_sql);

// Get recent bookings for reference
$recent_bookings_sql = "SELECT b.id, b.status, b.created_at, u.first_name as user_fname, u.last_name as user_lname, 
                        t.first_name as trainer_fname, t.last_name as trainer_lname, ta.date, ts.start_time, ts.end_time
                        FROM bookings b
                        JOIN users u ON b.user_id = u.id
                        JOIN time_slots ts ON b.time_slot_id = ts.id
                        JOIN trainer_availabilities ta ON ts.trainer_availability_id = ta.id
                        JOIN trainers t ON ta.trainer_id = t.id
                        ORDER BY b.created_at DESC LIMIT 5";
$recent_bookings_result = mysqli_query($conn, $recent_bookings_sql);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $trainer_id = mysqli_real_escape_string($conn, $_POST['trainer_id']);
    $time_slot_id = mysqli_real_escape_string($conn, $_POST['time_slot_id']);
    $booking_notes = mysqli_real_escape_string($conn, $_POST['booking_notes']);
    $payment_status = mysqli_real_escape_string($conn, $_POST['payment_status'] ?? 'completed');
    $amount = !empty($_POST['amount']) ? mysqli_real_escape_string($conn, $_POST['amount']) : 500.00;
    $booking_status = mysqli_real_escape_string($conn, $_POST['booking_status'] ?? 'confirmed');

    // Start transaction
    mysqli_begin_transaction($conn);

    try {
        // Insert booking
        $booking_sql = "INSERT INTO bookings (user_id, time_slot_id, status, booking_notes, created_at, updated_at) 
                       VALUES (?, ?, ?, ?, NOW(), NOW())";
        $booking_stmt = mysqli_prepare($conn, $booking_sql);
        mysqli_stmt_bind_param($booking_stmt, "iiss", $user_id, $time_slot_id, $booking_status, $booking_notes);
        mysqli_stmt_execute($booking_stmt);
        $booking_id = mysqli_insert_id($conn);

        // Generate unique transaction ID
        $transaction_id = 'ADMIN' . date('YmdHis') . rand(1000, 9999);

        // Insert payment
        $payment_sql = "INSERT INTO payments (booking_id, amount, payment_method, transaction_id, status, payment_date, created_at, updated_at) 
                       VALUES (?, ?, 'Admin Scheduled', ?, ?, NOW(), NOW(), NOW())";
        $payment_stmt = mysqli_prepare($conn, $payment_sql);
        mysqli_stmt_bind_param($payment_stmt, "idss", $booking_id, $amount, $transaction_id, $payment_status);
        mysqli_stmt_execute($payment_stmt);

        // Update time slot status
        $update_slot_sql = "UPDATE time_slots SET status = 'booked' WHERE id = ?";
        $update_slot_stmt = mysqli_prepare($conn, $update_slot_sql);
        mysqli_stmt_bind_param($update_slot_stmt, "i", $time_slot_id);
        mysqli_stmt_execute($update_slot_stmt);

        // Commit transaction
        mysqli_commit($conn);
        $_SESSION['success'] = "Booking scheduled successfully. Booking ID: #" . $booking_id . " | Transaction ID: " . $transaction_id;
        header("Location: admin_booking.php");
        exit();

    } catch (Exception $e) {
        mysqli_rollback($conn);
        $_SESSION['error'] = "Error creating booking: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Schedule Booking | Campus Coach Admin</title>
    <?php include 'includes/head.php'; ?>
    <!-- Flatpickr CSS -->
    <link href="assets/vendor/flatpickr/flatpickr.min.css" rel="stylesheet">
    <style>
        .time-slot-card {
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            border: 2px solid transparent;
        }
        .time-slot-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.15);
        }
        .time-slot-card.selected {
            border-color: #3498db;
            background-color: #f8f9fa;
        }
        .time-slot-card.selected::after {
            content: '✓';
            position: absolute;
            top: 10px;
            right: 10px;
            color: #3498db;
            font-weight: bold;
            font-size: 18px;
        }
        .trainer-card {
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            height: 100%;
        }
        .trainer-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.15);
        }
        .trainer-card.selected {
            border-color: #3498db;
            background-color: #f8f9fa;
        }
        .step-container {
            position: relative;
            margin-bottom: 20px;
        }
        .step-container .step-line {
            position: absolute;
            top: 24px;
            height: 2px;
            background-color: #dee2e6;
            width: 100%;
            z-index: 0;
        }
        .step-wizard {
            position: relative;
            z-index: 1;
        }
        .step-wizard .step-item {
            background-color: #fff;
            border: 2px solid #dee2e6;
            border-radius: 50%;
            height: 50px;
            width: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin: 0 auto 10px;
        }
        .step-wizard .step-title {
            text-align: center;
            font-weight: 500;
        }
        .step-wizard .step-item.active {
            border-color: #3498db;
            background-color: #3498db;
            color: #fff;
        }
        .step-wizard .step-item.completed {
            border-color: #28a745;
            background-color: #28a745;
            color: #fff;
        }
        .booking-summary {
            background-color: #f8f9fa;
            border-radius: 5px;
            padding: 20px;
        }
        .booking-summary h5 {
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .user-card {
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        .user-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(0,0,0,.15);
        }
        .user-card.selected {
            border-color: #3498db;
            background-color: #f8f9fa;
        }
        #user-search, #trainer-search {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidenav.php'; ?>
        <?php include 'includes/topbar.php'; ?>

        <div class="page-content">
            <div class="page-container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="bookings.php">Bookings</a></li>
                                    <li class="breadcrumb-item active">Schedule New Booking</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Schedule New Booking</h4>
                        </div>
                    </div>
                </div>

                <?php if (isset($_SESSION['success'])) : ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                        ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <!-- Main content area with multi-step booking form -->
                <div class="row">
                    <div class="col-lg-8">
                        <form method="POST" id="booking-form">
                            <!-- User selection step -->
                            <div id="user-step" class="card mb-4">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">Step 1: Select User</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <input type="text" id="user-search" class="form-control" placeholder="Search users by name or email...">
                                    </div>
                                    
                                    <div class="row g-3" id="user-cards-container">
                                        <?php 
                                        mysqli_data_seek($users_result, 0);
                                        while ($user = mysqli_fetch_assoc($users_result)) : 
                                        ?>
                                        <div class="col-md-6 user-item" data-name="<?php echo strtolower($user['first_name'] . ' ' . $user['last_name']); ?>" data-email="<?php echo strtolower($user['email'] ?? ''); ?>">
                                            <div class="card user-card" data-user-id="<?php echo $user['id']; ?>">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-3 flex-shrink-0">
                                                            <span class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                                <?php echo substr($user['first_name'], 0, 1) . substr($user['last_name'], 0, 1); ?>
                                                            </span>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="mb-1 text-truncate"><?php echo htmlspecialchars($user['first_name'] . ' ' . $user['last_name']); ?></h5>
                                                            <?php if (isset($user['email'])) : ?>
                                                                <p class="mb-0 text-muted text-truncate"><?php echo htmlspecialchars($user['email']); ?></p>
                                                            <?php endif; ?>
                                                            <?php if (isset($user['mobile'])) : ?>
                                                                <p class="mb-0 text-muted"><?php echo htmlspecialchars($user['mobile']); ?></p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    
                                    <input type="hidden" name="user_id" id="user_id" required>
                                    
                                    <div class="text-end mt-3">
                                        <button type="button" id="user-next" class="btn btn-primary" disabled>Next: Select Trainer</button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Trainer selection step (initially hidden) -->
                            <div id="trainer-step" class="card mb-4" style="display: none;">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">Step 2: Select Trainer</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <input type="text" id="trainer-search" class="form-control" placeholder="Search trainers by name or specialization...">
                                    </div>
                                    
                                    <div class="row g-3" id="trainer-cards-container">
                                        <?php 
                                        mysqli_data_seek($trainers_result, 0);
                                        while ($trainer = mysqli_fetch_assoc($trainers_result)) : 
                                        ?>
                                        <div class="col-md-6 trainer-item" data-name="<?php echo strtolower($trainer['first_name'] . ' ' . $trainer['last_name']); ?>" data-specialization="<?php echo strtolower($trainer['designation'] ?? ''); ?>">
                                            <div class="card trainer-card" data-trainer-id="<?php echo $trainer['id']; ?>">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-sm me-3 flex-shrink-0">
                                                            <?php if (!empty($trainer['profile_img'])) : ?>
                                                                <img src="<?php echo htmlspecialchars($trainer['profile_img']); ?>" class="avatar-sm rounded-circle" alt="<?php echo htmlspecialchars($trainer['first_name']); ?>">
                                                            <?php else : ?>
                                                                <span class="avatar-title bg-primary-subtle text-primary rounded-circle">
                                                                    <?php echo substr($trainer['first_name'], 0, 1) . substr($trainer['last_name'], 0, 1); ?>
                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="flex-grow-1 overflow-hidden">
                                                            <h5 class="mb-1 text-truncate"><?php echo htmlspecialchars($trainer['first_name'] . ' ' . $trainer['last_name']); ?></h5>
                                                            <?php if (isset($trainer['designation'])) : ?>
                                                                <p class="mb-0 text-muted text-truncate"><?php echo htmlspecialchars($trainer['designation']); ?></p>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                    
                                    <input type="hidden" name="trainer_id" id="trainer_id" required>
                                    
                                    <div class="text-end mt-3">
                                        <button type="button" class="btn btn-outline-secondary me-2" id="trainer-prev">Previous</button>
                                        <button type="button" id="trainer-next" class="btn btn-primary" disabled>Next: Select Time Slot</button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Time slot selection step (initially hidden) -->
                            <div id="timeslot-step" class="card mb-4" style="display: none;">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">Step 3: Select Time Slot</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="date-filter" class="form-label">Filter by Date</label>
                                        <input type="text" id="date-filter" class="form-control" data-provider="flatpickr" data-date-format="Y-m-d" placeholder="Select a date">
                                    </div>
                                    
                                    <div id="time-slots-container" class="row g-3">
                                        <div class="col-12">
                                            <div class="alert alert-info">
                                                <i class="ti ti-info-circle me-1"></i>
                                                Please select a trainer first to view available time slots.
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <input type="hidden" name="time_slot_id" id="time_slot_id" required>
                                    
                                    <div class="text-end mt-3">
                                        <button type="button" class="btn btn-outline-secondary me-2" id="timeslot-prev">Previous</button>
                                        <button type="button" id="timeslot-next" class="btn btn-primary" disabled>Next: Confirm Details</button>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Confirmation step (initially hidden) -->
                            <div id="confirm-step" class="card mb-4" style="display: none;">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="card-title mb-0">Step 4: Confirm Booking Details</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="booking_notes" class="form-label">Booking Notes</label>
                                                <textarea class="form-control" id="booking_notes" name="booking_notes" rows="3" 
                                                          placeholder="Enter any special notes or requirements"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="amount" class="form-label">Amount (₹)</label>
                                                <input type="number" class="form-control" id="amount" name="amount" value="500" min="0" step="0.01">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="booking_status" class="form-label">Booking Status</label>
                                                <select class="form-select" id="booking_status" name="booking_status">
                                                    <option value="confirmed">Confirmed</option>
                                                    <option value="pending">Pending</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="payment_status" class="form-label">Payment Status</label>
                                                <select class="form-select" id="payment_status" name="payment_status">
                                                    <option value="completed">Completed</option>
                                                    <option value="pending">Pending</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="booking-summary mt-4">
                                        <h5><i class="ti ti-clipboard-check me-1"></i> Booking Summary</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p><strong>User:</strong> <span id="summary-user">Not selected</span></p>
                                                <p><strong>Trainer:</strong> <span id="summary-trainer">Not selected</span></p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><strong>Date:</strong> <span id="summary-date">Not selected</span></p>
                                                <p><strong>Time:</strong> <span id="summary-time">Not selected</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="text-end mt-3">
                                        <button type="button" class="btn btn-outline-secondary me-2" id="confirm-prev">Previous</button>
                                        <button type="submit" id="schedule-btn" class="btn btn-success">
                                            <i class="ti ti-calendar-plus me-1"></i> Schedule Booking
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Sidebar with recent bookings -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header bg-light">
                                <h5 class="card-title mb-0">Recent Bookings</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="list-group list-group-flush">
                                    <?php if (mysqli_num_rows($recent_bookings_result) > 0): ?>
                                        <?php while ($booking = mysqli_fetch_assoc($recent_bookings_result)): ?>
                                            <div class="list-group-item p-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">
                                                            <?php echo htmlspecialchars($booking['user_fname'] . ' ' . $booking['user_lname']); ?> 
                                                            <span class="text-muted">with</span> 
                                                            <?php echo htmlspecialchars($booking['trainer_fname'] . ' ' . $booking['trainer_lname']); ?>
                                                        </h6>
                                                        <p class="mb-0 text-muted">
                                                            <i class="ti ti-calendar me-1"></i> <?php echo date('d M Y', strtotime($booking['date'])); ?>
                                                            <i class="ti ti-clock ms-2 me-1"></i> <?php echo date('h:i A', strtotime($booking['start_time'])) . ' - ' . date('h:i A', strtotime($booking['end_time'])); ?>
                                                        </p>
                                                        <span class="badge <?php 
                                                        echo ($booking['status'] == 'completed') ? 'bg-success' : 
                                                             (($booking['status'] == 'confirmed') ? 'bg-info' : 
                                                             (($booking['status'] == 'cancelled') ? 'bg-danger' : 'bg-warning')); ?>">
                                                            <?php echo ucfirst($booking['status']); ?>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <div class="list-group-item p-3">
                                            <p class="mb-0 text-center text-muted">No recent bookings found</p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Quick help card -->
                        <div class="card mt-3">
                            <div class="card-header bg-light">
                                <h5 class="card-title mb-0">Quick Help</h5>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <h6><i class="ti ti-user me-1"></i> Step 1: Select User</h6>
                                    <p class="text-muted small">Click on a user card to select them for the booking.</p>
                                </div>
                                <div class="mb-3">
                                    <h6><i class="ti ti-user-check me-1"></i> Step 2: Select Trainer</h6>
                                    <p class="text-muted small">Choose the appropriate trainer for the session.</p>
                                </div>
                                <div class="mb-3">
                                    <h6><i class="ti ti-calendar-time me-1"></i> Step 3: Pick Time Slot</h6>
                                    <p class="text-muted small">Select from available time slots for the chosen trainer.</p>
                                </div>
                                <div class="mb-0">
                                    <h6><i class="ti ti-check me-1"></i> Step 4: Confirm Details</h6>
                                    <p class="text-muted small">Review booking details and submit to create the booking.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'includes/footer.php'; ?>
        </div>
    </div>

    <?php include 'includes/theme_settings.php'; ?>

    <!-- Core JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    
    <script>
        $(document).ready(function() {
            // Initialize flatpickr for date filtering
            flatpickr("#date-filter", {
                minDate: "today",
                altInput: true,
                altFormat: "F j, Y",
                dateFormat: "Y-m-d",
                onChange: function(selectedDates, dateStr) {
                    filterTimeSlotsByDate(dateStr);
                }
            });
            
            // Variables to store selections
            let selectedUserName = "";
            let selectedTrainerName = "";
            let selectedDate = "";
            let selectedTime = "";
            
            // Search functionality for users
            $("#user-search").on("keyup", function() {
                let value = $(this).val().toLowerCase();
                $(".user-item").filter(function() {
                    let nameMatch = $(this).data('name').indexOf(value) > -1;
                    let emailMatch = $(this).data('email').indexOf(value) > -1;
                    $(this).toggle(nameMatch || emailMatch);
                });
            });
            
            // Search functionality for trainers
            $("#trainer-search").on("keyup", function() {
                let value = $(this).val().toLowerCase();
                $(".trainer-item").filter(function() {
                    let nameMatch = $(this).data('name').indexOf(value) > -1;
                    let specMatch = $(this).data('specialization').indexOf(value) > -1;
                    $(this).toggle(nameMatch || specMatch);
                });
            });
            
            // User selection
            $(document).on('click', '.user-card', function() {
                $('.user-card').removeClass('selected');
                $(this).addClass('selected');
                $('#user_id').val($(this).data('user-id'));
                selectedUserName = $(this).find('h5').text();
                $('#summary-user').text(selectedUserName);
                $('#user-next').prop('disabled', false);
            });
            
            // Trainer selection
            $(document).on('click', '.trainer-card', function() {
                $('.trainer-card').removeClass('selected');
                $(this).addClass('selected');
                $('#trainer_id').val($(this).data('trainer-id'));
                selectedTrainerName = $(this).find('h5').text();
                $('#summary-trainer').text(selectedTrainerName);
                $('#trainer-next').prop('disabled', false);
                fetchAvailableTimeSlots($(this).data('trainer-id'));
            });
            
            // Time slot selection
            $(document).on('click', '.time-slot-card', function() {
                $('.time-slot-card').removeClass('selected');
                $(this).addClass('selected');
                $('#time_slot_id').val($(this).data('slot-id'));
                selectedDate = $(this).data('date');
                selectedTime = $(this).data('time');
                $('#summary-date').text(selectedDate);
                $('#summary-time').text(selectedTime);
                $('#timeslot-next').prop('disabled', false);
            });
            
            // Multi-step navigation - Next buttons
            $('#user-next').click(function() {
                $('#user-step').hide();
                $('#trainer-step').show();
                $('#step1').removeClass('active').addClass('completed');
                $('#step2').addClass('active');
            });
            
            $('#trainer-next').click(function() {
                $('#trainer-step').hide();
                $('#timeslot-step').show();
                $('#step2').removeClass('active').addClass('completed');
                $('#step3').addClass('active');
            });
            
            $('#timeslot-next').click(function() {
                $('#timeslot-step').hide();
                $('#confirm-step').show();
                $('#step3').removeClass('active').addClass('completed');
                $('#step4').addClass('active');
            });
            
            // Multi-step navigation - Previous buttons
            $('#trainer-prev').click(function() {
                $('#trainer-step').hide();
                $('#user-step').show();
                $('#step2').removeClass('active');
                $('#step1').removeClass('completed').addClass('active');
            });
            
            $('#timeslot-prev').click(function() {
                $('#timeslot-step').hide();
                $('#trainer-step').show();
                $('#step3').removeClass('active');
                $('#step2').removeClass('completed').addClass('active');
            });
            
            $('#confirm-prev').click(function() {
                $('#confirm-step').hide();
                $('#timeslot-step').show();
                $('#step4').removeClass('active');
                $('#step3').removeClass('completed').addClass('active');
            });
            
            // Function to fetch available time slots
            function fetchAvailableTimeSlots(trainerId) {
                $.ajax({
                    url: 'get_available_slots.php',
                    method: 'POST',
                    data: { trainer_id: trainerId },
                    beforeSend: function() {
                        $('#time-slots-container').html('<div class="col-12 text-center"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div><p class="mt-2">Loading available time slots...</p></div>');
                    },
                    success: function(response) {
                        try {
                            const slots = JSON.parse(response);
                            displayTimeSlots(slots);
                        } catch (e) {
                            $('#time-slots-container').html('<div class="col-12"><div class="alert alert-danger">Error parsing response. Please try again.</div></div>');
                        }
                    },
                    error: function() {
                        $('#time-slots-container').html('<div class="col-12"><div class="alert alert-danger">Error fetching time slots. Please try again.</div></div>');
                    }
                });
            }
            
            // Function to display time slots
            function displayTimeSlots(slots) {
                if (slots.length === 0) {
                    $('#time-slots-container').html('<div class="col-12"><div class="alert alert-warning"><i class="ti ti-alert-circle me-1"></i> No available time slots found for this trainer.</div></div>');
                    return;
                }

                let html = '';
                slots.forEach(slot => {
                    const formattedDate = new Date(slot.date).toLocaleDateString('en-US', {
                        weekday: 'short',
                        month: 'short',
                        day: 'numeric',
                        year: 'numeric'
                    });
                    
                    const startTime = slot.start_time.substring(0, 5);
                    const endTime = slot.end_time.substring(0, 5);
                    const timeRange = `${startTime} - ${endTime}`;
                    
                    html += `
                        <div class="col-md-4 time-slot-item" data-date="${slot.date}">
                            <div class="card time-slot-card" data-slot-id="${slot.id}" data-date="${formattedDate}" data-time="${timeRange}">
                                <div class="card-body">
                                    <h6 class="card-title mb-2">${formattedDate}</h6>
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="badge bg-info">${timeRange}</span>
                                        <span class="badge bg-success">₹${slot.price}</span>
                                    </div>
                                    <p class="card-text small text-muted mb-0">
                                        <i class="ti ti-clock me-1"></i> ${slot.duration_minutes} minutes
                                    </p>
                                </div>
                            </div>
                        </div>
                    `;
                });

                $('#time-slots-container').html(html);
            }
            
            // Function to filter time slots by date
            function filterTimeSlotsByDate(date) {
                if (!date) {
                    $('.time-slot-item').show();
                    return;
                }
                
                $('.time-slot-item').each(function() {
                    const slotDate = $(this).data('date');
                    $(this).toggle(slotDate === date);
                });
                
                // Show message if no slots available for selected date
                if ($('.time-slot-item:visible').length === 0) {
                    if ($('.time-slot-item').length > 0) {
                        $('#time-slots-container').append('<div class="col-12 no-slots-message"><div class="alert alert-info mt-3"><i class="ti ti-info-circle me-1"></i> No time slots available for the selected date.</div></div>');
                    }
                } else {
                    $('.no-slots-message').remove();
                }
            }
        });
    </script>
</body>
</html> 