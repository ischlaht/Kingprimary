


//_______________________________________________________________________________________________________________________________________________
//___________________________________________          \\          /v\          //        _________________________________________________
// ____________________________________________         \\        // \\        //       _________________________________________________
//___________________________________________            \\      //   \\      //          _________________________________________________
//_____________________________________________           \\    //     \\    //         _________________________________________________
// __________________________________________              \\__//       \\__//            _________________________________________________
// ______________________________________________________________________________________________________________________________________________

// ContentBar
$(document).ready ( function() {
    $('#contentBarimg'). click( function () {
        $('#contentBarContainer').slideToggle('2000');
    });
});

// Dropdown Menu website design
$(document).ready(function(){
    $('.wdmenu').hide();
      $('#dropDownMenuwdContainer').hover( function() {
        $('.wdmenu').toggle(200);
      });
});

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
                url: '../phpFiles/regInsert.php',
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
    }
}]);

phpapp.controller('AccountInfo', ['$scope', '$http', function ($scope, $http) {
    $scope.check = function() { 
          var FD = new FormData();
            // AJAX request
            // var usernameinfo = getElementById('usernameinfo').value;
            $http({
                method: 'get',
                url: '../phpFiles/account-info.php',
                data: FD,
                headers: {'Content-Type': undefined},
            })
                .then(function (response, data, status, headers) {
                    $scope.userNames = response.data;
                    console.log(data);
                    console.log(response.status);
                    console.log(response.headers);
                    
                });
    }
}]);




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



// Email validation AJAX
$(document).ready(function() {
    // $('#reg-User').css({"opacity": ".3", "background-color": "red", "border": "none", "color": "black"});
    $('#eMail').keyup(function() {
        var eMail = $(this).val();
        $.post('../phpFiles/email-availability.php', { eMail:eMail }, function(data) {
          $('#emailAvailability').text(data);
// change border to red if email does not equal exists
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
//






  //   pasowrd management and validation AJAX
$(document).ready(function() {
  $('#password2, #password').keyup(function() {
      var password = $("#password").val()
      var password2 = $("#password2").val()
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



// Firstname check
$(document).ready( function() {
    $('#firstName').keyup( function () {
      var firstName = $(this).val();
        if (firstName.length === 0) {
            // $('#firstNameAvailability').text('');
            $('#firstName').css("border-color", "red");
            
        }
        if (firstName.length > 0) {
            // $('#firstNameAvailability').text('asdfasdf');
            $('#firstName').css("border-color", "green");
        }
    });
});

// Lastname check
$(document).ready( function() {
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

//  PHone number check
$(document).ready( function() {
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

$(document).ready( function () {
    // $('#userName, #eMail, #firstName, #lastName, #phoneNumber, #password, #password2').keyup( function () {
    //     // window.confirm('working');
    // });
});

// $(document).ready( function() {
//     $('#reg-User').css({"border-color": "red", "background-color": "red"});
//     $('#reg-User').attr("disabled", true);
    
//     $('.form-control').keyup( function() {
//         var ERROR = $('#ERROR').text();
//         var availability = $('.availability').val();
//             if($('#userName').val().length == 0 || $('eMail').val().length == 0 || $('#firstName').val().length == 0) {
//                 $('#reg-User').attr("disabled", true);
//                 $('#reg-User').css({"border-color": "red", "background-color": "red"});
//             }
//             if(availability.length == 0 && $('.form-control').val().length != 0) {  
//             $('#reg-User').attr("disabled", false);
//             $('#reg-User').css({"border-color": "", "background-color": ""});
//             }
            

//         // window.alert('workingngngngnngngngngnngg duduudee eee');

//     })
// });


//-------------------------------- ===== eMail availability and ajax styling =====-----------------------------------------
