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

</style>



<table width="90%">
<tr><td class="tl tsiz">หอพัก</td></tr>
<tr><td class="tr tsiz"><a href="dormadd.php" class='ahre1'>เพิ่ม</a></td></tr>
</table>

<table width="90%" class="tc ta1 tsiz">
<tr><td class="td1">ลำดับ</td><td class="td1">ประเภท</td><td class="td1">ห้องพัก</td><td class="td1" width=100>แก้ไข</td><td class="td1" width=100>ลบ</td></tr>
<?php
$sql = "SELECT * FROM dorm";
$result = $conn->query($sql);

  $i=1;
  while($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $name = $row['name'];
    $type = $row['type'];
    $room = $row['room'];
    echo "<tr><td>$i</td><td>$name </td><td> $type</td>
    <td><a href='dormedit.php?id=$id' class='ahre'>แก้ไข</a></td>
    <td><a href='dormedit.php?del=$id' class='ahre'>ลบ</a></td>
    </tr>";
    $i=$i+1;
  }



?>


</table>




<?php include "footer.php" ; ?>