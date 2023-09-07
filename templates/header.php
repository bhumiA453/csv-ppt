<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Distillery</title>
    <!-- Include Bootstrap CSS and any other CSS files here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
        // Get the current page's filename (e.g., "index.php", "about.php", etc.)
        var currentPage = window.location.href.split("/").slice(-1)[0];
        // alert(currentPage);
        // Remove the "active" class from all navigation links
        var navLinks = document.querySelectorAll(".nav-link");
        navLinks.forEach(function(link) {
            link.classList.remove("active");
        });

        // Add the "active" class to the link that matches the current page
        var currentNavLink = document.getElementById(currentPage.replace(".php", "-link"));
        // alert(currentNavLink);
        if (currentNavLink) {
            currentNavLink.classList.add("active");
        }
    });
    
</script>
</head>
<body>
    <!-- Add your header content here, e.g., navigation menu -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Your Website</a>
        --- Add your navigation links here --
    </nav> -->
