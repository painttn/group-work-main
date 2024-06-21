<?php include "header.php"; ?>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;700&display=swap" rel="stylesheet">
<style>
  .table-container {
    width: 90%;
    margin: 20px auto;
    border-collapse: collapse;
    border: 1px solid #ccc;
    background-color: #fff;
    border-radius: 15px;
  }

  .table-container th, .table-container td {
    border: 1px solid gray;
    padding: 10px;
    text-align: center;
  font-family: 'Noto Sans Thai', sans-serif;

  }

  .table-container th {
    background-color: #50555C;
    color: white;
    font-weight: bold;
  font-family: 'Noto Sans Thai', sans-serif;

  }

  .table-container td {
    background-color: #D9D9D9;
  font-family: 'Noto Sans Thai', sans-serif;

  }

  .button {
    display: inline-block;
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    text-align: center;
    background-color: #50555C;
    color: white;
    font-weight: bold;
    width: 35px;
  }

  .button:active {
    background-color: #50555C;
    color: white;
  }
  .button2 {
  display: inline-block;
  padding: 10px 20px; /* ปรับขนาดและระยะห่างตามที่ต้องการ */
  border-radius: 5px; /* ปรับเส้นขอบเพื่อสร้างมุมกลม */
  text-decoration: none; /* ลบขีดเส้นใต้ข้อความ */
  text-align: center; /* จัดข้อความตรงกลาง */
  background-color: #50555C; /* สีพื้นหลังของปุ่ม */
  color: white; /* สีข้อความ */
  font-weight: bold; /* ตัวหนา */
  width: 50px;
  font-family: 'Noto Sans Thai', sans-serif;

}

.button:active {
  background-color: #50555C;
  color: white;
}
.bold-text {
  font-weight: bold;
  font-family: 'Noto Sans Thai', sans-serif;
  font-size: 25px;
}
</style>
<br><br>
 <!-- <table width="90%">
 <tr><td class="tl tsiz1">จัดการข้อมูลผู้ใช้งาน &nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
 
 <tr><td class="tr tsiz"><a href="homeadd.php" class='ahre1'>เพิ่ม</a></td></tr>
 </table> -->
 <table class="table-container2" width="90%">
  <tr>
    <td class="tl tsiz1 bold-text">จัดการข้อมูลผู้ใช้งาน &nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td class="tr tsiz">
      <a href="homeadd.php" class="ahre1 button2">เพิ่ม</a>
    </td>
  </tr>
</table>
<br><br>

<table class="table-container">
  <tr>
    <th>ลำดับ</th>
    <th>ชื่อจริง</th>
    <th>นามสกุล</th>
    <th>ชื่อผู้ใช้</th>
    <th>รหัสผ่าน</th>
    <th>เบอร์โทรศัพท์</th>
    <th>สถานะ</th>
    <th>เพศ</th>
    <th colspan="2">การจัดการ</th>
  </tr>
  <?php
  $sql = "SELECT * FROM users";
  $result = $conn->query($sql);
  $i = 1;
  while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $username = $row['username'];
    $password = $row['password'];
    $phonenumber = $row['phonenumber'];
    $sex = $row['sex'];
    $status = $row['status'];
    echo "<tr>
            <td>$i</td>
            <td>$firstname</td>
            <td>$lastname</td>
            <td>$username</td>
            <td>$password</td>
            <td>$phonenumber</td>
            <td>$status</td>
            <td>$sex</td>
            <td><a href='homeedit.php?id=$id' class='button'>แก้ไข</a></td>
            <td><a href='homecheck.php?del=$id' class='button'>ลบ</a></td>
          </tr>";
    $i++;
  }
  ?>
</table>

<?php include "footer.php"; ?>
