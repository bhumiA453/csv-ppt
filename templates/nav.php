<?php
$role = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : '2';
?>
<body class="skin-blue-black">
    <div class="wrapper">
        <header class="main-header col-lg-12">
                <span class="logo-mid"><img src="assets/images/hotstarlogo.png"/> Hotstar</span>
                <div class="fa fa-bars" id="menu_bar"></div>
                <div class="user-profile">
                <span><?= $_SESSION['user_name'] ?>
                <?php if($role == 1){ ?>
                    </br>Admin</span>
                <?php } ?>
                    <div class="mini-user fa fa-user-circle"></div>
                </div><!--
                <div class="fa fa-flag-o" id="icon_bar">
                    <span class="label bg-red">4</span>
                </div> -->
                <!--
                <div class="fa fa-envelope-o" id="icon_bar">
                    <span class="label bg-yellow">7</span>
                </div> -->
        </header>
        <div class="leftMenu">
            <ul class="leftMenuList" id="menu-list">
                <li class="active tooltip_nav point01">
                    <a href="home.php">
                    <i class="fa fa-dashboard" aria-hidden="true"></i>
                    <span>Dashboard</span>
                    <p>Dashboard</p>
                    </a>
                </li>
                <?php if($role != 2) { ?>
                <li class="tooltip_nav point02">
                    <a href="add_user.php">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>Add User</span>
                    <p>Add User</p>
                    </a>
                </li>
                <?php } ?>
                <li class="tooltip_nav point03">
                    <a href="guide.php">
                    <i class="fa fa-file" aria-hidden="true"></i>
                    <span>Guide</span>
                    <p>Guide</p>
                    </a>
                </li>
            </ul>
        </div>
    <!-- </div> -->