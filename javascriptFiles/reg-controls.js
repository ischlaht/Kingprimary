






// __________________                                  /\                 /\          //        //=====\\             
//___________________________                         //\\               //\\        //       //         \\           
// ________________________________                  //  \\             //  \\      //       //                       
//_________________________________________         //====\\   =====   //    \\    //       ||         ========       
//_________________________________                //      \\         //      \\  //         \\          //           
// __________________________                     //        \\       //        \\//            \\======//             
// ________________________              ____________________________________________________

// Angular insert form for registration
var phpapp = angular.module('RegisterSystem', ['ngSanitize']);
phpapp.controller('regInsert', ['$scope', '$http', function ($scope, $http) {
    $scope.upload = function(){
        //variables and binds
        var fd = new FormData();
        var userName = document.getElementById('userName').value;
        var password= document.getElementById('password').value;
        var firstName = document.getElementById('firstName').value;
        var lastName = document.getElementById('lastName').value;
        var eMail = document.getElementById('eMail').value;
        var phoneNumber = document.getElementById('phoneNumber').value;
        var password2 = document.getElementById('password2').value;
        var ERROR = document.getElementById('ERROR').value;
        //apending the files to bind them
        fd.append('userName', userName);
        fd.append('password', password);
        fd.append('firstName', firstName);
        fd.append('lastName', lastName);
        fd.append('eMail', eMail);
        fd.append('phoneNumber', phoneNumber);
        fd.append('password2', password2);
        // AJAX request
        $http({
            method: 'post',
            url: '../phpFiles/registerInsert.php',
            data: fd,
            headers: {'Content-Type': undefined},
        })
            .then(function(response, header, status, config) {
                console.log(response.data);
                console.log('Jquery Success');
                response.data;
                $scope.response = response.data;
                $scope.errorA = response.data;
                document.getElementById("ERROR").textContent = response.data;
                alert(response.header);
            });
    };
}]);
//Manually Bootstraping REGISTER SYSTEM app^^^^^^^^^^^^^^^^
$('#RegisterSystem').ready( function() {
angular.bootstrap($('#RegisterSystem'), ['RegisterSystem']);
});


//_______________________________________________________________________________________________________________________________________________
//___________________________________________          \\          /v\          //        _________________________________________________
// ____________________________________________         \\        // \\        //       _________________________________________________
//___________________________________________            \\      //   \\      //          _________________________________________________
//_____________________________________________           \\    //     \\    //         _________________________________________________
// __________________________________________              \\__//       \\__//            _________________________________________________
// ______________________________________________________________________________________________________________________________________________


//___________________________                      ============          //===\\
// ________________________________                     ||             //       \\
//_________________________________________             ||    =====   ||    \\   ||
//_________________________________              \\     |/             \\     \\//
// __________________________                     \\===//                \\===// \\===
// ________________________              ____________________________________________________


//-------------------------------- ===== USERNAME availability and ajax styling =====--------------------------------------
//check username availability AJAX
$(document).ready(function() {
    $('#userName').keyup(function() {
        var userName = $(this).val();
        $.post('../phpFiles/user-availabilitty.php', { userName:userName }, function(data) {
            $('#userAvailability').text(data);
            // change border to red if username does not equal exists
            if ($('#userName').val().length == 0) {
                $('#userName').css("border-color", "red");
                }
            if ($('#userAvailability').text().length != 0){
                $('#userName').css("border-color", "red");
            }
            if ($('#userAvailability').text().length == 0 && $('#userName').val().length != 0){
                $('#userName').css("border-color", "green");
            }
        });
    });
});

$(document).ready(function() { //password 1 and 2 Validation
    $('#password2, #password').keyup(function() {
        var password = $("#password").val();
        var password2 = $("#password2").val();
        $.post('../phpFiles/password-check.php', { password:password}, function(data) {
            $('#passwordAvailability').text(data);
            // clear text and make red border if passowrd empty
            if ($('#password').val().length === 0){
                $('#passwordAvailability').text('');
                $('#password').css("border-color", "red");
            }
            // if pass confirm is empty
            if ($('#password2').val().length === 0){
                $('#passwordMatch').text('');
                $('#password2').css("border-color", "red");
            }
            // turn red if availability is showing a message
            if ($('#passwordAvailability').text().length != 0){
                $('#password').css("border-color", "red");
            }
            // turn green if passavailability is not showing
            if ($('#passwordAvailability').text().length == 0 && $('#password').val().length != 0){
                $('#password').css("border-color", "green");
            }
            
            // if passwords no not match and pass 2 is not empty
            if(password != password2 && password2.length != 0){
                $('#password2').css("border-color", "red");
                $('#passwordMatch').text('Passwords must match');            
            }
            //if passwords match and pass 2 is not empty
            if(password === password2 && password2.length != 0 && password.length > 4) {
                $('#password2').css("border-color", "green");
                $('#passwordMatch').text('');
            }
            // check if password confirm has special characters
            if (/^[a-zA-Z0-9- ]*$/.test(password2) === false){
                $('#passwordMatch').text('Password must contain only letters and number');            
            }
        });
    });
    
});


$(document).ready(function() {  // Email validation AJAX
    $('#eMail').keyup(function() {
        var eMail = $(this).val();
        $.post('../phpFiles/email-availability.php', { eMail:eMail }, function(data) {
          $('#emailAvailability').text(data);
            if ($('#eMail').val().length == 0) {
            $('#eMail').css("border-color", "red");
            }
            if ($('#emailAvailability').text().length > 0 && $('#eMail').val().length != 0 ) {
            $('#eMail').css("border-color", "red");
            }
            if ($('#emailAvailability').text().length <= 2 && $('#eMail').val().length != 0) {
            $('#eMail').css("border-color", "green");
            }
        });
    });
});

$(document).ready( function() {     // Firstname check
    $('#firstName').keyup( function () {
      var firstName = $(this).val();
        if (firstName.length === 0) {
            $('#firstName').css("border-color", "red");
        }
        if (firstName.length > 0) {
            $('#firstName').css("border-color", "green");
        }
    });
});

$(document).ready( function() { // Lastname check
    $('#lastName').keyup( function () {
      var lastName = $(this).val();
        if (lastName.length === 0) {
            $('#lastName').css("border-color", "red");
        }
        if (lastName.length > 0) {
            $('#lastName').css("border-color", "green");
        }
    });
});

$(document).ready( function() {  //  PHone number check
    $('#phoneNumber').keyup( function () {
      var phoneNumber = $(this).val();
        if (phoneNumber.length != 10) {
            $('#phoneNumber').css("border-color", "red");
        }
        if (phoneNumber.length === 10) {
            $('#phoneNumber').css("border-color", "green");
        }
    });
});




// Dropdown Menu website design
$(document).ready(function(){
    $('.wdmenu').hide();
    $('#dropDownMenuwdContainer').hover( function() {
        $('.wdmenu').toggle(200);
    });
});

























