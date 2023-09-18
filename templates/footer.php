    <!-- Control Sidebar -->
<div class="profile-hover">
            <div class="user-profile-icon fa fa-user-circle"></div>
            <div class="user-profile">
                <span class=""><?= $_SESSION['user_name'] ?></span></br>
                <?php if($role == 1){ ?>
                <span class="">Admin</span>
                <?php } ?>
                <button id="logoutButton">Logout</button>
                <!-- <h1><a href="logout.php">LogOut</a></h1>  -->
            </div>
      </div>
        
      
     <div class="popup-overlay"></div>
    <div class="popup-overlay-bell"></div>   
    </div>
    <!-- Add your footer content here, e.g., copyright information -->
    <!-- <footer class="footer">
        <div class="container" style="text-align: center;">
            <span class="text-muted">© <?php //date('Y'); ?> Your Website</span>
        </div>
    </footer> -->

    <script type="text/javascript">
        // JavaScript code to redirect to logout.php when the button is clicked
        document.getElementById("logoutButton").addEventListener("click", function() {
            window.location.href = "logout.php";
        });
    </script>
    
    <!-- Include Bootstrap JavaScript and any other JS files here -->
    <!-- plugins:js -->
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main-js.js"></script>
</body>
</html>
