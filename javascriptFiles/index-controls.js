






// loading screen
// $(document).ready( function () {
//   var image = new Image();
//     $('img').load( function () {
//       console.log('loading image loaded');
//     }).attr('src', '/images/mainlogo.jpg');
// });




// Dropdown Menu website design
$(document).ready(function(){
    $('.wdmenu').hide();
      $('#dropDownMenuwdContainer').hover( function() {
        $('.wdmenu').toggle(200);
      });
});