<?php include "header.php" ; 


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['add'])){ 
    $firstname = $_POST['firstname'];   
    $lastname = $_POST['lastname']; 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $sex = $_POST['sex'];
    $status = $_POST['status'];
    $created_at = date("Y-m-d");

    $sql = "SELECT * FROM users WHERE username='$username' ";    
    $result = $conn->query($sql);
    if (empty($firstname) or empty($lastname) or empty($username)or empty($password)or empty($phonenumber)or empty($sex)) {
        $_SESSION['error'] = 'กรุณากรอกข้อมูลให้ครบ';
        header("location: homeadd.php?id=$id");
    } 
    else if ($result->num_rows > 0 ) {
        echo "username ชื่อซ้ำ";
        $_SESSION['error'] = "username ซ้ำ";
        header("Location: homeadd.php?id=$id");
    }
    else{
        $sql = "INSERT INTO users( id ,firstname, lastname, username, password, phonenumber, sex, status, created_at) 
        VALUES ('','$firstname','$lastname','$username','$password','$phonenumber','$sex','$status','$created_at')";
        $result = $conn->query($sql);
        header("location: home.php?");
    }
}

if(isset($_POST['edit'])){
    $id = $_POST['id'];  
    $firstname = $_POST['firstname'];   
    $lastname = $_POST['lastname']; 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $sex = $_POST['sex'];
    $status = $_POST['status'];
    $created_at = date("Y-m-d");

   
        $sql = "SELECT * FROM users WHERE username='$username' "; 
        $result = $conn->query($sql);        
        $row = $result->fetch_assoc();

        if (empty($firstname) or empty($lastname) or empty($username)or empty($password)or empty($phonenumber)or empty($sex)) {
            $_SESSION['error'] = 'กรุณากรอกข้อมูลให้ครบ';
            header("location: homeedit.php?id=$id");
        } 
        else if ($result->num_rows > 0 and $row['id']!=$id){   
            echo "username ชื่อซ้ำ".$_SESSION['username'];
            $_SESSION['error'] = "username ซ้ำ";
            header("Location: homeedit.php?id=$id");
        }
        else{        
            $result = $conn->query($sql);
            $sql = "UPDATE users SET firstname='$firstname',lastname='$lastname',username='$username',
            password='$password',phonenumber='$phonenumber',sex='$sex',status='$status',created_at='$created_at' WHERE id=$id";
            $result = $conn->query($sql);
            header("location: home.php?");
             
        }
    
}

if(isset($_GET['del'])){
$id = $_GET['del'];
$sql = "DELETE FROM users WHERE id=$id";
$result = $conn->query($sql);
header("location: home.php?");

}



?>




