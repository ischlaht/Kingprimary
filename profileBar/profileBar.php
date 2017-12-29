


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

var ProfileBar = angular.module("ProfileBar", ['ProfileBar']);
ProfileBar.controller('AccountInfo', function ($scope, $http) {
});



</script>

<body>
<!-- ______________________;                               \\          /v\          //          -->
<!-- // _____________________________                      \\        // \\        //           -->
<!-- //___________________________________                  \\      //   \\      //            -->
<!-- //_____________________________                         \\    //     \\    //             -->
<!-- // ______________________                                \\__//       \\__//              -->
<!-- // _______________                              ______________________________________    -->

<div id="contentBarQuickMenu">
</div>

<!--<div ng-app="ProfileBar" id=""></div> -->
<img ng-controller="AccountInfo" id="contentBarimg" src="../images/menuIcon.png" ng-click="check()"/>

<div id="contentBarContainer">
    <div id="ProfileBar">
        <ul> <h4>Account</h4> </ul>

        <div id ="AccountInfo" ng-controller="AccountInfo"  ng-init="check()">
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