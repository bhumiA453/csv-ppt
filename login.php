<?php
session_start();
include('templates/header.php'); 

// Check for success and error messages in the session
$errorMessage = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : '';

// Unset the messages from the session to display them only once
unset($_SESSION['login_error']);
?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <?php
                        // Display the error message if it exists
                        
                        if (isset($errorMessage) && $errorMessage != '') {
                            echo '<div class="alert alert-danger mt-3">' . $errorMessage . '</div>';
                        }
                        ?>
                        <form method="post" action="login_process.php">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include('templates/footer.php'); // Include the footer
?>
