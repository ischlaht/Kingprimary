<?php

$password = $_POST['password'];

$error = array();

        if(empty($password)){
            array_push($error, 'Password is Required');
            echo "Password is required";
        }

        elseif (!preg_match('#^[a-zA-Z0-9]+$#', $password)){
            array_push($error, 'Password must only contain letters and numbers');
            echo "Password must only container letters and numbers";
        }

        elseif (strlen($password) < 6 OR strlen($password) > 20){
            array_push($error, 'Password is to short or to long');
            echo "Password must be 6-20 characters";

        }

        elseif (count($error) === 0){
            echo '';
                                
        }









        ?>