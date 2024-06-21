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


<br><br>
<table width="90%">
<tr><td class="tl tsiz">หอพัก &nbsp;&nbsp;&nbsp;&nbsp;
  <select class="selec" id="mySelect" onchange="myFunction()">
  <?php

$nam=$_GET['nam'];
if($nam=='หอพักชาย'){
echo "<option value='หอพักชาย' selected>  หอพักชาย  </option>";
}else{
echo "<option value='หอพักชาย'>  หอพักชาย  </option>";
}
if($nam=='หอพักหญิง'){
  echo "<option value='หอพักหญิง' selected>  หอพักหญิง  </option>";
}else{
  echo "<option value='หอพักหญิง' >  หอพักหญิง  </option>";
}

?>
  </select>
</td></tr>

</table>

<script>
function myFunction() {
  var x = document.getElementById("mySelect").value;
  location.href = "rent.php?nam="+x;
}
</script>



<table width="90%" class="tc ta1 tsiz">
<tr><td class="td1">ลำดับ</td><td class="td1">ประเภท</td><td class="td1">สถานะ</td><td class="td1">ห้องพัก</td><td class="td1" width=100>แสดง</td></tr>
<?php
$sql = "SELECT * FROM dorm where name='$nam' ORDER BY type DESC";
$result = $conn->query($sql);
  $i=1;
  $nam=$_GET['nam'];
  while($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $name = $row['name'];
    $type = $row['type'];
    $room = $row['room'];
    $user1 = $row['user1'];
    $user2 = $row['user2'];
    
    echo "<tr><td>$i</td><td>$type </td> <td>$user1 , $user2</td><td> $room</td>
    <td><a href='rentview.php?rent=$id' class='ahre'>แสดง</a></td>
    </tr>";
    $i=$i+1;
  }



?>


</table>




<?php include "footer.php" ; ?>