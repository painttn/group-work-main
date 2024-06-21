<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
    /* การตั้งค่า */
.tc{
text-align: center;  /* อักษรกลาง */
}
.thed{
    /* หัวข้อส่วนใหญ่ */
text-align: left;   /* อักษรซ้าย */
font-size: 25px;    /* ขนาดอักษร */
font-family: 'Noto Sans Thai', sans-serif;
}
.tr{
text-align: right;   /* อักษรขวา */
font-family: 'Noto Sans Thai', sans-serif;
}
.cred{
    color: red;   /* คำเตือนอักษรสีแดง */
}
.pt1{
    padding-top: 10px; /* ช่องว่าง */
}
/* ตั้งค่าtextbox */
.txt1 {
       width: 100%; /* ความกว้าง */
     margin-top: 10px; /* ห่างจากด้านบน */
     margin-bottom: 10px;
     height: 50px; /* ความสูง */
     border-radius: 10px; /* ความกลม */
     font-size: 25px; /* ขนาดอักษร */
      text-align: center; /* อีกษรกึ่งกลาง */
     background: #D9D9D9; /* สีพื้นหลัง */
     border: 2px solid grey; /* สีขอบ (เปลี่ยนเป็นสีแดง) */
     font-family: 'Noto Sans Thai', sans-serif;
}
h1{
    font-family: 'Noto Sans Thai', sans-serif;
}
.btn1{
/* ตั้งค่าปุ่ม */
width: 100%;        /* ความกว้าง */
margin-top: 10px;   /* ห่างจากด้านบน */
height: 50;         /* ความสูง */
border-radius: 25px; /* ความกลม */
font-size: 25px;     /* ขนาดอักษร */
cursor: pointer;     /* เปลี่ยนเมาส์ */
background-color: darkorange;  /* สีพื้นหลัง */
color: white;        /* สีอักษร */
}

a{ 
    /* ลิ้ง */
  color: black;  /* สีอักษร */
}
.required {
    color: red;
}

</style>
<?php require_once 'config/db.php'; ?>


<form action="signupcheck.php" method="post">
<table width="40%" align="center" border=0 class="tc">


<tr><td><h1>สมัครสมาชิก</h1></td></tr>
<tr>
    <td class="thed">ชื่อจริง <span class="required">*</span></td>
</tr>

<tr><td><input type="text" name="firstname" value="" class="txt1"></td></tr>

<tr><td class="thed">นามสกุล <span class="required">*</span></td>
</tr>
<tr><td><input type="text" name="lastname" value="" class="txt1"></td></tr>

<tr><td class="thed">ชื่อผู้ใช้ <span class="required">*</span></td>
</tr>
<tr><td><input type="text" name="username" value="" class="txt1"></td></tr>

<tr><td class="thed">รหัสผ่าน <span class="required">*</span></td>
</tr>
<tr><td><input type="text" name="password" value="" class="txt1"></td></tr>

<tr><td class="thed">เบอร์โทรศัพท์ <span class="required">*</span></td>
</tr>
<tr><td><input type="text" name="phonenumber" value="" class="txt1"></td></tr>

<tr><td class="thed">เพศ <span class="required">*</span></td>
</tr><td>
<div class="thed"><input type="radio" name="sex" value="ชาย"> ชาย <input type="radio" name="sex" value="หญิง"> หญิง </div>
</td></tr>

<tr><td class="tr pt1"><a href="index.php">ไปยังหน้าเข้าสู่ระบบ</a></td></tr>

<tr><td class="cred">
<?php 
if(isset($_SESSION['error'])){
echo $_SESSION['error'];
unset($_SESSION['error']);
}
?>
</td></tr>

<tr><td><input type="submit" name="signup" value="สมัครสมาชิก" class="btn1"></td></tr>


</table>
</form>