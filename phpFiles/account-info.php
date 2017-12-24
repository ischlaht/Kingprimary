<?php require('conn.php'); ?>

<?php 
// $data = file_get_contents();
$sql = $conn->query("SELECT * FROM users");

// $data = array();
// $data[] = array("userName"=>$row['userName']);
    while($row = mysqli_fetch_assoc($sql)) {
        // echo "From php file";
        echo $row['userName'];
    }
    JSON_encode($row['userName']);

?>