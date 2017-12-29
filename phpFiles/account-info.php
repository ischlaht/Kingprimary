<?php require('conn.php'); ?>

<?php 
//$Session = $_SESSION['userName'];
//if(isset($Session)){
$sql = $conn->query("SELECT * FROM users");

$data = array();
    while($row = mysqli_fetch_array($sql)) {
        $data = $row;
    }
      echo JSON_encode($data);
//}
?>