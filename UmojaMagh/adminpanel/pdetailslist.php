<?php
ob_start();
session_start();
include 'setting.php';
include 'session_check.php';
?>
<?php



//if($_GET['eid'] && $_GET['status']=='active'){
//    $update = "UPDATE faq SET faq_status='Inactive' WHERE faq_id='".$_GET['eid']."'";
//    $run_update=mysqli_query($con,$update);
//}else{
//    $update = "UPDATE faq SET faq_status='Active' WHERE faq_id='".$_GET['eid']."'";
//    $run_update=mysqli_query($con,$update);
//}
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
                        <h3>Record List</h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"> <a href="#">Home</a> </li>
                                <li class="breadcrumb-item"> <a href="#">Tables</a> </li>
                                <li class="breadcrumb-item active" aria-current="page">List Record</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="example1" class="table table-striped table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Id Number</th>
                                                <th>Phone Number</th>
                                                <th>Product Type</th>
                                                <th>Amount</th>
                                                <th>Product Duration</th>
                                                <th>Bank Name</th>
                                                <th>Bank Branch</th>
                                                <th>Account Number</th>
                                                <th>Date Of Application</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
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
                                                    <tr>
                                                        <td><h6><?php echo $row['name'];?></h6></td>
                                                        <td><h6><?php echo $row['idno'];?></h6></td>
                                                        <td><h6><?php echo $row['phoneno'];?></h6></td>
                                                        <td><h6><?php echo $row['ptype'];?></h6></td>
                                                        <td><h6><?php echo $row['pamount'];?></h6></td>
                                                        <td><h6><?php echo $row['pduration'];?></h6></td>
                                                        <td><h6><?php echo $row['bankname'];?></h6></td>
                                                        <td><h6><?php echo $row['bankbranch'];?></h6></td>
                                                        <td><h6><?php echo $row['accountnumber'];?></h6></td>
                                                        <td><h6><?php echo $row['created_at'];?></h6></td>
<!--                                                        <td><h6>--><?php //echo $row['address'];?><!--</h6></td>-->
<!--                                                        <td><h6>--><?php //echo $row['addresstwo '];?><!--</h6></td>-->
<!--                                                        <td><h6>--><?php //echo $row['city'];?><!--</h6></td>-->
<!--                                                        <td><h6>--><?php //echo $row['kinname'];?><!--</h6></td>-->
<!--                                                        <td><h6>--><?php //echo $row['kinemail'];?><!--</h6></td>-->
<!--                                                        <td><h6>--><?php //echo $row['kinphone'];?><!--</h6></td>-->
                                                        <td>
                                                            <a href="pdetailsview.php?" eid=<?php echo $row['faq_id'];?>" >
                                                            <button type=" button" class="btn btn-warning btn-rounded">
                                                            <i class="ti-eye"></i></button></a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            <?php }else{?>
                                                <tr>
                                                    <td><span style="color:#F00">No Record Found!</span></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
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

