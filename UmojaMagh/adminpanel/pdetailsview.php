<?php
ob_start();
session_start();
include 'setting.php';
include 'session_check.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_SESSION['session_admininfo']['admin_fullname']?></title>
    <link rel="shortcut icon" href="assets/media/image/favicon.png"/>
    <link rel="stylesheet" href="vendors/bundle.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendors/datepicker/daterangepicker.css" type="text/css">
    <link rel="stylesheet" href="vendors/dataTable/datatables.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/app.min.css" type="text/css">
</head>
<body class="scrollable-layout">
<div class="layout-wrapper">
    <!-- Header -->
    <?php include 'common/header.php';?>
    <!-- ./ Header -->
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- begin::navigation -->
        <?php include 'common/left.php';?>
        <!-- end::navigation -->
        <!-- Content body -->
        <div class="content-body">
            <!-- Content -->
            <div class="content ">
                <div class="page-header">
                    <div>
                        <h3>View Record</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"> <a href="#">Home</a> </li>
                                <li class="breadcrumb-item"> <a href="#">Tables</a> </li>
                                <li class="breadcrumb-item active" aria-current="page">View Record</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">

                                        <?php
                                        $pd= "select 
                                            pdetails.name, pdetails.idno, pdetails.phoneno,pdetails.created_at,
                                            product.ptype,   product.pamount, product.pduration,
                                            bank.bankname ,  bank.bankbranch ,  bank.accountnumber
                                             from pdetails
                                             LEFT JOIN product
                                                    ON pnumber=product.productid
                                                    LEFT JOIN bank
                                                    ON pnumber=bank.bankid";

                                        //                                            $pd="select * from pdetails";
                                        $run_faq=mysqli_query($con,$pd);
                                        if(mysqli_num_rows($run_faq)>0){
                                            while($row=mysqli_fetch_array($run_faq)){
//                                                    ?>
                                                    <table class="table table-striped  table-bordered">
                                                <tr>
                                                <tr>
                                                    <td>Name</td>
                                                    <td><?php echo $row['name'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>ID Number</td>
                                                    <td><?php echo $row['idno'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Phone Number</td>
                                                    <td><?php echo $row['phoneno'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Product Type</td>
                                                    <td><?php echo $row['ptype'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Product Amount</td>
                                                    <td><?php echo $row['pamount'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Product Duration</td>
                                                    <td><?php echo $row['pduration'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Bank Name</td>
                                                    <td><?php echo $row['bankname'];?></td>
                                                </tr>
                                                <tr>
                                                    <td>Bank Branch</td>
                                                    <td><?php echo $row['bankbranch'];?></td>
                                                </tr>
                                                <tr>
                                                    <td> Account Number</td>
                                                    <td><?php echo $row['accountnumber'];?></td>
                                                </tr>
                                                        <tr>
                                                            <td> Date of Apllication</td>
                                                            <td><?php echo $row['created_at'];?></td>
                                                        </tr>



                                            <?php } ?>

                                        <?php } ?>


                                        </table>
                                        <a href="pdetailslist.php" style="color:#006">

                                            <button type="button" class="btn btn-info waves-effect waves-light">Return Back</button>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./ Content -->
            <!-- Footer -->
            <?php include 'common/footer.php';?>
            <!-- ./ Footer -->
        </div>
        <!-- ./ Content body -->
    </div>
    <!-- ./ Content wrapper -->
</div>
<!-- ./ Layout wrapper -->
<!-- Main scripts -->
<script src="vendors/bundle.js"></script>
<!-- DataTable -->
<script src="vendors/dataTable/datatables.min.js"></script>
<script src="assets/js/examples/datatable.js"></script>
<!-- Prism -->
<script src="vendors/prism/prism.js"></script>
<!-- App scripts -->
<script src="assets/js/app.min.js"></script>
</body>
</html>

