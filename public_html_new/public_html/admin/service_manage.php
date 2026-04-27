<?php
// Include the database connection file
include 'db/db_connection.php';

// Initialize variables
$action = $_GET['action'] ?? null;
$serviceId = $_GET['id'] ?? null;
$title = $subtitle = $description = '';
$point1_heading = $point1_description = '';
$point2_heading = $point2_description = '';
$point3_heading = $point3_description = '';
$arrowpointheader = $arrowpointdesc = '';
$operationMessage = '';

// Fetch service details for update
if ($action === 'edit' && $serviceId) {
    $stmt = $mysqli->prepare("SELECT title, subtitle, description, point1_heading, point1_description, point2_heading, point2_description, point3_heading, point3_description, arrowpointheader, arrowpointdesc FROM services WHERE id = ?");
    $stmt->bind_param("i", $serviceId);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $service = $result->fetch_assoc();
        $title = $service['title'];
        $subtitle = $service['subtitle'];
        $description = $service['description'];
        $point1_heading = $service['point1_heading'];
        $point1_description = $service['point1_description'];
        $point2_heading = $service['point2_heading'];
        $point2_description = $service['point2_description'];
        $point3_heading = $service['point3_heading'];
        $point3_description = $service['point3_description'];
        $arrowpointheader = $service['arrowpointheader'];
        $arrowpointdesc = $service['arrowpointdesc'];
    } else {
        $operationMessage = 'Service not found.';
    }
    $stmt->close();
}

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];
    $point1_heading = $_POST['point1_heading'];
    $point1_description = $_POST['point1_description'];
    $point2_heading = $_POST['point2_heading'];
    $point2_description = $_POST['point2_description'];
    $point3_heading = $_POST['point3_heading'];
    $point3_description = $_POST['point3_description'];
    $arrowpointheader = $_POST['arrowpointheader'];
    $arrowpointdesc = $_POST['arrowpointdesc'];
    $serviceId = $_POST['service_id'] ?? null;

    switch ($action) {
        case 'insert':
            $stmt = $mysqli->prepare("INSERT INTO services (title, subtitle, description, point1_heading, point1_description, point2_heading, point2_description, point3_heading, point3_description, arrowpointheader, arrowpointdesc) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssss", $title, $subtitle, $description, $point1_heading, $point1_description, $point2_heading, $point2_description, $point3_heading, $point3_description, $arrowpointheader, $arrowpointdesc);
            if ($stmt->execute()) {
                $operationMessage = "Service created successfully!";
                
                // Clear form fields
                $title = $subtitle = $description = '';
                $point1_heading = $point1_description = '';
                $point2_heading = $point2_description = '';
                $point3_heading = $point3_description = '';
                $arrowpointheader = $arrowpointdesc = '';
            } else {
                $operationMessage = "Error creating service: " . $mysqli->error;
            }
            $stmt->close();
            break;

        case 'update':
            if ($serviceId) {
                $stmt = $mysqli->prepare("UPDATE services SET title = ?, subtitle = ?, description = ?, point1_heading = ?, point1_description = ?, point2_heading = ?, point2_description = ?, point3_heading = ?, point3_description = ?, arrowpointheader = ?, arrowpointdesc = ? WHERE id = ?");
                $stmt->bind_param("sssssssssssi", $title, $subtitle, $description, $point1_heading, $point1_description, $point2_heading, $point2_description, $point3_heading, $point3_description, $arrowpointheader, $arrowpointdesc, $serviceId);
                if ($stmt->execute()) {
                    $operationMessage = "Service updated successfully!";
                    
                    // Clear form fields
                    $title = $subtitle = $description = '';
                    $point1_heading = $point1_description = '';
                    $point2_heading = $point2_description = '';
                    $point3_heading = $point3_description = '';
                    $arrowpointheader = $arrowpointdesc = '';
                } else {
                    $operationMessage = "Error updating service: " . $mysqli->error;
                }
                $stmt->close();
            } else {
                $operationMessage = "Service ID is required for updating.";
            }
            break;

        case 'delete':
            if ($serviceId) {
                $stmt = $mysqli->prepare("UPDATE services SET deleted = 1 WHERE id = ?");
                $stmt->bind_param("i", $serviceId);
                if ($stmt->execute()) {
                    $operationMessage = "Service marked as deleted successfully!";
                } else {
                    $operationMessage = "Error marking service as deleted: " . $mysqli->error;
                }
                $stmt->close();
            } else {
                $operationMessage = "Service ID is required for deletion.";
            }
            break;
    }
}

// Fetch all services for display
$serviceQuery = "SELECT id, title, subtitle, description, point1_heading, point2_heading, point3_heading, arrowpointheader, created FROM services WHERE deleted = 0";
$serviceResult = $mysqli->query($serviceQuery);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Management</title>
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
                <h1 class="mt-4">Service Management</h1>
                <?php if ($operationMessage): ?>
                    <div class="alert alert-info"><?php echo $operationMessage; ?></div>
                <?php endif; ?>

                <form action="service_manage.php" method="post" class="mt-4">
                    <input type="hidden" name="action" value="<?php echo $action === 'edit' ? 'update' : 'insert'; ?>">
                    <?php if ($action === 'edit'): ?>
                        <input type="hidden" name="service_id" value="<?php echo htmlspecialchars($serviceId); ?>">
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subtitle">Subtitle:</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" value="<?php echo htmlspecialchars($subtitle); ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="4"><?php echo htmlspecialchars($description); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="point1_heading">Point 1 Heading:</label>
                        <input type="text" class="form-control" id="point1_heading" name="point1_heading" value="<?php echo htmlspecialchars($point1_heading); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="point1_description">Point 1 Description:</label>
                        <textarea class="form-control" id="point1_description" name="point1_description" rows="2" required><?php echo htmlspecialchars($point1_description); ?></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="point2_heading">Point 2 Heading:</label>
                        <input type="text" class="form-control" id="point2_heading" name="point2_heading" value="<?php echo htmlspecialchars($point2_heading); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="point2_description">Point 2 Description:</label>
                        <textarea class="form-control" id="point2_description" name="point2_description" rows="2" required><?php echo htmlspecialchars($point2_description); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="point3_heading">Point 3 Heading:</label>
                        <input type="text" class="form-control" id="point3_heading" name="point3_heading" value="<?php echo htmlspecialchars($point3_heading); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="point3_description">Point 3 Description:</label>
                        <textarea class="form-control" id="point3_description" name="point3_description" rows="2" required><?php echo htmlspecialchars($point3_description); ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="arrowpointheader">Arrow Point Header:</label>
                        <input type="text" class="form-control" id="arrowpointheader" name="arrowpointheader" value="<?php echo htmlspecialchars($arrowpointheader); ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="arrowpointdesc">Arrow Point Description:</label>
                        <textarea class="form-control" id="arrowpointdesc" name="arrowpointdesc" rows="2"><?php echo htmlspecialchars($arrowpointdesc); ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary"><?php echo $action === 'edit' ? 'Update' : 'Create'; ?> Service</button>
                </form>

                <h2 class="mt-4">Existing Services</h2>
                <table class="table table-striped mt-2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Description</th>
                            <th>Created</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($serviceResult->num_rows > 0): ?>
                            <?php while ($service = $serviceResult->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($service['id']); ?></td>
                                    <td><?php echo htmlspecialchars($service['title']); ?></td>
                                    <td><?php echo htmlspecialchars($service['subtitle']); ?></td>
                                    <td><?php echo htmlspecialchars(substr($service['description'], 0, 50)) . '...'; ?></td>
                                    <td><?php echo htmlspecialchars($service['created']); ?></td>
                                    <td>
                                        <a href="service_manage.php?action=edit&id=<?php echo htmlspecialchars($service['id']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="service_manage.php?action=delete&id=<?php echo htmlspecialchars($service['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to mark this service as deleted?');">Delete</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6">No services found.</td>
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
</body>
</html>

<?php $mysqli->close(); ?>
