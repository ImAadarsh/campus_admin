<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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

// Fetch categories for dropdown
$sql = "SELECT * FROM blog_categories ORDER BY name";
$categories = mysqli_query($conn, $sql);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $subtitle = mysqli_real_escape_string($conn, $_POST['subtitle']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $category_id = (int)$_POST['category_id'];
    $author_name = mysqli_real_escape_string($conn, $_POST['author_name']);
    $quote = mysqli_real_escape_string($conn, $_POST['quote']);
    $tags = mysqli_real_escape_string($conn, $_POST['tags']);

    // Handle file uploads
    $icon = '';
    $banner = '';
    
    if (isset($_FILES['icon']) && $_FILES['icon']['error'] === 0) {
        $icon = 'public/blog/icon/' . uniqid() . basename($_FILES['icon']['name']);
        move_uploaded_file($_FILES['icon']['tmp_name'], $icon);
    }
    
    if (isset($_FILES['banner']) && $_FILES['banner']['error'] === 0) {
        $banner = 'public/blog/banner_image/' . uniqid() . basename($_FILES['banner']['name']);
        move_uploaded_file($_FILES['banner']['tmp_name'], $banner);
    }

    $sql = "INSERT INTO blogs (title, subtitle, content, category_id, author_name, 
            icon, banner, quote, tags, created_at, updated_at) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
    
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssisssss", 
        $title, $subtitle, $content, $category_id, $author_name, 
        $icon, $banner, $quote, $tags
    );

    if (mysqli_stmt_execute($stmt)) {
        header("Location: blogs.php");
        exit();
    } else {
        $error = "Error adding blog: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Add Blog | Campus Coach</title>
    <?php include 'includes/head.php'; ?>
    <!-- Include CKEditor -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</head>

<body>
    <div class="wrapper">
        <?php include 'includes/sidenav.php'; ?>
        <?php include 'includes/topbar.php'; ?>

        <div class="page-content">
            <div class="page-container">
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Add New Blog</h4>
                        </div>
                    </div>
                </div>

                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="subtitle" class="form-label">Subtitle</label>
                                        <textarea class="form-control" id="subtitle" name="subtitle" rows="2" required></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="content" class="form-label">Content</label>
                                        <textarea class="form-control" id="content" name="content" rows="10" required></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select data-choices data-choices-sorting-false class="form-control" id="category_id" name="category_id" required>
                                            <option value="">Select Category</option>
                                            <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                                                <option value="<?php echo $category['id']; ?>">
                                                    <?php echo htmlspecialchars($category['name']); ?>
                                                </option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="author_name" class="form-label">Author Name</label>
                                        <input type="text" class="form-control" id="author_name" name="author_name" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="icon" class="form-label">Icon Image</label>
                                        <input type="file" class="form-control" id="icon" name="icon" accept="image/*" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="banner" class="form-label">Banner Image</label>
                                        <input type="file" class="form-control" id="banner" name="banner" accept="image/*" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="quote" class="form-label">Quote</label>
                                        <textarea class="form-control" id="quote" name="quote" rows="2"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="tags" class="form-label">Tags (comma separated)</label>
                                        <input type="text" class="form-control" id="tags" name="tags" required>
                                    </div>

                                    <div class="text-end">
                                        <a href="blogs.php" class="btn btn-secondary me-2">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Add Blog</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'includes/footer.php'; ?>
        </div>
    </div>

    <?php include 'includes/theme_settings.php'; ?>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>
    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <script>
        CKEDITOR.replace('content');
    </script>
</body>
</html> 