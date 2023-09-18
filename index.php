<body class="login-bg login-page">
<?php
session_start();
include('templates/header.php'); 

// Check for success and error messages in the session
$errorMessage = isset($_SESSION['login_error']) ? $_SESSION['login_error'] : '';

// Unset the messages from the session to display them only once
unset($_SESSION['login_error']);
?>
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="" class="h1"><img src="https://dev.brand-scapes.com/hotstar/public/dist/img/hotstar.png" alt="Brandscapes Worldwide" width="100%"></a>
        </div>
        <div class="card-body">
            <h3 class="login-box-msg">Sign In</h3>
            <?php
            // Display the error message if it exists
            if (isset($errorMessage) && $errorMessage != '') {
                echo '<div class="alert alert-danger mt-3">' . $errorMessage . '</div>';
            }
            ?>
            <form action="login_process.php" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Hotstar Email id" name="email" id="email">
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password">
                </div>
        
                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

    
<?php
include('templates/footer.php'); // Include the footer
?>
