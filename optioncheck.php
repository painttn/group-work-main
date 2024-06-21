<?php include "header.php" ; 



if(isset($_POST['add'])){
    $name = $_POST['name'];

    $sql = "SELECT * FROM option WHERE name='$name' ";    
    $result = $conn->query($sql);    
    if (empty($name)) {
        $_SESSION['error'] = 'กรุณากรอกข้อมูลให้ครบ';
        header("location: optionadd.php");
    } 
    else if($result->num_rows > 0 ) {
        echo "บริการเสริม ซ้ำ";
        $_SESSION['error'] = "บริการเสริม ซ้ำ";
        header("Location: optionadd.php?id=$id");
    }
    else {
        $sql = "INSERT INTO option( name) VALUES ('$name')";
        $result = $conn->query($sql);
        header("location: option.php");
    }
}

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];

        $sql = "SELECT * FROM option WHERE name='$name' "; 
        $result = $conn->query($sql);        
        $row = $result->fetch_assoc();

        if (empty($name)) {
            $_SESSION['error'] = 'กรุณากรอกข้อมูลให้ครบ';
            header("location: optionadd.php");
        }        
        else if ($result->num_rows > 0 and $row['id']!=$id){   
            echo "username ชื่อซ้ำ".$_SESSION['username'];
            $_SESSION['error'] = "บริการเสริม ซ้ำ";
            header("Location: optionedit.php?id=$id");
        }
        else{       
            $sql = "UPDATE option SET name='$name' WHERE id=$id";
            $result = $conn->query($sql);
            header("location: option.php");
        }
}

if(isset($_GET['del'])){
$id = $_GET['del'];
$name = $_GET['name'];
echo $name;
$sql = "DELETE FROM option WHERE id=$id";
$result = $conn->query($sql);
$sql = "DELETE FROM checkin WHERE name='$name'";
$result = $conn->query($sql);
header("location: option.php");

}



?>




