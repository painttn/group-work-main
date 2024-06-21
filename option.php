<?php include "header.php"; ?>
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
  .tc {
    text-align: center;
  }
  .tsiz {
    font-size: 25px;
    font-family: 'Noto Sans Thai', sans-serif;
  }
  .ta1 {
    background: #D9D9D9;
    padding: 25px;
  }
  .td1 {
    border-bottom: 2px solid black;
  }
  .ahre { 
    color: black;
    text-decoration: none;
  }
  /* .ahre:hover {
    color: blue;
  } */
  .selec {
    font-size: 25px;
    width: 400px;
    background: #D9D9D9;
    text-align: center;
  }

  .table-container {
    width: 90%;
    margin: 20px auto;
    border-collapse: collapse;
    border: 1px solid #ccc;
    border-radius: 15px;
    background-color: #fff;
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
  }

  .table-container td {
    background-color: #D9D9D9;
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
}

  .button:active {
    background-color: #50555C;
    color: white;
  }
</style>

<br><br>
<table width="90%">
  <tr>
    <td class="tl tsiz">บริการเสริม &nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td class="tr tsiz">
      <a href="optionadd.php" class="ahre1 button2">เพิ่ม</a>
    </td>
  </tr>
</table>

<table class="table-container">
  <tr>
    <th>ลำดับ</th>
    <th>บริการเสริม</th>
    <th colspan="2">การจัดการ</th>
  </tr>
  <?php
    $sql = "SELECT * FROM option";
    $result = $conn->query($sql);
    $i = 1;
    while ($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $name = $row['name'];
      echo "<tr>
              <td>$i</td>
              <td>$name</td>
              <td><a href='optionedit.php?id=$id' class='ahre button'>แก้ไข</a></td>
              <td><a href='optioncheck.php?del=$id&name=$name' class='ahre button'>ลบ</a></td>
            </tr>";
      $i++;
    }
  ?>
</table>

<?php include "footer.php"; ?>
