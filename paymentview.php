<style>
  .tr {
    text-align: right;
  }
  .tl {
    text-align: left;
  }
  .floa {
    float: left;
  }
  .tc {
    text-align: center;
  }
  .tsiz {
    font-size: 20px;
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
  .ahre {
    /* ลิ้ง */
    color: black; /* สีอักษร */
  }
  .ahre1 {
    /* ลิ้ง */
    color: blue; /* สีอักษร */
  }
  .selec {
    font-size: 25px;
    width: 400px;
    background: #D9D9D9;
    text-align: center;
  }
  .btn1 {
    /* ตั้งค่าปุม */
    width: 200px;
    margin-top: 10px;
    height: 50px;
    border-radius: 25px;
    font-size: 25px;
    cursor: pointer;
    background-color: white;
    color: black;
    display: block;
    margin-left: 500px; 
    font-family: 'Noto Sans Thai', sans-serif;
  }
  @media print {
    .btn1 {
      display: none; /* ซ่อนปุ่มเมื่ออยู่ในโหมดการพิมพ์ */
    }
  }
  .txt4 {
    /* ตั้งค่าปุม */
    width: 200px;
    margin-top: 10px;
    height: 25px;
    font-size: 25px;
    background-color: #D9D9D9;
    color: black;
  }
  .padd {
    padding-top: 10px;
  }
  .padd1 {
    padding: 30px;
    margin-left: 100px;
  }
</style>

<?php
include "config/db.php";
$username = $_SESSION['username'];
$sql = "SELECT * from dorm WHERE  user1='$username' or user2='$username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$id = $row['id'];
$name = $row['name'];
$type = $row['type'];
$room = $row['room'];

$username = $_SESSION['username'];
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$sex = $_SESSION['sex'];
?>

<br><br><br>

<table width="75%" class="tl tsiz padd1" bgcolor="lightgray">
  <tr>
    <td><br>&nbsp;รายละเอียดการจองหอพัก  <?= $room ?></td>
    <td></td>
  </tr>
  <tr>
    <td><br>&nbsp;ชื่อผู้จอง :   <?= $firstname . " " . $lastname ?></td>
    <td>&nbsp;หอพัก : หอพัก<?= $sex ?></td>
  </tr>
  <tr>
    <td><br>&nbsp;หมายเลขห้อง :   <?= $room ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><hr></td>
  </tr>
  <tr>
    <td><br>&nbsp;ค่าบำรุงหอพัก :  &nbsp;&nbsp;7000 </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><br>&nbsp;ค่าบริการเสริม :   &nbsp;&nbsp;500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><br>&nbsp;รวมเงิน : &nbsp;&nbsp;7500</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  <td><br>&nbsp;ส่วนเสริม : &nbsp;&nbsp;
    <?php
    $sql = "SELECT * FROM checkin where user='$username'";
    $result = $conn->query($sql);
    $i=1;
    $options = array();
    while($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $nameopt = $row['name'];
      $options[] = $nameopt;
      $i=$i+1;
    }
    echo "&nbsp;&nbsp; " . implode(", ", $options);
    ?>
  </td>
  <td>&nbsp;</td>
</tr>
</table>

<br><br>

<!-- เพิ่มปุ่มพิมพ์ที่เรียกใช้ window.print เมื่อคลิก -->
<table width="90%" class="tc">
  <tr>
    <td>
      <input type="button" value="พิมพ์" class="btn1" onclick="window.print();">
    </td>
  </tr>
</table>
