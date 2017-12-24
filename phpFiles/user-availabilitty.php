<?php require('conn.php'); ?>
<?php 
$userName = $_POST['userName'];
$sql = $conn->query("SELECT * FROM users WHERE userName = '$userName'");

    if(empty($userName)){
        echo "";

    }
    elseif (!preg_match('#^[a-zA-Z0-9äöüÄÖÜ]+$#', $userName)){
        echo "Username must only contain letters and numbers";
    }

    elseif (strlen($userName) < 5 OR strlen($userName) > 20){
        echo "Username must be 5-20 characters";
    }

    elseif (mysqli_num_rows($sql) != 0 && !empty($userName)){
        echo "Username Taken please choose another";
    }
    else{
        echo "";
    }
?>