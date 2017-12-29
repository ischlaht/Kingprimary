<?php require('conn.php'); ?>
<?php
$data = array();
$Session = $_SESSION['userName'];
$changeTo = $_POST['editUsernameText'];


function updateUsername() {
    $sql = "UPDATE users Set userName = '$ChangeTo' WHERE userName = '$Session'";

}

if(isset($changeTo)) {
    updateUsername();
    $data[userName] = 'userName changed!';
}
$userName = $_POST['userName'];


?>