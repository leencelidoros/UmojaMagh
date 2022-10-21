<?php
session_start();
ob_start();
error_reporting(0);
include 'setting.php';
if (isset($_POST['nextBtn'])){
    $name=$_POST['name'];
    $idno=$_POST['idno'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $addresstwo=$_POST['addresstwo'];
    $phoneno=$_POST['phoneno'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $kinname=$_POST['kinname'];
    $kinphone=$_POST['kinphone'];

    $kinrelation=$_POST['kinrelationship'];
    $kinemail=$_POST['kinemail'];

    $pphoto=$_FILES['pphoto']['name'];
    $pphoto =$_FILES['pphoto']['tmp_name'];
//     $photoid=$_FILES['name']['photoid'];
    $sql="INSERT INTO pdetails (name,idno,email,phoneno,address,addresstwo,city,kinname,kinemail,kinphone,pphoto)
VALUES ('$name','$idno','$email','$phoneno','$address','$addresstwo','$city','$kinname','$kinemail','$kinphone','$pphoto')";
    $result=mysqli_query($con,$sql);
}
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: #ffffff;
    }

    #regForm {
        background-color: #38e6e6;
        margin: 100px auto;
        font-family: Raleway;
        padding: 40px;
        width: 70%;
        min-width: 300px;
    }

    h1 {
        text-align: center;
        text-decoration-color:#FFFFFF ;
    }

    input {
        padding: 10px;
        width: 100%;
        font-size: 17px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
        align-items: center;
    }

    button {
        background-color: #04AA6D;
        color: #ffffff;
        border: none;
        padding: 10px 20px;
        font-size: 17px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }
}

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #04AA6D;
    }
</style>
<body>
<form id="regForm" action="form.php">
    <div>
        <h1>Umoja Magharibi Product Sign Up</h1>
        <p>
            Use this form to sign up on our new products
        </p>
    </div>
    <hr>
    <div">
        <p>
            Umoja Magharibi K LTD is a financial and property management company based in Kenya with a vision of empowering businesses to grow the lives & livelihoods of our people. Kindly share with us your details to support this initiative!
        </p>
    </div>

    <div class="tab">
        <h2>Personal Details:</h2>
        <hr>
        <label class="labelName" ><span>Name</span>
        </label>
        <input type="text" name="name" placeholder="Enter your name" required><br><br>
        <label class="labelName"><span>IdNo</span>
        </label>
        <input type="text" name="idno" placeholder="Enter your idnumber" required><br><br>
        <label class="labelName"><span>Email</span>
        </label>
        <input type="text" name="email" placeholder="Enter your email" required><br><br>
        <label class="labelName"><span>PhoneNo</span>
        </label>
        <input type="text" name="phoneno" placeholder="Enter your phone number"required><br><br>
        <label class="labelName"><span>Address</span>
        </label>
        <input type="text" name="address" placeholder="Enter your address"required><br><br>
        <label class="labelName"><span>Address 2</span>
        </label>
        <input type="text" name="addresstwo" placeholder="Enter your Address"required><br><br>
        <label class="labelName"><span>City</span>
        </label><br>
        <input type="text" name="city" placeholder="Enter your city"required><br>
        <label class="labelName"><span>Country</span>
        </label><br>
        <select name="country" style="">
            <option value="country">--select country--</option>
            <option value="KENYA">Kenya</option>
            <option value="UGANDA">Uganda</option>
            <option value="AUSTRALIA">Australia</option>
            <option value="EGYPT">Egypt</option>
            <option value="ETHIOPIA">Ethiopia</option>
            <option value="RWANDA">Rwanda</option>
            <option value="SOUTH AFRICA">South Africa</option>
        </select><br>
    </div>
<!--    <div class="tab">-->
<!--        <h2> Next of Kin Details:</h2>-->
<!--        <hr>-->
<!--        <label class="labelName"><span>Next of Kin name</span>-->
<!--        </label><br>-->
<!--        <input type="text" name="kinname" placeholder="Next of Kin name"required><br>-->
<!--        <label class="labelName"><span>Next of Kin Email</span>-->
<!--        </label><br>-->
<!--        <input type="text" name="kinemail" placeholder="Enter your next of kin email "required><br>-->
<!--        <label class="labelName"><span>Next of kin phone number</span>-->
<!--        </label><br>-->
<!--        <input type="text"name="kinphone" placeholder="Next of kin phone number"required><br>-->
<!--        <label class="labelName"><span>Next of kin relationship</span>-->
<!--        </label><br>-->
<!--        <select name="kinrelationship">-->
<!--            <option value="">--select Relationship--</option>-->
<!--            <option value="SIBLING">Sibling</option>-->
<!--            <option value="PARENT">Parent</option>-->
<!--            <option value="SON">Son</option>-->
<!--            <option value="DAUGHTER">Daughter</option>-->
<!--            <option value="GUARDIAN">Guardian</option>-->
<!--        </select><br>-->
<!--        <label class="labelName"><span>Photo</span>-->
<!--            <!--                            <input type="file" name="pphoto" value="file"><br><br>-->-->
<!--            <input type="file" name="pphoto" id="pphoto-id" accept="image/*"-->
<!--                   onchange="ZFLive.addMultipleFileUploadFields(this.files,'pphoto','1')">-->
<!--    </div>-->
<!--    <div class="tab "  >-->
<!--        <h2>Product Selection:</h2>-->
<!--        <hr>-->
<!--        <p>Please select product</p>-->
<!---->
<!--          <label for="fund">Fund Placement</label><br>-->
<!--          <input type="radio" id="fund" name="ptype" value="FUND">-->
<!--          <label for="water">water Project</label><br>-->
<!--          <input type="radio" id="water" name="ptype" value="WATER">-->
<!--          <input type="radio" id="house" name="ptype" value="HOUSE">-->
<!--          <label for="house">House Construction Project</label><br>-->
<!--          <input type="radio" id="house" name="ptype" value="PROPERTY">-->
<!--          <label for="property">Property Letting</label><br>-->
<!--          <input type="radio" id="sale" name="ptype" value="SALE">-->
<!--          <label for="sale">Property Sale/Purchase</label><br>-->
<!--        p>Please share more information about your project</p>-->
<!--        <textarea id="textarea" name="pdescription" placeholder="Please type here"></textarea><br>-->
<!--        <p>Would you need Umoja Magharibi Financing in this project?</p>-->
<!--          <input type="radio" id="yes" name="pstate" value="YES">-->
<!--          <label for="yes">Yes</label><br>-->
<!--          <input type="radio" id="no" name="pstate" value="NO">-->
<!--          <label for="no">No</label><br>-->
<!--        <p>How much financing would you require in KSH?</p>-->
<!--        <input type="text" name="pamount" placeholder=""required><br><br>-->
<!--        <p>When do you intend to undertake the project?</p>-->
<!--        <select name="pduration">-->
<!--            <option value="">--select Duration--</option>-->
<!--            <option value="">Within one week</option>-->
<!--            <option value="">Within one month</option>-->
<!--            <option value="">Within three month</option>-->
<!--        </select><br><br>-->
<!--    </div>-->
<!--    <div class="tab">-->
<!--        <h2>Bank Info:</h2>-->
<!--        <hr>-->
<!--        <p>Bank Name::</p>-->
<!---->
<!--        <input type="text" name="bankname" placeholder=""required><br><br>-->
<!--        <p>Bank Branch::</p>-->
<!--        <input type="text" name="bankbranch" placeholder=""required><br><br>-->
<!--        <p>Account Name::</p>-->
<!--        <input type="text" name="accountname" placeholder=""required><br><br>-->
<!--        <p>Account Number::</p>-->
<!--        <input type="text" name="accountnumber" placeholder=""required><br><br>-->
<!--        <p>How much funds (in KSH) would like to place at UM to earn interest? Note Minimum Placement is KES 50,000</p>-->
<!--        <input type="text" name="amtinvest" placeholder=""required><br><br>-->
<!--        <p>For what period (in Months) would you place your funds?</p>-->
<!--        <input type="text" name="iperiod" placeholder=""required><br><br>-->
<!--        <p>Do you allow us to auto renew when the period lapses?</p>-->
<!--          <input type="radio" id="yes" name="prenew" value="YES">-->
<!--          <label for="yes">Yes</label><br>-->
<!--          <input type="radio" id="no" name="prenew" value="NO">-->
<!--          <label for="no">No</label><br>-->
<!---->
<!--    </div>-->
    <div style="overflow:auto;">
        <div style="float:right;">
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
            <button type="button" name="nextBtn" id="nextBtn"onclick="nextPrev(1)">Next</button>
        </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>
</form>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form..
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>

</body>
</html>
