<?php include "header.php" ; ?>
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
  font-family: 'Noto Sans Thai', sans-serif;
}
.tb1{
  padding-top: 25px;
  font-family: 'Noto Sans Thai', sans-serif;
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
font-family: 'Noto Sans Thai', sans-serif;
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
font-family: 'Noto Sans Thai', sans-serif;
}
</style>

<table width="90%" >
<tr><td class="tc tsiz tb1">เพิ่มบริการเสริม</td></tr>
</table>

<form action="optioncheck.php" method="post">
<table width="90%">

<tr><td class="tl tsiz tb1">บริการเสริม</td></tr>
<tr><td class=""><input type="text" class="txt1" name="name"></td></tr>
<tr><td class="tl tsiz tb1">รายเอียด</td></tr>
<tr><td class=""><input type="text" class="txt1" name="name"></td></tr>
<tr><td class="tl tsiz tb1">คำอธิบาย</td></tr>
<tr><td class=""><input type="text" class="txt1" name="name"></td></tr>

</table>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<table width="90%" class="tc">
<tr><td class="tc cred tsiz">  
<?php 
if(isset($_SESSION['error'])){
echo $_SESSION['error'];
unset($_SESSION['error']);
}
?>
</td></tr>

<tr><td><input type="submit" value="บันทึก" class="btn1" name="add"></td></tr>
</table>
</form>


<?php include "footer.php" ; ?>