<?php include "header.php" ; 


if(isset($_POST['add'])){
    $name = $_POST['name'];
    $type = $_POST['type'];
    $room = $_POST['room'];
    $user1 = 'ว่าง';
    $user2 = 'ว่าง';
    $sql = "SELECT * FROM dorm WHERE room='$room' ";    
    $result = $conn->query($sql);    
    if (empty($name) or empty($type) or empty($room)) {
        $_SESSION['error'] = 'กรุณากรอกข้อมูลให้ครบ';
        header("location: dormadd.php");
    } 
    else if($result->num_rows > 0 ) {
        echo "ห้องพัก ซ้ำ";
        $_SESSION['error'] = "ห้องพัก ซ้ำ";
        header("Location: dormadd.php");
    }
    else {
    $sql = "INSERT INTO dorm( name, type, room, user1, user2) VALUES ('$name','$type','$room','$user1','$user2')";
    $result = $conn->query($sql);
    header("location: dorm.php?nam=$name");
    }
}

if(isset($_POST['edit'])){
$id = $_POST['id'];
$name = $_POST['name'];
$type = $_POST['type'];
$room = $_POST['room'];

        $sql = "SELECT * FROM dorm  WHERE room='$room' "; 
        $result = $conn->query($sql);        
        $row = $result->fetch_assoc(); 
    if (empty($name) or empty($type) or empty($room)) {
        $_SESSION['error'] = 'กรุณากรอกข้อมูลให้ครบ';
        header("location: dormedit.php?id=$id");
    } 
    else if($result->num_rows > 0 and $row['id']!=$id) {
        echo "ห้องพัก ซ้ำ";
        $_SESSION['error'] = "ห้องพัก ซ้ำ";
        header("Location: dormedit.php?id=$id");
    }
    else {
        $sql = "UPDATE dorm SET name='$name',type='$type',room='$room' WHERE id=$id";
        $result = $conn->query($sql);
        header("location: dorm.php?nam=$name");
    }

}

if(isset($_GET['del'])){
$id = $_GET['del'];
$nam = $_GET['nam'];
$sql = "DELETE FROM dorm WHERE id=$id";
$result = $conn->query($sql);
header("location: dorm.php?nam=$nam");

}



?>




