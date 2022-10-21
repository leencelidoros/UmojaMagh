<?php
include 'setting.php';
if (isset($_POST['submit']))
{
    $bankname = $_POST['bankname'];
    $bankbranch =$_POST['bankbranch'];
    $accountname=$_POST['accountname']	;
    $accountnumber=$_POST['accountnumber'];
    $amtinvest=$_POST['amtinvest'];
    $iperiod=$_POST['iperiod'];
    $prenew=$_POST['prenew'];

    $sql = "INSERT INTO bank( bankname,bankbranch ,	accountname ,accountnumber, 	amtinvest 	,iperiod 	,prenew)
    VALUES ('$bankname',	'$bankbranch ',	'$accountname' ,	'$accountnumber', 	'$amtinvest', 	'$iperiod','$prenew' )";
    $result = mysqli_query($con, $sql);

    echo "<script>
alert('Your Bank details have been added successfully');
window.location.href='terms.php';
</script>";

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/home/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/home/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/home/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/home/favicon-16x16.png">
    <link rel="manifest" href="assets/images/home/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/home/ms-icon-144x144.png">
    <title>Umoja Magharibi -<?php echo $rgallery['seo_title'];?></title>
    <meta name="description" content="<?php echo $rgallery['seo_description'];?>">
    <meta name="keyword" content="<?php echo $rgallery['seo_keyword'];?>">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/flickity.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&amp;display=swap">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
          crossorigin="anonymous">
</head>
<style>
    input {
        width: 50%;
        border: 2px solid black;
        border-radius: 2px;
        font-size:5 pt;
        /*height: px;*/
        width : 200px;
    }
</style>
<body class="container-fluid bg-cornflower-blue1">
<div class="container h-100 pt-5 pb-5 ">
    <div class="row h-100 justify-content-center align-items-center ">
        <div class="col-10 col-md-8 col-lg-6  " style="background-color: #eeeeee">
            <!-- Form -->
            <form class="form-example" action="bank.php" method="post">
                <fieldset >
                    <div>
                        <center> <h4  style="font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif ;height: 50px; padding-top: 10px;">Bank Details</h4></center>
                    </div>
                    <hr style="background-color: green;height: 2px;">
                    <div class="contents justify-content-center align-items-center ml-8 "
                         style="background-color: #eeeeee;padding-left: 10px;padding-right: 10px; font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif">
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="text" name="bankname" placeholder="Enter your bank name"  style="width: 80%;border-radius: 20px;height: 50px;">
                        </div><br>
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="text" class="form-control password"  style="width: 80%;border-radius: 20px;height: 50px;" id="bankbranch" placeholder="Enter the bank branch..." name="bankbranch"><br><br><br>
                        </div><br>
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="text" name="accountname" style="width: 80%;border-radius: 20px;height: 50px;" placeholder="Enter your account name">
                        </div><br>
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="text" name="accountnumber"  style="width: 80%;border-radius: 20px;height: 50px;"placeholder="Enter your account number">

                        </div><br>

                        <div class="d-flex justify-content-between align-items-center">
                            <input type="text" name="amtinvest"style="width: 80%;border-radius: 20px;height: 50px;" placeholder="How much funds (in KSH) would like to place at UM to earn interest? Note Minimum Placement is KES 50,000">
                        </div><br>

                        <div class="d-flex justify-content-between align-items-center">
                            <input type="text" name="iperiod"style="width: 80%;border-radius: 20px;height: 50px;" placeholder="For what period (in Months) would you place your funds?">
                        </div><br>
                        <div class="">
                            <p  style="width: 80%;border-radius: 20px;height: 50px;">Do you allow us to auto renew when the period lapses?</p>
                              <input type="radio" id="yes" name="prenew" value="Yes">
                              <label  style="font-size: 12pt" for="yes">Yes</label><br>
                              <input type="radio" id="no" name="prenew" value="No">
                              <label style="font-size: 12pt" for="no">No</label><br>
                        </div>
                        <div class="form-group ml-10 pt-5 pb-5" >
                            <button type="reset" name="submit" class="btn btn-danger md">Reset</button>
                            <button type="submit" name="submit" class="btn btn-primary md">Next</button>
                        </div>

                    </div>
                    <hr style="background-color: green;height: 2px;">
                    <!-- End input fields -->
                </fieldset>
            </form>
            <!-- Form end -->
        </div>
    </div>
</div>
</form>
</div>
</div>
</body>
</html>

