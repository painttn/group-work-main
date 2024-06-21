<?php

    require_once 'config/db.php';

    if(isset($_POST['signup'])) {
       $firstname = $_POST['firstname'] ;
       $lastname  = $_POST['lastname'];
       $username = $_POST['username'];
       $password = $_POST['password'];
       $phonenumber = $_POST['phonenumber'];
       $sex = $_POST['sex'];
       $created_at = date("Y-m-d");
       $status = 'user';
       echo $username.$username  ;
    }
        if (empty($firstname)) {
        $_SESSION['error'] = 'กรุณากรอกข้อมูลให้ครบ';
        header("location: signup.php");

    } else if (empty($lastname)) {
        $_SESSION['error'] = 'กรุณากรอกข้อมูลให้ครบ';
        header("location: signup.php");

    }  else if (empty($username)) {
        $_SESSION['error'] = 'กรุณากรอกข้อมูลให้ครบ';
        header("location: signup.php");

    } else if (empty($_POST['password'])) {
        $_SESSION['error'] = 'กรุณากรอกข้อมูลให้ครบ';
        header("location: signup.php");

    } else if (empty($phonenumber)) {
        $_SESSION['error'] = 'กรุณากรอกข้อมูลให้ครบ';
        header("location: signup.php");

    } else if (empty($sex)) {
        $_SESSION['error'] = 'กรุณากรอกข้อมูลให้ครบ';
        header("location: signup.php");
    } else {
        $sql = "SELECT * FROM users WHERE username='$username' "; 
        if ($conn->query($sql) == TRUE) {
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "ชื่อซ้ำ";
                $_SESSION['error'] = "username ซ้ำ";
                header('Location: signup.php');
            }
            else{
                $sql = "INSERT INTO users(firstname, lastname, username, password, phonenumber, sex, status, created_at) 
                VALUES ('$firstname','$lastname','$username','$password','$phonenumber','$sex','$status','$created_at')";
                
                if ($conn->query($sql) == TRUE) {
                  echo "ลงทะเบียนเสร็จสิ้น";
                  
                    
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $_SESSION['save'] = "ลงทะเบียนเสร็จสิ้น";
                header('Location: index.php');
            } 
        }
    }

?>