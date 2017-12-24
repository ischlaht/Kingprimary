<?php require('conn.php'); ?>

<?php 

$eMail = $_POST['eMail'];

$error= array();

$sql = $conn->query("SELECT * FROM users WHERE eMail = '$eMail'");

    if(empty($eMail)){
        array_push($error, "Email connot be empty");
        echo '';
    }
    elseif (filter_var($eMail, FILTER_VALIDATE_EMAIL) === false) {
        array_push($error, "Email format is invalid");
        echo "Email is invalid";
    }
    elseif (mysqli_num_rows($sql) != 0 && !empty($eMail)){
        array_push($error, "Email unavailable");
        echo "Email unavailable";
    }
    elseif (count($error) === 0){
        echo '';
    }
?>