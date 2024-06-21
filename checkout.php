<?php

use LDAP\Result;

 include "header.php" ; ?>
 <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;700&display=swap" rel="stylesheet">
<style>
.tr {
  text-align: right;
}
.tl {
  text-align: left;
}
.floa {
float:left;
}
.tc {
  text-align: center;
}
.tsiz {
  font-size: 20px;
  font-family: 'Noto Sans Thai', sans-serif;
}
.tsiz2 {
  font-size: 12px;
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
.btn1{
/* ตั้งค่าปุ่ม */
width: 200px;        /* ความกว้าง */
margin-top: 10px;   /* ห่างจากด้านบน */
height: 50px;         /* ความสูง */
border-radius: 25px; /* ความกลม */
font-size: 25px;     /* ขนาดอักษร */
cursor: pointer;     /* เปลี่ยนเมาส์ */
background-color: white;  /* สีพื้นหลัง */
color: black;        /* สีอักษร */
font-family: 'Noto Sans Thai', sans-serif;
}
.txt4{
/* ตั้งค่าปุ่ม */
width: 200px;        /* ความกว้าง */
margin-top: 10px;   /* ห่างจากด้านบน */
height: 25px;         /* ความสูง */
font-size: 25px;     /* ขนาดอักษร */
background-color: #D9D9D9;  /* สีพื้นหลัง */
color: black;        /* สีอักษร */
}
.padd{
padding-top: 10px;

}

</style>
<?php
$username =$_SESSION['username'];
$sql = "SELECT * from dorm WHERE  user1='$username' or user2='$username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
if($row>0){
  $id = $row['id'];
  $name = $row['name'];
  $type = $row['type'];
  $room = $row['room'];

$username = $_SESSION['username'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
?>
<br><br><br>
<table width="75%" class="tl tsiz" bgcolor="lightgray" style="padding: 20px; border-radius: 10px;">
  <tr>
    <td>
      <br>&nbsp;&nbsp;ชื่อผู้ใช้: <?= $username ?>
    </td>
    <td></td>
  </tr>
  <tr>
    <td>
      &nbsp;&nbsp;ชื่อนามสกุล: <?= $firstname . " " . $lastname ?>
    </td>
    <td></td>
  </tr>
  <tr>
    <td>
      &nbsp;&nbsp;หอพัก: <?= $name ?>
    </td>
    <td></td>
  </tr>
  <tr>
    <td>
      &nbsp;&nbsp;หมายเลขห้อง: <?= $room ?>
    </td>
    <td></td>
  </tr>
  <tr>
    <td>
      &nbsp;&nbsp;วันที่จอง: <?= date("Y-m-d") . "&nbsp;" ?>
    </td>
    <td></td>
  </tr>
  <tr>
  <td style="padding: 0px 0 20px 10px;">
  ส่วนเสริม:
  <?php
  $sql = "SELECT * FROM checkin where user='$username'";
  $result = $conn->query($sql);
  $i = 1;
  $options = array();
  while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $nameopt = $row['name'];
    $options[] = $nameopt;
    $i = $i + 1;
  }
  echo implode(", ", $options);
  ?>
</td>

    <td></td>
  </tr>
  
</table>




<br><br><br>
<form action="checkoutcheck.php" method="post">  

<table width="90%" class="tc" >
<tr><td><input type="submit" value="ยกเลิกห้องพัก" class="btn1" name="btn"></td></tr>
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