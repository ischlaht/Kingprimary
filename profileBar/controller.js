// ContentBar
$(document).ready( function() {
    $('#contentBarimg').click( function () {
        $('#contentBarContainer').slideToggle('2000');
    });
});


//username edit display
$(document).ready( function() {
    $('#edit_Username_Show').click(function() {
        event.stopPropagation();
          $('#edit_Username_Text').show();
          $('#edit_Username_btn').show()
            $('#edit_Username_Text, #edit_Username_btn').click( function() {
                event.stopPropagation();
                    $(document).click(function() {
                        $('#edit_Username_Text').hide();
                        $('#edit_Username_btn').hide()
                    });
            });
    });
});




// __________________                                  /\                 /\          //        //=====\\             _
//___________________________                         //\\               //\\        //       //         \\           _
// ________________________________                  //  \\             //  \\      //       //                       _
//_________________________________________         //====\\   =====   //    \\    //       ||         ========       _
//_________________________________                //      \\         //      \\  //         \\          //           _
// __________________________                     //        \\       //        \\//            \\======//             _
// ________________________              ________________________________________________________________________________
var ProfileBar = angular.module("ProfileBar", ['ProfileBar']);
ProfileBar.controller('AccountInfo', function ($scope, $http) {
    $scope.check = function() {
        // AJAX request
        $http.get('../phpFiles/account-info.php')
            .then(function (response, data) {
                $scope.user_UName = response.data.userName;
                $scope.user_first_Name = response.data.firstName;
                $scope.user_last_Name = response.data.lastName;
                $scope.user_Email = response.data.eMail;
                $scope.user_Phone = response.data.phoneNumber;
               // console.log(response.data);
           });
        };
    });
$('#ProfileBar').ready( function () {
    angular.bootstrap($('#ProfileBar'), ['ProfileBar']);
});


//var ProfileBar = angular.module("ProfileBar", ['ProfileBar']);
//ProfileBar.controller('AccountInfo', function ($scope, $http) {
//});