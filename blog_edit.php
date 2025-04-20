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

// Check if blog ID is provided
if (!isset($_GET['id'])) {
    header("Location: blogs.php");
    exit();
}

$blog_id = (int)$_GET['id'];

// Fetch blog details
$sql = "SELECT * FROM blogs WHERE id = ? AND is_deleted = 0";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $blog_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$blog = mysqli_fetch_assoc($result);

if (!$blog) {
    header("Location: blogs.php");
    exit();
}

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
    $icon = $blog['icon'];
    $banner = $blog['banner'];
    
    if (isset($_FILES['icon']) && $_FILES['icon']['error'] === 0) {
        $icon = 'public/blog/icon/' . uniqid() . basename($_FILES['icon']['name']);
        move_uploaded_file($_FILES['icon']['tmp_name'], $icon);
    }
    
    if (isset($_FILES['banner']) && $_FILES['banner']['error'] === 0) {
        $banner = 'public/blog/banner_image/' . uniqid() . basename($_FILES['banner']['name']);
        move_uploaded_file($_FILES['banner']['tmp_name'], $banner);
    }

    $sql = "UPDATE blogs SET 
            title = ?, subtitle = ?, content = ?, category_id = ?, 
            author_name = ?, icon = ?, banner = ?, quote = ?, 
            tags = ?, updated_at = NOW() 
            WHERE id = ?";
    
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssisssssi", 
        $title, $subtitle, $content, $category_id, 
        $author_name, $icon, $banner, $quote, $tags, $blog_id
    );

    if (mysqli_stmt_execute($stmt)) {
        header("Location: blogs.php");
        exit();
    } else {
        $error = "Error updating blog: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Edit Blog | Campus Coach</title>
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
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="blogs.php">Blogs</a></li>
                                    <li class="breadcrumb-item active">Edit Blog</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Edit Blog</h4>
                        </div>
                    </div>
                </div>

                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($blog['title']); ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="subtitle" class="form-label">Subtitle</label>
                                        <textarea class="form-control" id="subtitle" name="subtitle" rows="2" required><?php echo htmlspecialchars($blog['subtitle']); ?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="content" class="form-label">Content</label>
                                        <textarea class="form-control" id="content" name="content" rows="10" required><?php echo htmlspecialchars($blog['content']); ?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">Category</label>
                                        <select  data-choices data-choices-sorting-false class="form-control" id="category_id" name="category_id" required>
                                            <option value="">Select Category</option>
                                            <?php mysqli_data_seek($categories, 0); ?>
                                            <?php while ($category = mysqli_fetch_assoc($categories)) : ?>
                                                <option value="<?php echo $category['id']; ?>" <?php echo $category['id'] == $blog['category_id'] ? 'selected' : ''; ?>>
                                                    <?php echo htmlspecialchars($category['name']); ?>
                                                </option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="author_name" class="form-label">Author Name</label>
                                        <input type="text" class="form-control" id="author_name" name="author_name" value="<?php echo htmlspecialchars($blog['author_name']); ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="icon" class="form-label">Icon Image</label>
                                        <?php if ($blog['icon']) : ?>
                                            <div class="mb-2">
                                                <img src="<?php echo htmlspecialchars($uri.$blog['icon']); ?>" alt="Current Icon" style="max-height: 100px;">
                                            </div>
                                        <?php endif; ?>
                                        <input type="file" class="form-control" id="icon" name="icon" accept="image/*">
                                    </div>

                                    <div class="mb-3">
                                        <label for="banner" class="form-label">Banner Image</label>
                                        <?php if ($blog['banner']) : ?>
                                            <div class="mb-2">
                                                <img src="<?php echo htmlspecialchars($uri.$blog['banner']); ?>" alt="Current Banner" style="max-height: 100px;">
                                            </div>
                                        <?php endif; ?>
                                        <input type="file" class="form-control" id="banner" name="banner" accept="image/*">
                                    </div>

                                    <div class="mb-3">
                                        <label for="quote" class="form-label">Quote</label>
                                        <textarea class="form-control" id="quote" name="quote" rows="2"><?php echo htmlspecialchars($blog['quote']); ?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="tags" class="form-label">Tags (comma separated)</label>
                                        <input type="text" class="form-control" id="tags" name="tags" value="<?php echo htmlspecialchars($blog['tags']); ?>" required>
                                    </div>

                                    <div class="text-end">
                                        <a href="blogs.php" class="btn btn-secondary me-2">Cancel</a>
                                        <button type="submit" class="btn btn-primary">Update Blog</button>
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