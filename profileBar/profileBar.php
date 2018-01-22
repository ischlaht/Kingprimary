
<?php //session_start(); ?>
<!Doctype html>
<html lang="en">
<head>
  <title>Title</title>
  <!-- Required; meta; tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link href="../profileBar/profileBarStructure.css" rel="stylesheet">
</head>

<script>

var ProfileBar = angular.module('ProfileBar', ['ngAnimate']);



</script>


<style>
.fadein.ng-hide{
    display: block!important;
}


</style>
<body>
<!-- ______________________;                               \\          /v\          //          -->
<!-- // _____________________________                      \\        // \\        //           -->
<!-- //___________________________________                  \\      //   \\      //            -->
<!-- //_____________________________                         \\    //     \\    //             -->
<!-- // ______________________                                \\__//       \\__//              -->
<!-- // _______________                              ______________________________________    -->

<div id="contentBarQuickMenu" >
    <div id="loginContainer">
        <h3>Login</h3>
        <ul>Username :
            <input type="text" name="loginUsername" id="loginUsername"> 
        </ul>
        <ul>Password :
            <input type="text" name="loginPassword" id="loginPassword">   
        </ul>     
    </div>
        <input type="submit" name="loginUser" value="Login">
</div>

<!--<div ng-app="ProfileBar" id=""></div> -->
<img type="button" ng-controller="AccountInfo" id="contentBarimg" src="../images/menuIcon.png" ng-click="check()" ng-show="Togggle"/>

<div id="contentBarContainer" ng-hide="Togggle" class="ng-hide">

    <div id="ProfileBar">
            <ul> <h4> Account Info 
                <div id="dropDownOpen"> &#x27A3; </div>
                <div id="dropDownClosed"> &#8628; </div>   
            </h4></ul>
        <div id ="AccountInfo" ng-controller="AccountInfo"  ng-init="check()">
        <div ng-controller="AccountInfo" ng-click="tester(test)"> Click me</div>
        <div ng-controller="AccountInfo" ng-click="tester(testing)"> Click meeeee</div>        
        
            <div class="accountListing">
                <b> <ol>Account Name : </ol> </b>
                        <p>{{user_UName}}</p>
                        <!-- Edit button -->
                        <button class="edit_btn" id="edit_Username_Show"> <em>Edit</em> </button>
                            <!-- Edit pop-up -->
                            <input type="textbox" id="edit_Username_Text" class ="profile_Edit_Text" name="editUsernameText">
                            <input type="submit" id="edit_Username_btn" class ="profile_Edit_btn" name="EditUserNameSubmit" value="Update">
            </div>
            <div class="accountListing">
                <b> <ol>Email :</ol> </b>
                        <p>{{user_Email}}</p>
                        <button class="edit_btn"><em>Edit</em></button>
                        <input type="textbox" id="edit_Username_Text" class ="profile_Edit_Text" name="editUsernameText">
                            <input type="submit" id="edit_Username_btn" class ="profile_Edit_btn" name="editUserNameSubmit" value="Update">
            </div>
            <div class="accountListing">
                <b> <ol>FirstName :</ol> </b>
                        <p>{{user_first_Name}}</p>
                        <button class="edit_btn"><em>Edit</em></button>
                        <input type="textbox" id="edit_Username_Text" class ="profile_Edit_Text" name="editUsernameText">
                            <input type="submit" id="edit_Username_btn" class ="profile_Edit_btn" name="EditUserNameSubmit" value="Update">
            </div>
            <div class="accountListing">
                <b> <ol>LastName :</ol> </b>
                        <p>{{user_last_Name}}</p>
                        <button class="edit_btn"><em>Edit</em></button>
                        <input type="textbox" id="edit_Username_Text" class ="profile_Edit_Text" name="editUsernameText">
                            <input type="submit" id="edit_Username_btn" class ="profile_Edit_btn" name="EditUserNameSubmit" value="Update">
            </div>
            <div class="accountListing">
                <b> <ol>Phone-Number :</ol> </b>
                        <p>{{user_Phone}}</p>
                        <button class="edit_btn"><em>Edit</em></button>
                        <input type="textbox" id="edit_Username_Text" class ="profile_Edit_Text" name="editUsernameText">
                            <input type="submit" id="edit_Username_btn" class ="profile_Edit_btn" name="EditUserNameSubmit" value="Update">
            </div>
        </div>
    </div><!--ProfileBar -->
</div><!-- ContentBar Container -->

<!-- Controller Application -->
<script src="../profileBar/controller.js"></script>
</body>


</html>