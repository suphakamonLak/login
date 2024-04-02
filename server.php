<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Login";//ชื่อฐานข้อมูลใน SQL

    //create connection สร้างการเชื่อมต่อ
    $conn = mysqli_connect($servername, $username, $password, $dbname);//สร้างเพื่อเชื่อมต่อกับฐานข้อมูล

    //check connection
    if (!$conn) {//เมื่อไม่มีการเชื่อมต่อ
        die("Connection failed" . mysqli_connect_error());
    }else{//เมื่อเชื่อมต่อได้
    }
?>