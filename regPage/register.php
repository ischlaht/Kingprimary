<?php session_start(); ?>


<!Doctype html>
<html lang="en">
<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">    
  <!-- Bootstrap JS -->
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> -->
  <!-- Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Anguular/maybe ajax??? CDN -->
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <!--  Allows you to sanatize all angular data :D -->
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-sanitize.js"></script>

  <!-- Linking css/JS files -->
  <link href="reg.css" rel="stylesheet">
  
</head>



<!-- Testing____________________ ===== ====== ===== ===== ===== ===== ===== -->
<script>

</script>


<div id="regtotalContainer">

<body>
<!-- ______________________________ ===== Header, Logo, Menubar ===== _____________________________________ -->
<!-- <img id="loader" class="loading"> -->
<div id="headerContainer">
    <img src="../images/mainlogo.jpg" id="mainLogo"/>

    <div id="headerContactContainer">
        <h4>Contact Info</h4>
        <p><b>Email:</b> KingSysyemsDEV@Gmail.com</p>
        <p><b>Phone:</b> 307-321-6559</p>
        <p>Isaac Schlaht</p>
    </div>
    <!--_____________ ===== Start of menu bar and buttons in it =====________________________________ -->
    <div id="menuBar">
        <p>UPDATES! : No current updates or alerts, have a great day!</p>
        <a id='menubtn' href="index.html" style="margin-right: 90px">Contact</a>
        <a id='menubtn' href="index.html">PC Repair</a>
        <div id="dropDownMenuwdContainer">
            <h6>Website Design</h6>
            <a class='wdmenu' href="index.html">1st menu</a>
            <a class='wdmenu' href="index.html">2nd menu</a>
            <a class='wdmenu' href="index.html">3rd menu</a>
        </div> <!-- dropdown menu -->
    </div> <!-- menubar -->
</div> <!-- header container END -->


<!-- ______________________                               \\          /v\          //          -->
<!-- // _____________________________                      \\        // \\        //           -->
<!-- //___________________________________                  \\      //   \\      //            -->
<!-- //_____________________________                         \\    //     \\    //             -->
<!-- // ______________________                                \\__//       \\__//              -->
<!-- // _______________                              ______________________________________    -->


<!--___________________________ ===== Profile BAR ===== ________________________________________________________________ -->
<?php include('../profileBar/profileBar.php') ?>

<!--_________________ ===== Reg Rules ===== _____________________________________________________________________________-->
<div id="regRules">
    <b>Signup Help</b>
        <label>Username</label>
            <p>- Must not be in use, contain special characters and must be 5 to 20 characters longb</p>
        <label>Email</label>
            <p>- Must not be in use, contain special characters and must be 5 to 20 characters long</p>
        <label>Firstname and Lastname</label>
            <p>- Must not contain special characters and must be atlesat 1 letter</p>
        <label>Phone-number</label>
            <p>- Phone-number is not required, although for busniess owners that have a website through me or clients that want fast contact when your compouter is being repaired, it helps me get in contact with you faster! If you do enter a phone-number it MUST BE 10 DIGITS!</p>
        <label>Passwords</label>
            <p>- Must not contain special characters and must be 6 to 20 characters long.
                <br>- Passwords must match! </br></p>
    <h5>If these requirements are not meet, your information will not be submitted even if it seems like it was.</h5>
</div><!--for reg rules-->


<!--________________________________===== Registrastion Form ===== ______________________________________________________-->
<div id="RegisterSystem">
    <div id="registerMainContainer">
        <!-- title of registration header -->
        <p>Registration</p>
            <form method="POST" enctype="multipart/form-data">
                <label>UserName</label>
                    <input type="text" ng-controller="regInsert" name="userName" class="form-control" id="userName">
                    <div class="availability" id="userAvailability"></div>
                        <div style="background-color: black; height: 1px; width: 100%; margin-top: 10px;"></div>
                <label>Email</label>
                    <input type="email" ng-controller="regInsert" name="eMail" class="form-control" id="eMail">
                    <div class="availability" id="emailAvailability"></div>
                        <div style="background-color: black; height: 1px; width: 100%; margin-top: 10px;"></div>
                <label>Firstname</label>
                    <input type="text" ng-controller="regInsert"  name="firstName" class="form-control" id="firstName">
                    <div class="availability" id="firstNameAvailability"></div>
                        <div style="background-color: black; height: 1px; width: 100%; margin-top: 10px;"></div>
                <label>Lastname</label>
                    <input type="text" ng-controller="regInsert"  name="lastName" class="form-control" id="lastName">
                        <div style="background-color: black; height: 1px; width: 100%; margin-top: 10px;"></div>
                <label>Phone-Number <h6>Optional (10 digits)</h6></label>
                    <input type="number" ng-controller="regInsert"  name="phoneNumber" class="form-control" id="phoneNumber">
                        <div style="background-color: black; height: 1px; width: 100%; margin-top: 10px;"></div>
                <label>Password</label>
                    <input type="password" ng-controller="regInsert" name="password" class="form-control" id="password">
                    <div class="availability" id="passwordAvailability"></div>
                        <div style="background-color: black; height: 1px; width: 100%; margin-top: 10px;"></div>
                <label>Confirm Password</label>
                    <input type="password"   name="password2" class="form-control" id="password2" autocomplete>
                    <div class="availability" id="passwordMatch"></div>
                        <div style="background-color: black; height: 1px; width: 100%; margin-top: 10px;"></div>
                <input type="button" ng-controller="regInsert" name="reg-User" ng-click='upload()' id="reg-User" value="Register">

                <div id="ERROR" ng-controller="regInsert"></div>
                <!-- <div id="successLogin" ng-controller="regInsert"></div> -->
                <h5>Already a Member?<a href="register.php">Sign-in</a></h5>
            </form><!-- registration form -->
    </div><!-- REg main container END -->
</div><!-- Registration application -->


<script src="../javascriptFiles/reg-controls.js"></script>





<!-- PHP for URL ( somewhat USELESS USELESS USELESS) -->
<?php
        //         $URLFunction = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        //         if (strpos($URLFunction, "form=empty") == true) {
            //     echo "<div class='loginerror'>Must fill out all fields!</div>";
            //     exit();
            // }
            ?>



</body>

</div><!-- regtotalContainer END -->
</html>