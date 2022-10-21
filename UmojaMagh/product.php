<?php
session_start();
ob_start();
error_reporting(0);
include 'setting.php';
if (isset($_POST['submit']))
{
    $project = $_POST['ptype'];
    $pdescription =$_POST['pdescription'];
    $pstate =$_POST['pstate']	;
    $pamount=$_POST['pamount'];
    $pduration=$_POST['pduration'];

    $sql = "INSERT INTO product (ptype , pdescription ,	pstate ,	pamount ,	pduration 	)
    VALUES ('$project', '$pdescription' ,	'$pstate', 	'$pamount' ,	'$pduration' 	)";
    $result = mysqli_query($con, $sql);
    echo "<script>
alert('Your product details submitted successfully');
window.location.href='bank.php';
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&amp;display=swap">
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
            <form class="form-example" action="product.php" method="post">
                <fieldset >
                    <div>
                        <center> <h4  style="font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif ;height: 50px; margin-top: 10px;">Product Section</h4></center>
                    </div>
                    <hr style="background-color: green;height: 2px;">
                    <div class="contents justify-content-center align-items-center ml-8 "
                         style="background-color: #eeeeee;padding-left: 10px;padding-right: 10px; font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif">
                        <div class="d-flex justify-content-between align-items-center">
                            <select style="font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;width: 80%; height: 45px;; border-radius: 20px;padding-left: 50px;"name="ptype" >
                                <option value="" >--Please select a Product--</option>
                                <option value="Fund">Fund</option>
                                <option value="Water">Water</option>
                                <option value="House">House</option>
                                <option value="Property Letting">Property Letting</option>
                                <option value="Property Sale/Purchase">Property Sale/Purchase</option>
                            </select>
                        </div><br>
                  <div class="d-flex justify-content-between align-items-center">
                            <textarea rows = "5" cols = "50" style="border-radius: 20px;padding-top: 10px;padding-left: 10px;" id="textarea"  name="pdescription" placeholder="Please share more information about your project"></textarea>
                        </div>
                        <div class="">
                            <p STYLE="padding-left: 10px;padding-top: 10px;">Would you need Umoja Magharibi Financing in this project?</p>
                              <input type="radio" id="yes" name="pstate" value="YES">
                              <label for="yes">Yes</label><br>
                              <input type="radio" id="no" name="pstate" value="NO">
                              <label for="no">No</label>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <input type="tel" class="form-control password"  style="width: 80%;border-radius: 20px" id="pamount" placeholder="How much financing would you require in KSH?" name="kinphone"><br><br><br>
                        </div><br>
                        <div class="d-flex justify-content-between align-items-center">
                                <select name="pduration" style="font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;padding-left:20px;width: 80%; height: 45px;; border-radius: 20px;">
                                    <option value="">--select Duration--</option>
                                    <option value="Within one week">Within one week</option>
                                    <option value="Within one month">Within one month</option>
                                    <option value="Within three months">Within three month</option>
                                </select>
                        </div>
                        <div class="form-group ml-10 pt-5 pb-5" >
                            <button type="reset" name="submit" class="btn btn-danger md">Reset</button>
                            <button type="submit" name="submit" class="btn btn-primary md">Next</button>
                        </div>

                    </div>
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

