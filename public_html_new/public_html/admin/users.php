<?php
// Database connection settings
$host = 'localhost';
$db = 'adminpanel'; // Replace with your actual database name
$user = 'root'; // Replace with your actual database username
$pass = ''; // Replace with your actual database password

// Create a new MySQLi connection
$mysqli = new mysqli($host, $user, $pass, $db);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch menus
$menuQuery = "SELECT id, menu_name FROM menu";
$menuResult = $mysqli->query($menuQuery);

// Fetch subpages
$subpageQuery = "SELECT id, menuid, pagename FROM subpages";
$subpageResult = $mysqli->query($subpageQuery);
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>
<style>
	@media (max-width: 768px) {
    .checkbox-inline {
        display: block; /* Make checkboxes stack vertically on small screens */
    }
}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    // Handle menu selection
    $('input[name="menus[]"]').on('change', function () {
        const selectedMenus = $('input[name="menus[]"]:checked').map(function () {
            return $(this).val();
        }).get();

        // Check if Admin menu is selected
        const isAdminChecked = selectedMenus.includes('1'); // Assuming '1' is the ID for "Admin"

        // Select/Deselect all subpages if Admin menu is selected
        if (isAdminChecked) {
            $('input[name="subpages[]"]').prop('checked', true);
        } else {
            // Deselect all subpages first
            $('input[name="subpages[]"]').prop('checked', false);

            // Auto-select subpages for selected menus excluding Admin
            $('input[name="subpages[]"]').each(function () {
                const subpageMenuId = $(this).data('menuid');
                $(this).prop('checked', selectedMenus.includes(subpageMenuId.toString()));
            });
        }
    });

    // Ensure that subpages of a menu are selected/deselected when the menu checkbox is changed
    $('input[name="menus[]"]').on('change', function () {
        const menuId = $(this).val();
        const isChecked = $(this).is(':checked');

        // Do not auto-select subpages for the Admin menu
        if (menuId !== '1') { // Assuming '1' is the menu ID for "Admin"
            $('input[name="subpages[]"]').each(function () {
                if ($(this).data('menuid') === menuId) {
                    $(this).prop('checked', isChecked);
                }
            });
        }
    });
});


function validateForm() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    if (!username || !password) {
        alert('Please fill out all required fields.');
        return false;
    }
    return true;
}
</script>

<body>
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
            <!-- Container -->
            <div class="container-fluid p-5 pb-0">
                <!-- Row -->
                <div class="row">
                    <section id="sec_2" class="hk-section">
                        <div class="hk-sec-title">
                            <h5>Create User</h5>
                        </div>
                        <div class="hk-example card card-shadow card-wth-tabs">
                            <div class="card-header">
                                <ul class="nav nav-line nav-tabs nav-sm nav-light card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#prev_tab_1">
                                            <span class="nav-link-text">Form</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body p-0">
                                <div class="tab-content m-0">
                                    <div class="tab-pane fade show active" id="prev_tab_1">
                                        <div class="container py-3">
                                            <div class="row">
                                                <div class="col">
                                                    <form action="user_action.php" method="post" onsubmit="return validateForm()">
                                                    <input type="hidden" name="action" value="insert"> <!-- Change this value depending on the action (insert, update, delete) -->
                                                        <div class="form-group">
                                                            <label for="username">Username:</label>
                                                            <input type="text" class="form-control" id="username" name="username" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="password">Password:</label>
                                                            <input type="password" class="form-control" id="password" name="password" required>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Menu Access:</label>
                                                            <div class="row">
                                                                <?php
                                                                // Initialize a counter for the column split
                                                                $menuCounter = 0;
                                                                // Display menus in two columns
                                                                if ($menuResult->num_rows > 0) {
                                                                    // Calculate the midpoint for column split
                                                                    $midPoint = ceil($menuResult->num_rows / 2);

                                                                    echo '<div class="col-md-6">'; // Start first column
                                                                    while ($menu = $menuResult->fetch_assoc()) {
                                                                        // Check if it's time to move to the second column
                                                                        if ($menuCounter == $midPoint) {
                                                                            echo '</div><div class="col-md-6">'; // Close first column and start second column
                                                                        }

                                                                        // Display the checkbox for the menu
                                                                        echo '<label class="checkbox-inline">';
                                                                        echo '<input type="checkbox" name="menus[]" value="' . $menu['id'] . '"> ' . $menu['menu_name'];
                                                                        echo '</label><br>';

                                                                        $menuCounter++;
                                                                    }
                                                                    echo '</div>'; // Close the second column
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Subpage Access:</label>
                                                            <div class="row">
                                                                <?php
                                                                // Initialize a counter for the column split
                                                                $subpageCounter = 0;
                                                                // Display subpages in two columns
                                                                if ($subpageResult->num_rows > 0) {
                                                                    // Calculate the midpoint for column split
                                                                    $midPoint = ceil($subpageResult->num_rows / 2);

                                                                    echo '<div class="col-md-6">'; // Start first column
                                                                    while ($subpage = $subpageResult->fetch_assoc()) {
                                                                        // Check if it's time to move to the second column
                                                                        if ($subpageCounter == $midPoint) {
                                                                            echo '</div><div class="col-md-6">'; // Close first column and start second column
                                                                        }

                                                                        // Display the checkbox for the subpage
                                                                        echo '<label class="checkbox-inline">';
                                                                        echo '<input type="checkbox" name="subpages[]" value="' . $subpage['id'] . '" data-menuid="' . $subpage['menuid'] . '"> ' . $subpage['pagename'];
                                                                        echo '</label><br>';

                                                                        $subpageCounter++;
                                                                    }
                                                                    echo '</div>'; // Close the second column
                                                                }
                                                                ?>
                                                            </div>
                                                        </div>

                                                        <button type="submit" class="btn btn-primary">Create User</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
            <!-- /Page Body -->

            <!-- Page Footer -->
            <?php include 'footer.php'; ?>
            <!-- / Page Footer -->
        </div>
    </div>
    <!-- /Wrapper -->

    <?php include 'foot.php'; ?>
</body>

</html>
