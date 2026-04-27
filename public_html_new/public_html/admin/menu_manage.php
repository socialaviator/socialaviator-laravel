<?php
// Include the database connection file
include 'db/db_connection.php';

// Initialize variables
$action = $_GET['action'] ?? null;
$menuId = $_GET['id'] ?? null;
$menuName = '';
$operationMessage = '';

// Fetch menu details for update
if ($action === 'edit' && $menuId) {
    $stmt = $mysqli->prepare("SELECT menu_name FROM menu WHERE id = ?");
    $stmt->bind_param("i", $menuId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $menu = $result->fetch_assoc();
        $menuName = $menu['menu_name'];
    } else {
        $operationMessage = 'Menu not found.';
    }
    $stmt->close();
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $menuName = $_POST['menu_name'];
    $menuId = $_POST['menu_id'] ?? null;

    switch ($action) {
        case 'insert':
            $stmt = $mysqli->prepare("INSERT INTO menu (menu_name) VALUES (?)");
            $stmt->bind_param("s", $menuName);
            if ($stmt->execute()) {
                $operationMessage = "Menu created successfully!";
            } else {
                $operationMessage = "Error creating menu: " . $mysqli->error;
            }
            $stmt->close();
            break;

        case 'update':
            if ($menuId) {
                $stmt = $mysqli->prepare("UPDATE menu SET menu_name = ? WHERE id = ?");
                $stmt->bind_param("si", $menuName, $menuId);
                if ($stmt->execute()) {
                    $operationMessage = "Menu updated successfully!";
                } else {
                    $operationMessage = "Error updating menu: " . $mysqli->error;
                }
                $stmt->close();
            } else {
                $operationMessage = "Menu ID is required for updating.";
            }
            break;

        case 'delete':
            if ($menuId) {
                $stmt = $mysqli->prepare("DELETE FROM menu WHERE id = ?");
                $stmt->bind_param("i", $menuId);
                if ($stmt->execute()) {
                    $operationMessage = "Menu deleted successfully!";
                } else {
                    $operationMessage = "Error deleting menu: " . $mysqli->error;
                }
                $stmt->close();
            } else {
                $operationMessage = "Menu ID is required for deletion.";
            }
            break;
    }
}

// Fetch all menus for display
$menuQuery = "SELECT id, menu_name FROM menu";
$menuResult = $mysqli->query($menuQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/your/custom/styles.css"> <!-- Include your custom styles if any -->
</head>
<body>
    <?php include 'header.php'; ?>

    <!-- Wrapper -->
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="dark" data-footer="simple">
        <!-- Top Navbar -->
        <?php include 'nav.php'; ?>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <div class="hk-menu">
            <!-- Main Menu -->
            <?php include 'sidebar.php'; ?>
            <!-- /Main Menu -->
        </div>
        <div id="hk_menu_backdrop" class="hk-menu-backdrop"></div>
        <!-- /Vertical Nav -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
            <div class="container-fluid p-5 pb-0">
                <h1 class="mt-4">Menu Management</h1>
                <?php if ($operationMessage): ?>
                    <div class="alert alert-info"><?php echo $operationMessage; ?></div>
                <?php endif; ?>
                
                <form action="menu_manage.php" method="post" class="mt-4">
                    <input type="hidden" name="action" value="<?php echo $action === 'edit' ? 'update' : 'insert'; ?>">
                    <?php if ($action === 'edit'): ?>
                        <input type="hidden" name="menu_id" value="<?php echo htmlspecialchars($menuId); ?>">
                    <?php endif; ?>
                    
                    <div class="form-group">
                        <label for="menu_name">Menu Name:</label>
                        <input type="text" class="form-control" id="menu_name" name="menu_name" value="<?php echo htmlspecialchars($menuName); ?>" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary"><?php echo $action === 'edit' ? 'Update' : 'Create'; ?> Menu</button>
                </form>
                
                <h2 class="mt-4">Existing Menus</h2>
                <table class="table table-striped mt-2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Menu Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($menuResult->num_rows > 0): ?>
                            <?php while ($menu = $menuResult->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($menu['id']); ?></td>
                                    <td><?php echo htmlspecialchars($menu['menu_name']); ?></td>
                                    <td>
                                        <a href="menu_manage.php?action=edit&id=<?php echo htmlspecialchars($menu['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="menu_manage.php?action=delete&id=<?php echo htmlspecialchars($menu['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this menu?');">Delete</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="3">No menus found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /Main Content -->

        <!-- Page Footer -->
        <?php include 'footer.php'; ?>
        <!-- /Page Footer -->
    </div>
    <!-- /Wrapper -->

    <?php include 'foot.php'; ?>
</body>
</html>

<?php $mysqli->close(); ?>
