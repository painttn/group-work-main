<?php include "header.php"; ?>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;700&display=swap" rel="stylesheet">
<style>
  /* สไตล์ checkbox ใหญ่ขึ้น */
  input[type="checkbox"] {
    transform: scale(1.5); /* ปรับขนาดใหญ่ขึ้น 1.5 เท่า (ค่าขนาดสามารถปรับเปลี่ยนได้) */
  }
  .tc {
    text-align: center;
    font-family: 'Noto Sans Thai', sans-serif;
  }
  h1 {
    font-size: 24px; /* ปรับขนาดตัวอักษรของหัวข้อเป็น 24px */
  }
  .head {
    font-size: 25px;
    text-align: start;
    padding: 0 0 30px 450px;
    font-family: 'Noto Sans Thai', sans-serif;

    }
    h1{
      margin-left: -100px;
      font-size:30px;
    }
    .btn1{
/* ตั้งค่าปุ่ม */
width: 180px;        /* ความกว้าง */
margin-top: 10px;   /* ห่างจากด้านบน */
height: 50px;         /* ความสูง */
border-radius: 25px; /* ความกลม */
font-size: 20px;     /* ขนาดอักษร */
cursor: pointer;     /* เปลี่ยนเมาส์ */
background-color: white;  /* สีพื้นหลัง */
color: black;        /* สีอักษร */
font-family: 'Noto Sans Thai', sans-serif;  
}
</style>

<?php
$roomid = $_POST['id'];
?>

<form action="checkincheck.php" method="post">
  <table class="tc" width="90%">
    <tr>
      <td class="head">
        <!-- เพิ่มเนื้อหาที่คุณต้องการ -->
        <h1>เลือกอำนวยความสะดวก</h1>
        <input type="hidden" value="<?= $roomid ?>" name="roomid">
        <?php
        $sql = "SELECT * FROM `option`";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
          $id = $row['id'];
          $name = $row['name'];
          echo "<input type='checkbox' name='option[]' value='$name' style='vertical-align: middle;'> $name<br>";

        }
        ?>
      </td>
    </tr>
    <tr>
      <td><input type="submit" value="ยืนยันการจอง" class="btn1" name="add"></td>
    </tr>
  </table>
</form>

<?php include "footer.php"; ?>
