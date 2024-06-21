<?php include "header.php" ; 
 

if(isset($_POST['add']))
{
$roomid = $_POST['roomid'];
$option = $_POST['option'];
$username = $_SESSION['username'];
echo $roomid ;
$sql = "DELETE FROM checkin WHERE user='$username'";
    $result = $conn->query($sql);

for ($i=0; $i < count($option); $i++){
   $optn=$option[$i];
    $sql = "INSERT INTO checkin (name, user )VALUES ('$optn', '$username')";
    $result = $conn->query($sql);
}


$sql = "SELECT * from dorm WHERE id='$roomid'and user1='ว่าง'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$sql = "UPDATE dorm SET user1='ว่าง' WHERE user1='$username'";
    $result = $conn->query($sql);
    $sql = "UPDATE dorm SET user2='ว่าง' WHERE user2='$username'";
    $result = $conn->query($sql);

    $sql = "UPDATE dorm SET user1='$username' WHERE id='$roomid'and user1='ว่าง' and user2!='$username'";
    $result = $conn->query($sql);

    $sql = "UPDATE dorm SET user2='$username' WHERE id='$roomid'and user1!='$username' and user2='ว่าง'";
    $result = $conn->query($sql);
    header("location: checkin.php?");



}


?>
