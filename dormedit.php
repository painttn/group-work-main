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
  text-align: left;     /* อีกษรกึ่งกลาง */
  background: white; /* สีพื้นหลัง */
  color: black;           /* สีอักษร */
  border-radius: 10px;
  border: 0;
}
.tb1{
  padding-top: 25px;
}
.txt1{
width: 400px;            /* ความกว้าง */
margin-top: 5px;       /* ห่างจากด้านบน */
height: 35px;           /* ความสูง */
font-size: 25px;        /* ขนาดอักษร */
text-align: left;     /* อีกษรกึ่งกลาง */
background: white; /* สีพื้นหลัง */
color: black;           /* สีอักษร */
border-radius: 10px;
border: 0;
}

.btn1{
/* ตั้งค่าปุ่ม */
width: 200px;        /* ความกว้าง */
margin-top: 10px;   /* ห่างจากด้านบน */
height: 50px;         /* ความสูง */
border-radius: 15px; /* ความกลม */
font-size: 25px;     /* ขนาดอักษร */
cursor: pointer;     /* เปลี่ยนเมาส์ */
background-color: #50555C;  /* สีพื้นหลัง */
color: white;        /* สีอักษร */
font-weight: bold;
border: 0;
}
select { width: 5.5em }


</style>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM dorm where id='$id'";
$result = $conn->query($sql);
  $row = $result->fetch_assoc();
    $id = $row['id'];
    $name = $row['name'];
    $type = $row['type'];
    $room = $row['room'];
?>

<table width="90%" >
<tr><td class="tc tsiz tb1">แก้ไขหอพัก</td></tr>
</table>

<form action="dormcheck.php" method="post">
<table width="90%">
<input type="hidden" name="id" value="<?=$id?>">
<tr><td class="tl tsiz tb1">หอพัก*</td></tr>
<tr><td >
<select class="selec" name="name">
<?php
$name1 = ["หอพักชาย","หอพักหญิง"];
for($i=0;$i<2;$i++){
  $nam=$name1[$i];  
if($name1[$i]==$name){
  echo "<option value='$nam' selected>$nam</option>";
}else{
  echo "<option value='$nam'>$nam</option>";
}
}
?>
</select>
</td></tr>

<tr><td class="tl tsiz tb1">ประเภท*</td></tr>
<tr><td class="">
<select class="selec" name="type">
<?php
$type1 = ["ห้องธรรมดา","ห้องปรับอากาศ"];
for($i=0;$i<2;$i++){
  $typ=$type1[$i];  
if($type1[$i]==$type){
  echo "<option value='$typ' selected>$typ</option>";
}else{
  echo "<option value='$typ'>$typ</option>";
}
}
?>
</select>
</td></tr>

<tr><td class="tl tsiz tb1">ห้องพัก*</td></tr>
<tr><td class=""><input type="text" class="txt1" value="<?=$room?>" name="room"></td></tr>
</table>

<br><br><br><br><br><br><br><br><br>
<table width="90%" class="tc">
<tr><td class="tc cred tsiz">  
<?php 
if(isset($_SESSION['error'])){
echo $_SESSION['error'];
unset($_SESSION['error']);
}
?>
</td></tr>

<tr><td><input type="submit" value="แก้ไข" class="btn1" name="edit"></td></tr>
</table>
</form>

<?php include "footer.php" ; ?>