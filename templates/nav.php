<?php
$role = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : '2';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" id="home-link" href="home.php">Home</a>
            </li>
            <?php if($role != 2) { ?>
            <li class="nav-item">
                <a class="nav-link" id="add_user-link" href="add_user.php">Add User</a>
            </li>
            <?php } ?>
            <li class="nav-item">
                <a class="nav-link" id="guide-link" href="guide.php">Guide</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="logout-link" href="logout.php">Logout</a>
            </li>
        </ul> 

    </div>
</nav>


