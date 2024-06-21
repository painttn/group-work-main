<?php include "header.php" ; ?>
 
<style>
.tr {
  text-align: right;
}
.tl {
  text-align: left;
}
.tc {
  text-align: center;
}
.tsiz {
  font-size: 25px;
}
.ta1 {
  background: #D9D9D9;
  padding: 25px;
}
.td1 {
  border-bottom: 2px solid black;
}
.ahre{ 
    /* ลิ้ง */
  color: black;  /* สีอักษร */
}
.ahre1{ 
    /* ลิ้ง */
  color: blue;  /* สีอักษร */
}
.selec{
  font-size: 25px;
  width: 400px;  
  background: #D9D9D9;
  text-align: center;
}

</style>

<?php
$rent= $_GET['rent'];
$sql = "SELECT * from dorm WHERE  id = $rent";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($row>0){
  $id = $row['id'];
  $name = $row['name'];
  $type = $row['type'];
  $room = $row['room'];
  $user1 = $row['user1'];
  $user2 = $row['user2'];
/*$sql = "SELECT * from user WHERE  user1= $rent";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$user1=$row['$user1'];*/
?>
<br><br><br>
<table width="75%" class="tl tsiz padd1" bgcolor="lightgray" >
<tr><td><br>&nbsp;รายละเอียดหอพัก  </td><td></td></tr>
<tr><td><br>&nbsp;ชื่อผู้ใช้งาน :   <?=$user1." ".$user2?></td><td>&nbsp;</td></tr>
<tr><td><br>&nbsp;หอพัก  :   <?=$name?></td><td>&nbsp;</td></tr>
<tr><td><br>&nbsp;หมายเลขห้อง  :   <?=$room?></td><td>&nbsp;</td></tr>
<tr><td><br>&nbsp;วันที่จอง  :   <?=date("Y-m-d")?></td><td>&nbsp;</td></tr>

<table width="75%" class="tl tsiz padd1" bgcolor="lightgray" >
<tr><td><br>&nbsp;<br>&nbsp;&nbsp;&nbsp;เพิ่มบริการ  </td><td></td></tr>

<?php
$sql = "SELECT * FROM option where username='$user1' ";
$result = $conn->query($sql);
  $i=1;

  while($row = $result->fetch_assoc()) {
  
    $name = $row['name'];
    
    /*echo "<tr><td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    $name  </td><td></td></tr>";*/
}

?>




</table>


</table>


<br><br>
<form action="checkoutcheck.php" method="post">  

<table width="90%" class="tc" >
<tr><td><input type="submit" value="ยกเลิกการจอง" class="btn1" name="btn"></td></tr>
</table>
<?php

}
else {
  echo "<br><table class='tc tsiz' width='75%' align='center' bgcolor='lightgray'>
  <tr><td><h3>ไม่ข้อมูลการจอง</h3></tr></td></table> ";
}
?>

</form>


<?php include "footer.php" ; ?>