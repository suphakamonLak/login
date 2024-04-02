<?php 
    session_start();
    include('server.php');
 
    $errors = array();

    //ถ้ามีการกดปุ่ม Login
    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        //ถ้าผู้ใช้ไม่มีการกรอกข้อมูล
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($conn, $query);

        //ถ้ามีข้อมูลอยู่ในฐานข้อมูล
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Your are now logged in";
            header('location: index.php');
        }else{//เมื่อมีข้อผิดพลาด
            array_push($errors, "Wrong username or password combination");
            $_SESSION['error'] = "Wrong username or password try again";
            header('location: login.php');
        }
    }
?>