<?php
// Include the database connection file
include 'db/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userId = isset($_POST['user_id']) ? $_POST['user_id'] : null;
    $menus = isset($_POST['menus']) ? $_POST['menus'] : [];
    $subpages = isset($_POST['subpages']) ? $_POST['subpages'] : [];

    switch ($action) {
        case 'insert':
            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            // Insert a new user with created field
            $stmt = $mysqli->prepare("INSERT INTO users (username, password, created) VALUES (?, ?, ?)");
            $createdAt = date('Y-m-d H:i:s'); // Current date and time
            $stmt->bind_param("sss", $username, $hashedPassword, $createdAt);
            if ($stmt->execute()) {
                $userId = $mysqli->insert_id;
                saveAccess($mysqli, $userId, $menus, $subpages);
                echo "User created successfully!";
            } else {
                echo "Error creating user: " . $mysqli->error;
            }
            $stmt->close();
            break;

        case 'update':
            if ($userId) {
                // Hash the password
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                // Update an existing user
                $stmt = $mysqli->prepare("UPDATE users SET username = ?, password = ? WHERE id = ?");
                $stmt->bind_param("ssi", $username, $hashedPassword, $userId);
                if ($stmt->execute()) {
                    saveAccess($mysqli, $userId, $menus, $subpages);
                    echo "User updated successfully!";
                } else {
                    echo "Error updating user: " . $mysqli->error;
                }
                $stmt->close();
            } else {
                echo "User ID is required for updating.";
            }
            break;

        case 'delete':
            if ($userId) {
                // Soft delete an existing user by setting the 'deleted' flag to 1
                $stmt = $mysqli->prepare("UPDATE users SET deleted = 1 WHERE id = ?");
                $stmt->bind_param("i", $userId);
                if ($stmt->execute()) {
                    echo "User soft-deleted successfully!";
                } else {
                    echo "Error deleting user: " . $mysqli->error;
                }
                $stmt->close();
            } else {
                echo "User ID is required for deletion.";
            }
            break;
    }
}

// Function to save menu and subpage access for a user
function saveAccess($mysqli, $userId, $menus, $subpages) {
    // Clear existing access
    $stmt = $mysqli->prepare("DELETE FROM user_access WHERE user_id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();

    // Get current datetime
    $createdAt = date('Y-m-d H:i:s');

    // Insert new menu access
    if (!empty($menus)) {
        $stmt = $mysqli->prepare("INSERT INTO user_access (user_id, menu_id, created) VALUES (?, ?, ?)");
        foreach ($menus as $menuId) {
            $stmt->bind_param("iis", $userId, $menuId, $createdAt);
            $stmt->execute();
        }
    }

    // Insert new subpage access
    if (!empty($subpages)) {
        $stmt = $mysqli->prepare("INSERT INTO user_access (user_id, subpage_id, created) VALUES (?, ?, ?)");
        foreach ($subpages as $subpageId) {
            $stmt->bind_param("iis", $userId, $subpageId, $createdAt);
            $stmt->execute();
        }
    }

    $stmt->close();
}


$mysqli->close();
?>
