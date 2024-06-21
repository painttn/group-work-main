<?php
require_once 'config/db.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE username='$username' and password='$password' "; 
        if ($conn->query($sql) == TRUE) {
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $_SESSION['id'] = $row['id'];
                $_SESSION['firstname'] = $row['firstname'];
                $_SESSION['lastname'] = $row['lastname'];
                $_SESSION['status'] = $row['status'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['sex'] = $row['sex'];

                if($_SESSION['status']=='admin'){
                    header("location: home.php");
                }elseif($_SESSION['status']=='supervisor'){
                    header("location: rent.php?nam=หอพักชาย");
                }else{
                    header("location: checkin.php?nam=หอพักชาย");
                }
            }
            else{
                echo  "login ไม่สำเร็จ";
                $_SESSION['error'] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
                header("location: index.php");
            }
        }


?>