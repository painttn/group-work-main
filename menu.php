<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        .bgmenu {
            background: #50555C;
            text-align: center;
            height: 50px;
            font-size: 25px;
            padding: 20px;
            color: white;
            margin-top: 10px;
            border-radius: 20px;
            font-family: 'Noto Sans Thai', sans-serif;
        }

        .bgmenu a {
            color: white;
            text-decoration: none;
        }

        .menu-item {
            margin-bottom: 10px; 
            margin-left:10px;
            margin-right:10px
        }
    </style>
</head>
<body>
<?php
if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] == 'admin') {
        ?>
        <div class="menu-item">
            <div class="bgmenu"><a href="home.php">ผู้ใช้งาน</a></div>
        </div>
        <div class="menu-item">
            <div class="bgmenu"><a href="dorm.php?nam=หอพักชาย">หอพัก</a></div>
        </div>
        <div class="menu-item">
            <div class="bgmenu"><a href="option.php">บริการเสริม</a></div>
        </div>
        <?php
    }
}
?>

<?php
if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] == 'supervisor') {
        ?>
        <br><br>
        <div class="menu-item">
            <div class="bgmenu"><a href="rent.php?nam=หอพักชาย">หอพัก</a></div>
        </div>
        <?php
    }
}
?>

<?php
if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] == 'user') {
        ?>
        <br><br>
        <div class="menu-item">
            <div class="bgmenu"><a href="checkin.php?nam=หอพักชาย">จองหอพัก</a></div>
        </div>
        <div class="menu-item">
            <div class="bgmenu"><a href="changein.php">ย้ายห้องพัก</a></div>
        </div>
        <div class="menu-item">
            <div class="bgmenu"><a href="checkout.php">ยกเลิกห้องพัก</a></div>
        </div>
        <div class="menu-item">
            <div class="bgmenu"><a href="payment.php">ใบชำระเงิน</a></div>
        </div>
        <?php
    }
}
?>
</body>
</html>
