<?php
session_start();
include('templates/header.php'); // Include the header
include('templates/nav.php'); //Include the Navigation

// Check for success and error messages in the session
$successMessage = isset($_SESSION['successMessage']) ? $_SESSION['successMessage'] : '';
$errorMessage = isset($_SESSION['errorMessage']) ? $_SESSION['errorMessage'] : '';

// Unset the messages from the session to display them only once
unset($_SESSION['successMessage']);
unset($_SESSION['errorMessage']);

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Add User</div>
                <div class="card-body">
                    <?php
                    // Display the success message if it exists
                    if (isset($successMessage) && $successMessage != '') {
                        echo '<div class="alert alert-success mt-3">' . $successMessage . '</div>';
                    }
                    if (isset($errorMessage) && $errorMessage != '') {
                        echo '<div class="alert alert-danger mt-3">' . $errorMessage . '</div>';
                    }
                    ?>
                        <form method="post" action="save_user.php">
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label>Role</label><br>
                                <input type="radio" id="role_admin" name="role" value="1" required>
                                <label for="role_admin">Admin</label>

                                <input type="radio" id="role_user" name="role" value="2" required>
                                <label for="role_user">User</label>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div> -->
                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Get the current page's filename (e.g., "index.php", "about.php", etc.)
        var currentPage = window.location.href.split("/").slice(-1)[0];

        // Remove the "active" class from all navigation links
        var navLinks = document.querySelectorAll(".nav-link");
        navLinks.forEach(function(link) {
            link.classList.remove("active");
        });

        // Add the "active" class to the link that matches the current page
        var currentNavLink = document.getElementById(currentPage.replace(".php", "-link"));
        if (currentNavLink) {
            currentNavLink.classList.add("active");
        }
    });
    
</script>


<?php
include('templates/footer.php'); // Include the footer
?>
