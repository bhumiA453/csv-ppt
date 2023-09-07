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

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Export PPT</div>
                <div class="card-body">
                    <form method="post">
                        <div class="mb-3">
                                <label for="brand_name" class="form-label">Brand Name</label>
                                <input type="text" class="form-control" id="brand_name" name="brand_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="folder">Select a folder:</label>
                            <?php echo $dropdown; ?>
                        </div>
                        
                        <input type="submit" value="Submit">
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
    </div>
</div>
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

