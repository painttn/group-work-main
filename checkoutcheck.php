<?php include "header.php" ; 
 

if(isset($_POST['btn']))
{
$username = $_SESSION['username'];
/*for ($i=0; $i < count($option); $i++){
    echo $option[$i]."<BR>" ;
}*/
echo $username."aaaa";


$sql = "UPDATE dorm SET user1='ว่าง' WHERE user1='$username'";
    $result = $conn->query($sql);
    $sql = "UPDATE dorm SET user2='ว่าง' WHERE user2='$username'";
    $result = $conn->query($sql);
    header("location: checkout.php?");
}
?>