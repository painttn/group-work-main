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
.tb1{
  padding-top: 15px;
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
.cred{
    color: red;   /* คำเตือนอักษรสีแดง */
}
</style>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM users where id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
    $id = $row['id'];    
    $firstname = $row['firstname'];   
    $lastname = $row['lastname']; 
    $username = $row['username'];
    $password = $row['password'];
    $phonenumber = $row['phonenumber'];
    $sex = $row['sex'];
    $status = $row['status'];
    $created_at = date("Y-m-d");

?>

<table width="90%" >
<tr><td class="tc tsiz tb1">แก้ไขผู้ใช้งาน</td></tr>
</table>

<form action="homecheck.php" method="post">
<table width="90%">
<input type="hidden" class="txt1" name="id" value="<?=$id?>">
<tr><td class="tl tsiz tb1">ชื่อ*</td>
<tr><td class=""><input type="text" class="txt1" name="firstname" value="<?=$firstname?>"></td></tr>

<tr><td class="tl tsiz tb1">นามสกุล*</td></tr>
<tr><td class=""><input type="text" class="txt1" name="lastname" value="<?=$lastname?>"></td></tr>

<tr><td class="tl tsiz tb1">ชื่อผู้ใช้*</td></tr>
<tr><td class=""><input type="text" class="txt1" name="username " maxlength="8" value="<?=$username?>"></td></tr>

<tr><td class="tl tsiz tb1">รหัสผ่าน*</td></tr>
<tr><td class=""><input type="password" class="txt1" name="password" value="<?=$password?>"></td></tr>

<tr><td class="tl tsiz tb1">เบอร์โทรศัพท์*</td></tr>
<tr><td class=""><input type="text" class="txt1" name="phonenumber" value="<?=$phonenumber?>"></td></tr>

<tr><td class="tl tsiz tb1">เพศ*</td></tr>
<tr><td class="">
<select name="sex" class="txt1">
    <?php
    $sex1=["ชาย","หญิง"];   
    for($i=0;$i<2;$i++){
        $se=$sex1[$i];
        if($se==$sex){            
            echo "<option value='$se' selected>$se</option>";
        }
        else{
            echo "<option value='$se' >$se</option>";
        }
    }
    ?>
    </select>
</td></tr>

<tr><td class="tl tsiz tb1">สถานะ*</td></tr>
<tr><td class="">
<select name="status" class="txt1">
    <?php
    $stat=["admin","supervisor","user"];   
    for($i=0;$i<3;$i++){
        $sta=$stat[$i];
        if($sta==$status){            
            echo "<option value='$sta' selected>$sta</option>";
        }
        else{
            echo "<option value='$sta' >$sta</option>";
        }
    }
    ?>
    </select>
</td></tr> 


</table>

<br><br>
<table width="90%" class="tc tsiz">
<tr><td class="tc cred tsiz">  
<?php 
if(isset($_SESSION['error'])){
echo $_SESSION['error'];
unset($_SESSION['error']);
}
?>
</td></tr>

<tr><td><input type="submit" value="บันทึก" class="btn1" name="edit"></td></tr>
</table>
</form>


<?php include "footer.php" ; ?>