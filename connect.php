<?php
        $firstName = $_POST['firstname'];
        $middleName = $_POST['midtname'];
        $lastName = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $country = $_POST['country'];
        
        $mysqli = new mysqli("localhost","root","","form_DB");

        if($mysqli -> connect_errno){
            echo "Faild to connect mysqli :".$mysqli_connect_error();
            exit();
        }
    ?>