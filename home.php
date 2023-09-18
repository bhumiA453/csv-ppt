<?php
session_start();
include('templates/header.php'); // Include the header
include('templates/nav.php'); //Include the Navigation

$baseDirectory = __DIR__;
$publicDirectory = $baseDirectory . '/public/';
$folders = array_filter(scandir($publicDirectory), function ($item) use ($publicDirectory) {
    $itemPath = $publicDirectory . $item;
    return is_dir($itemPath) && !in_array($item, ['.', '..']) && !is_file($itemPath);
});
$dropdown = '<select name="folder">';
$dropdown .= '<option value="">Select a folder</option>'; // Add a default option
foreach ($folders as $folder) {
    $dropdown .= '<option value="' . $folder . '">' . $folder . '</option>';
}
$dropdown .= '</select>';


?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li class="divider"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Export PPT</div>
                        <div class="card-body">
                            <form method="post">
                                <div class="col-md-12 mb-3">
                                    <label for="brand_name" class="form-label">Brand Name</label>
                                    <input type="text" class="form-control" id="brand_name" name="brand_name" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="folder">Select a folder:</label>
                                    <?php echo $dropdown; ?>                   
                                </div>
                                <!-- <input type="submit" class="btn btn-primary" value="Submit"> -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        <div>
                        <?php 
                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                $selectedFolder = $_POST['folder'];
                                $brand = $_POST['brand_name'];
                                // Process the selected folder here
                                echo 'You selected: ' . $selectedFolder . ' for '.$brand;
                            }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->

<script>
    $(document).ready(function() {
        // Initialize Select2 on the dropdown element
        $('select[name="folder"]').select2({
            placeholder: "Select a folder",
            allowClear: true, // Adds a clear button
            width: "100%" // Adjust the width as needed
        });
    });
</script>

<?php
include('templates/footer.php'); // Include the footer
?>

