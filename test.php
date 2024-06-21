
<?php include "header.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        /* Your existing styles here */

        .ahre {
            /* ลิ้ง */
            color: black; /* Default text color */
        }

        .ahre1 {
    /* ลิ้ง */
    color: witch; /* Text color for the logged-in user (changed to red) */
    background-color: red; /* Background color for the logged-in user (added) */
}
.tr {
  text-align: right;
}
.tl {
  text-align: left;
}
.floa {
float:left;

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

.selec{
  font-size: 25px;
  width: 400px;  
  background: #D9D9D9;
  text-align: center;  
}
.btn1{
/* ตั้งค่าปุ่ม */
width: 200px;        /* ความกว้าง */
margin-top: 10px;   /* ห่างจากด้านบน */
height: 50px;         /* ความสูง */
border-radius: 25px; /* ความกลม */
font-size: 25px;     /* ขนาดอักษร */
cursor: pointer;     /* เปลี่ยนเมาส์ */
background-color: white;  /* สีพื้นหลัง */
color: black;        /* สีอักษร */
}
.txt4{
/* ตั้งค่าปุ่ม */
width: 200px;
    margin-top: 10px;
    height: 30px;
    font-size: 25px;
    background-color: #D9D9D9;
    color: black;
    border-radius: 20px;
    padding: 5px;
    text-align: center;
    font-family: 'Noto Sans Thai', sans-serif;

}
.padd{
padding-top: 10px;

}
.td-table {
    background-color: #B8D790;
   width:150px;
    border-radius: 10px; /* เพิ่มมุมโค้งเพื่อสร้างมิตรสภาพ */
    height: 50px;
    font-family: 'Noto Sans Thai', sans-serif;
    font-size:20px
}
.room-table{
  font-family: 'Noto Sans Thai', sans-serif;
    font-size:20px
}

        /* Your existing styles here */
        .td-table {
          
            width: 150px;
            border-radius: 10px; /* เพิ่มมุมโค้งเพื่อสร้างมิตรสภาพ */
            height: 50px;
            font-family: 'Noto Sans Thai', sans-serif;
            font-size: 20px;
        }

        .room-table {
            font-family: 'Noto Sans Thai', sans-serif;
            font-size: 20px;
        }
    </style>

    <br><br>
    <table width="90%">
        <tr>
            <td class="tl tsiz">หอพัก &nbsp;&nbsp;&nbsp;&nbsp;
                <?php
                $sex = $_SESSION['sex'];
                echo "<input type='text' class='txt4' value='$sex' readonly>";
                ?>
            </td>
        </tr>
    </table>

    <script>
        function myFunction() {
            var x = document.getElementById("mySelect").value;
            location.href = "checkin.php?nam=" + x;
        }
    </script>
    <br><br>
    <form action="checkin2.php" method="post">

        <table class='tc ' width="75%" align='center' bgcolor="lightgray">
            <tr>
                <td>
                    <table class='tc ' align='center' border='0'>
                        <tr>
                            <td>
                                <?php
                                $nam = "หอพัก" . $sex;
                                $sql = "SELECT * FROM dorm where name='$nam'";
                                $result = $conn->query($sql);
                                $i = 1;
                                $r = 1;
                                $username = $_SESSION['username']; // Get the logged-in user's username
                                while ($row = $result->fetch_assoc()) {
                                    $id = $row['id'];
                                    $name = $row['name'];
                                    $type = $row['type'];
                                    $room = $row['room'];
                                    $user1 = $row['user1'];
                                    $user2 = $row['user2'];

                                    // Check if the logged-in user's name matches user1 or user2
                                    $isCurrentUser = ($user1 == $username || $user2 == $username);

                                    // Define a CSS class based on the condition
                                    $textColorClass = $isCurrentUser ? 'ahre1' : 'ahre';

                                    echo "<table class='tc floa' align='center'>
                                    <tr><td class='room-table'>$type</td><td> &nbsp;</td></tr>
                                    <tr><td class='td-table $textColorClass'>$user1</td><td> &nbsp;</td></tr>
                                    <tr><td class 'td-table $textColorClass'>$user2</td><td> &nbsp;</td></tr>
                                    <tr><td class='room-table' width=150 height=50 colspan='2'><input type='radio' name='id' value='$id'>$room</td></tr>
                                    </table>";

                                    if ($r == 4) {
                                        echo "<br>";
                                        $r = 0;
                                    }
                                    $r = $r + 1;
                                }
                                ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>

        <br><br><br><br>
        <?php
        $username = $_SESSION['username'];
        $sql = "SELECT * from dorm WHERE user1='$username' or user2='$username'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if ($row == 0) {
            ?>
            <table width="90%" class="tc">
                <tr>
                    <td><input type="submit" value="จองห้อง" class="btn1" name="add"></td>
                </tr>
            </table>
        </form>
    <?php
    } ?>
    <?php include "footer.php"; ?>
</html>
