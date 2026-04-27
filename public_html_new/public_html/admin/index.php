<?php
// Start sessio
session_start();

// Initialize variables
$username = '';
$errorMessage = '';

include 'db/db_connection.php';
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Prepare and execute the query to fetch the user
    $stmt = $mysqli->prepare("SELECT id, password FROM users WHERE username = ? AND deleted = 0");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $username;

            // Redirect to home.php
            header("Location: home.php");
            exit;
        } else {
            $errorMessage = 'Invalid username or password.';
        }
    } else {
        $errorMessage = 'Invalid username or password.';
    }

    $stmt->close();
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hencework.com/theme/appster/login-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 06:12:42 GMT -->
<?php include 'header.php'; ?>
<body>
    <!-- Wrapper -->
    <div class="hk-wrapper hk-pg-auth" data-footer="simple">
        <!-- Main Content -->
        <div class="hk-pg-wrapper pt-0 pb-xl-0 pb-5">
            <div class="hk-pg-body pt-0 pb-xl-0">
                <!-- Container -->
                <div class="container-xxl px-5">
                    <!-- Row -->
                    <div class="row">
                        <div class="col-sm-10 position-relative mx-auto">
                            <div class="auth-content py-8">
                                <form class="w-100" action="index.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-7 col-sm-10 mx-auto">
                                            <div class="text-center mb-7">
                                                <a class="navbar-brand me-0" href="index.html">
                                                    <img class="brand-img d-inline-block" style="width:35%" src="../assets/images/b-logo.png" alt="brand">
                                                </a>
                                            </div>
                                            <div class="card card-lg card-shadow">
                                                <div class="card-body">
                                                    <h4 class="mb-4 text-center">Sign in to Admin Panel</h4>
                                                    <?php if (!empty($errorMessage)): ?>
                                                        <div class="alert alert-danger text-center"><?php echo htmlspecialchars($errorMessage); ?></div>
                                                    <?php endif; ?>
                                                    <div class="row gx-3">
                                                        <div class="form-group col-lg-12">
                                                            <div class="form-label-group">
                                                                <label for="username">User Name</label>
                                                            </div>
                                                            <input class="form-control" id="username" name="username" placeholder="Enter username" value="<?php echo htmlspecialchars($username); ?>" type="text" required>
                                                        </div>
                                                        <div class="form-group col-lg-12">
                                                            <div class="form-label-group">
                                                                <label for="password">Password</label>
                                                            </div>
                                                            <div class="input-group password-check">
                                                                <span class="input-affix-wrapper">
                                                                    <input class="form-control" id="password" name="password" placeholder="Enter your password" type="password" required>
                                                                    <a href="#" class="input-suffix text-muted">
                                                                        <span class="feather-icon"><i class="form-icon" data-feather="eye"></i></span>
                                                                        <span class="feather-icon d-none"><i class="form-icon" data-feather="eye-off"></i></span>
                                                                    </a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <button type="submit" class="btn btn-primary btn-uppercase btn-block">Login</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>
                <!-- /Container -->
            </div>
            <!-- /Page Body -->

            <!-- Page Footer -->
            <div class="hk-footer border-0">
                <footer class="container-xxl footer px-5">
                    <div class="row">
                        <div class="col-xl-8 text-center">
                            <p class="footer-text pb-0"><span class="copy-text">Social Aviator © 2022 All rights reserved.</span> <a href="#" class="">Privacy Policy</a><span class="footer-link-sep">|</span><a href="#" class="">T&C</a><span class="footer-link-sep">|</span><a href="#" class="">System Status</a></p>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- / Page Footer -->
        </div>
        <!-- /Main Content -->
    </div>
</body>

<!-- Mirrored from hencework.com/theme/appster/login-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Aug 2024 06:12:42 GMT -->
</html>
