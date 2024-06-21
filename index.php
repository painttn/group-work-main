<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        /* การตั้งค่า */
        .tc {
            text-align: center; /* อักษรกลาง */
        }
        .cred {
            color: red; /* อักษรสีแดงคำเตือน */
        }
        .cgreen {
            color: green; /* คำเตือนอักษรสีเขียว */
        }
        .pt1 {
            padding-top: 10px;
            text-align: end;
        }

        /* ตั้งค่า textbox */
        .txt1 {
            width: 100%; /* ความกว้าง */
            margin-top: 10px; /* ห่างจากด้านบน */
            height: 50px; /* ความสูง */
            border-radius: 10px; /* ความกลม */
            font-size: 25px; /* ขนาดอักษร */
            text-align: center; /* อีกษรกึ่งกลาง */
            background: white; /* สีพื้นหลัง */
            border: 2px solid grey; /* สีขอบ (เปลี่ยนเป็นสีแดง) */
            font-family: 'Noto Sans Thai', sans-serif;
            margin-bottom: 10px;
        }

        .btn1 {
    /* ตั้งค่าปุ่ม */
    width: 100%; /* ความกว้าง */
    margin-top: 10px; /* ห่างจากด้านบน */
    height: 50px; /* ความสูง */
    border-radius: 10px; /* ความกลม */
    font-size: 25px; /* ขนาดอักษร */
    cursor: pointer; /* เปลี่ยนเมาส์ */
    color: white; /* Set the text color to white */
    background-color: #50555C; /* สีพื้นหลัง */
    font-family: 'Noto Sans Thai', sans-serif;
}

        a {
            /* ลิ้ง */
            color: black; /* สีอักษร */
        }

        /* Change the font for the entire page */
        body {
            font-family: 'Noto Sans Thai', sans-serif; /* You can specify your desired font family here */
        }

        /* Add a yellow background on the right side */
        body::before {
            content: "";
            background-color: #B7C4CF; /* Change to your desired background color */
            width: 60%; /* Adjust the width as needed */
            height: 100%;
            position: fixed;
            top: 0;
            right: 0;
            z-index: -1;
            border-radius: 80px 0 0 80px;
        }
h1{
    color: #50555C;
}
label{
    color: #50555C;
}
        /* Create spacing to the right of the form */
        form {
            padding-right: 10px; /* Adjust the amount of padding as needed */
        }

        /* Align the table to the left */
        table {
            width: 50%;
            margin-left:700px;
        }

        /* Add the image on the left side */
        .left-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 40%; /* Adjust the width as needed */
            height: 100%;
            z-index: -1;
        }
    </style>
</head>
<body> <img src="img/room.png" alt="Your Image" class="left-image">
    <?php require_once 'config/db.php'; ?>
   
    <br><br><br><br>
    <form action="login.php" method="post">
        <table align="center" border=0 >
            <tr>
                <td>
                    <h1>ระบบจองหอพักนิสิต</h1>
                </td>
            </tr>
            <tr> 
                <td>
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username" value="" class="txt1">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password" value="" class="txt1">
                </td>
            </tr>
            <tr>
                <td class="tr pt1">
                    <a href="signup.php">สมัครสมาชิก</a>
                </td>
            </tr>
            <tr>
                <td class="cred">
                    <?php
                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td class="cgreen">
                    <?php
                    if (isset($_SESSION['save'])) {
                        echo $_SESSION['save'];
                        unset($_SESSION['save']);
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="" value="เข้าสู่ระบบ" class="btn1">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
