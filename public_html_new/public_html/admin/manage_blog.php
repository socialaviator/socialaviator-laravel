<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
include 'db/db_connection.php';

// Fetch category from database
$categoryQuery = "SELECT * FROM category";
$categoryResult = $mysqli->query($categoryQuery);

// Handle form submission for adding a blog
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_blog'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category']; // Get category from form

    // Handle image upload
    $image = $_FILES['image']['name'];
    $target_dir = "uploads/"; // Directory to upload images
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    if (!empty($title) && !empty($content) && !empty($category)) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Insert blog post with category
            $stmt = $mysqli->prepare("INSERT INTO blogs (title, content, image, category) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("sssi", $title, $content, $image, $category);
            $stmt->execute();
            $stmt->close();
        } else {
            echo "Failed to upload image.";
        }
    }
}

// Handle blog deletion (soft delete)
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_blog'])) {
    $delete_id = $_POST['delete_id'];
    $stmt = $mysqli->prepare("UPDATE blogs SET deleted = 1 WHERE id = ?");
    $stmt->bind_param("i", $delete_id);
    $stmt->execute();
    $stmt->close();
}

// Fetch blogs with category names
$sql = "SELECT blogs.*, category.name AS category_name 
        FROM blogs 
        LEFT JOIN category ON blogs.category = category.id 
        WHERE blogs.deleted = 0 ORDER BY blogs.created_at DESC";
$result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog System</title>
    <script src="//cdn.ckeditor.com/4.25.1-lts/standard/ckeditor.js"></script>
</head>
<style>
    .cke_notification {
        display: none !important;
    }
</style>
<body>
    <?php include 'header.php'; ?>
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="dark" data-footer="simple">
        <?php include 'nav.php'; ?>
        <div class="hk-menu"><?php include 'sidebar.php'; ?></div>
        <div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <div class="container mt-5">
                <!-- Navigation Tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="add-blog-tab" href="#add-blog" data-bs-toggle="tab">Add Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="list-blogs-tab" href="#list-blogs" data-bs-toggle="tab">List Blogs</a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content mt-3">
                    <!-- Add Blog Form -->
                    <div class="tab-pane fade show active" id="add-blog">
                        <h3>Add New Blog</h3>
                        <form method="POST" action="manage_blog.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="title" class="form-label">Blog Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Select Category</label>
                                <select class="form-control" id="category" name="category" required>
                                    <option value="">-- Select Category --</option>
                                    <?php while ($category = $categoryResult->fetch_assoc()): ?>
                                        <option value="<?php echo $category['id']; ?>">
                                            <?php echo htmlspecialchars($category['name']); ?>
                                        </option>
                                    <?php endwhile; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Blog Content</label>
                                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Upload Image</label>
                                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-primary" name="add_blog">Add Blog</button>
                        </form>
                    </div>

                    <!-- List Blogs -->
                    <div class="tab-pane fade" id="list-blogs">
                        <h3>Blog List</h3>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Content</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($result->num_rows > 0) : ?>
                                    <?php while($row = $result->fetch_assoc()) : ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo htmlspecialchars($row['title']); ?></td>
                                        <td><?php echo htmlspecialchars($row['category_name']); ?></td>
                                        <td>
                                            <?php if (!empty($row['image'])): ?>
                                                <img src="uploads/<?php echo $row['image']; ?>" width="100" height="100">
                                            <?php endif; ?>
                                        </td>
                                        <td><?php echo htmlspecialchars(substr($row['content'], 0, 100)); ?>...</td>
                                        <td><?php echo $row['created_at']; ?></td>
                                        <td>
                                            <form method="POST" action="manage_blog.php" style="display:inline;">
                                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                <button type="submit" class="btn btn-danger btn-sm" name="delete_blog">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <tr><td colspan="7">No blogs found.</td></tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    CKEDITOR.replace('content', {
        removePlugins: 'notification,notificationaggregator'
    });
});
</script>

</body>
</html>
