<?php require('conn.php') ?>
<?php
session_start();

$userName = $_POST['userName'];
$password =$_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$eMail = $_POST['eMail'];
$phoneNumber = $_POST['phoneNumber'];
$password2 = $_POST['password2'];

$userName = strtoupper($userName);
$firstName = strtoupper($firstName);
$lastName = strtoupper($lastName);
$eMail = strtoupper($eMail);


// Push this error if there is an error
$error = array();

// check if userName exists
$sqlUsername = $conn->query("SELECT * FROM users WHERE userName = '$userName'");
//Check if email exists
$sqlEmail = $conn->query("SELECT * FROM users WHERE userName = '$userName'");

// if(isset($_POST['userName'])) {

        if(empty($userName) OR empty($eMail) OR empty($firstName) OR empty($lastName) OR empty($eMail)OR empty($password)) {
                array_push($error, '- All fields are required- ,');
                echo '- All fields are required- ,';
                header('location: index.php');
        }

        if (!$password === $password2) {
                array_push($error, ' - Passwords do not match ,');
                echo '- Passwords do not match- ,';
        }
        if (filter_var($eMail, FILTER_VALIDATE_EMAIL) === false && !empty($eMail)) {
                array_push($error, '- Email is invalid- ,');
                echo '- Email is invalid- ,';
        }
        if (!preg_match('#^[a-zA-Z0-9äöüÄÖÜ]+$#', $userName) && !empty($userName)) {
                array_push($error, '- Username must only contain letters and numbers ,');
                echo '- Username can only contain letters and numbers- ,';
        }
        if (!preg_match('#^[a-zA-Z0-9]+$#', $password) && !empty($password)) {
                array_push($error, '- Password must only contain letters and numbers ,');
                echo '- Password can only contain letters and numbers- ,';
        }
        if (strlen($phoneNumber) != 10 && strlen($phoneNumber) != 0) {
                array_push($error, '- Phone-number must be 10 digits- ,');
                echo '- Phone-number must be 10 digits- ,';
        } 
        if (strlen($userName) < 5 OR strlen($userName) > 20) {
                if(!empty($userName)) {
                        array_push($error, '- Username is to short or to long ,');
                        echo '- Username must be 5-20 characters- ,';
                }
        }
        if (mysqli_num_rows($sqlUsername) != 0 && mysqli_num_rows($sqlEmail) != 0) {
                array_push($error, '- Username or email is Taken- ,');
                echo '-Username or email is Taken- ,';
        }
        elseif (count($error) === 0){
                $conn->query("INSERT INTO users(userName, password, firstName, lastName, eMail, phoneNumber)
                                VALUES('$userName', '$password', '$firstName', '$lastName', '$eMail', '$phoneNumber')");
                                        $_SESSION['userName'] = $userName;
                                        echo "Welcome $userName. You're now logged in with opportunities to explore! Please take a moment to look around and setting will be available soon!";
                $conn->close();
                
        }
// }

?>