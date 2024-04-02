<!-- เชื่อมต่อกับหน้า server -->
<?php  
    session_start();//เริ่มทำงาน session

    // เมื่อไม่มีการ login เข้ามา
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must login first";//เก็บข้อความไว้เพื่อแสดง
        header('location: login.php');//ตีกลับไปที่หน้า login
    }

    //ถ้ามีการกดปุ่ม logout
    if (isset($_GET['logout'])) {
        session_destroy();//ล้าง session ทิ้ง
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    
    <div class="header">
        <h2>Home Page</h2>
    </div>

    <div class="content">

        <!-- ถ้ามีข้อความ success ที่ $_SESSION เก็บ ให้แสดงค่าออกทางหน้าจอ -->
        <?php if (isset($_SESSION['success'])) : ?>
            <!-- แสดงข้อความที่ $_SESSION เก็บอยู่ -->
            <div class="success">
                <h3>
                    <?php echo 
                        $_SESSION['success']; 
                        unset($_SESSION['success']);//เพื่อไม่ให้ข้อความอยู่ตลอด
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- เช็คว่ามีการ login เข้ามาหรือไม่ ถ้ามีจะให้แสดงข้อมูล username ออกมา-->
        <?php  if (isset($_SESSION['username'])) : ?><!-- isset แปลว่ามี-->
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><!-- แสดงผลชื่อผู้ใช้ออกมา -->
            <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p><!-- logout = '1' ส่งค่า get paramoterไป-->
        <?php endif ?>

    </div>
</body>
</html>