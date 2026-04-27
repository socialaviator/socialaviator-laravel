<?php
// Include the database connection file
include 'db/db_connection.php';

// Initialize variables
$action = $_GET['action'] ?? null;
$subpageId = $_GET['id'] ?? null;
$subpageName = '';
$menuId = '';
$operationMessage = '';

// Fetch subpage details for update
if ($action === 'edit' && $subpageId) {
    $stmt = $mysqli->prepare("SELECT menuid, pagename FROM subpages WHERE id = ?");
    $stmt->bind_param("i", $subpageId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $subpage = $result->fetch_assoc();
        $subpageName = $subpage['pagename'];
        $menuId = $subpage['menuid'];
    } else {
        $operationMessage = 'Subpage not found.';
    }
    $stmt->close();
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $subpageName = $_POST['pagename'];
    $menuId = $_POST['menuid'];
    $subpageId = $_POST['subpage_id'] ?? null;

    switch ($action) {
        case 'insert':
            $stmt = $mysqli->prepare("INSERT INTO subpages (menuid, pagename, created) VALUES (?, ?, NOW())");
            $stmt->bind_param("is", $menuId, $subpageName);
            if ($stmt->execute()) {
                $operationMessage = "Subpage created successfully!";
            } else {
                $operationMessage = "Error creating subpage: " . $mysqli->error;
            }
            $stmt->close();
            break;

        case 'update':
            if ($subpageId) {
                $stmt = $mysqli->prepare("UPDATE subpages SET menuid = ?, pagename = ? WHERE id = ?");
                $stmt->bind_param("isi", $menuId, $subpageName, $subpageId);
                if ($stmt->execute()) {
                    $operationMessage = "Subpage updated successfully!";
                } else {
                    $operationMessage = "Error updating subpage: " . $mysqli->error;
                }
                $stmt->close();
            } else {
                $operationMessage = "Subpage ID is required for updating.";
            }
            break;

        case 'delete':
            if ($subpageId) {
                $stmt = $mysqli->prepare("DELETE FROM subpages WHERE id = ?");
                $stmt->bind_param("i", $subpageId);
                if ($stmt->execute()) {
                    $operationMessage = "Subpage deleted successfully!";
                } else {
                    $operationMessage = "Error deleting subpage: " . $mysqli->error;
                }
                $stmt->close();
            } else {
                $operationMessage = "Subpage ID is required for deletion.";
            }
            break;
    }
}

// Fetch all menus for the dropdown
$menuQuery = "SELECT id, menu_name FROM menu";
$menuResult = $mysqli->query($menuQuery);

// Fetch all subpages for display
$subpageQuery = "SELECT id, menuid, pagename, created FROM subpages";
$subpageResult = $mysqli->query($subpageQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subpage Management</title>
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
            <!-- Page Header -->
            <div class="container">
                <h1 class="mt-4">Subpage Management</h1>
                <?php if ($operationMessage): ?>
                    <div class="alert alert-info"><?php echo $operationMessage; ?></div>
                <?php endif; ?>

                <form action="subpage_manage.php" method="post" class="mt-4">
                    <input type="hidden" name="action" value="<?php echo $action === 'edit' ? 'update' : 'insert'; ?>">
                    <?php if ($action === 'edit'): ?>
                        <input type="hidden" name="subpage_id" value="<?php echo htmlspecialchars($subpageId); ?>">
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="menuid">Menu:</label>
                        <select class="form-control" id="menuid" name="menuid" required>
                            <option value="">Select Menu</option>
                            <?php if ($menuResult->num_rows > 0): ?>
                                <?php while ($menu = $menuResult->fetch_assoc()): ?>
                                    <option value="<?php echo htmlspecialchars($menu['id']); ?>" <?php echo ($menu['id'] == $menuId) ? 'selected' : ''; ?>>
                                        <?php echo htmlspecialchars($menu['menu_name']); ?>
                                    </option>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="pagename">Subpage Name:</label>
                        <input type="text" class="form-control" id="pagename" name="pagename" value="<?php echo htmlspecialchars($subpageName); ?>" required>
                    </div>

                    <button type="submit" class="btn btn-primary"><?php echo $action === 'edit' ? 'Update' : 'Create'; ?> Subpage</button>
                </form>

                <h2 class="mt-4">Existing Subpages</h2>
                <table class="table table-striped mt-2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Menu ID</th>
                            <th>Subpage Name</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($subpageResult->num_rows > 0): ?>
                            <?php while ($subpage = $subpageResult->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($subpage['id']); ?></td>
                                    <td><?php echo htmlspecialchars($subpage['menuid']); ?></td>
                                    <td><?php echo htmlspecialchars($subpage['pagename']); ?></td>
                                    <td><?php echo htmlspecialchars($subpage['created']); ?></td>
                                    <td>
                                        <a href="subpage_manage.php?action=edit&id=<?php echo htmlspecialchars($subpage['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="subpage_manage.php?action=delete&id=<?php echo htmlspecialchars($subpage['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this subpage?');">Delete</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5">No subpages found.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <!-- Page Footer -->
            <?php include 'footer.php'; ?>
            <!-- / Page Footer -->
        </div>
    </div>
    <!-- /Wrapper -->
</body>
</html>

<?php $mysqli->close(); ?>
