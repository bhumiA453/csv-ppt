<?php
session_start();
include('templates/header.php'); // Include the header
include('templates/nav.php'); //Include the Navigation

?>

<!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>Guide</h1>
                    <ol class="breadcrumb">
                    <li class="divider"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Guide</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">Guide for this website</div>
                                <div class="card-body">
                                    <h2>Hello World</h2>
                                </div>
                                <div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>


            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->
      <!-- Control Sidebar -->

<?php
include('templates/footer.php'); // Include the footer
?>