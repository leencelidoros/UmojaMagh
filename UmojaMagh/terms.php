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
            <form class="form-example" action="success.php" method="post">

                    <div>
                        <center> <h4  style="font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif ;height: 50px; padding-top: 10px;">Terms and Conditions</h4></center>
                    </div>
                    <hr style="background-color: green;height: 2px;">
                    <div class="contents justify-content-center align-items-center  "
                         style="background-color: #eeeeee;padding-left: 10px;padding-right: 10px; font-family: 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif">


                        <div class="center-div align-content-center">
                            <fieldset>
                                <p>
                                <p> Our terms and conditions for services rendered can be found on www.umojamagharibi.com.</p>
                                <p>   For any further clarification, feel free to contact us on:</p>
                                <p>   Umoja Magharibi K Ltd</p>
                                <p>Makos Plaza, 1st Floor Suite 6, Opposite KMTC,</p>
                                <p> Bungoma,</p>
                                <p> Kenya.</p>
                                <p>  Tel: +254 748 944 703</p>
                                <p> Email: feedback@umojamagharibi.com</p>


                                </p><br>

                                <p>I hereby declare that I have been explained to, read and understood the terms and conditions governing my engagement with Umoja Magharibi Kenya Ltd services including but not limited to fund placement, borrowing, SMS/Email alerts etc.</p>
                                <p>  I accept and agree to be bound by the said terms and conditions including those limiting the Company Liability. I understand that Umoja Magharibi Kenya Ltd, at its sole discretion, amend completely or partially its services tariff with at least 30 days’ notice.</p>
                                <p>  I also confirm correctness of information provided herein and hereby allow Umoja Magharibi K Limited to verify the same to any authority. I hereby give consent to Umoja Magharibi to save my information in their software for ease of managing my accounts and transactions thereof.</p>



                            </fieldset>

                            </div>
                        <input type="checkbox"  name="terms" id="terms" value="checkbox" ">
                        <label for="terms">I Agree</label>
                    <div class="form-group ml-10 pt-5 pb-5" >

                            <button type="submit" name="submit" class="btn btn-primary md">Finish & Submit</button>
                        </div>

                    </div>
                    <!-- End input fields -->

            </form>
            <!-- Form end -->
        </div>
    </div>
</div>

</body>
</html>


