<?php 
    session_start();
    include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <script>
        const bodyEl = document.querySelector("body")
        const div1El = document.createElement('div')
        div1El.classList.add('header')
        bodyEl.insertAdjacentElement("afterbegin", div1El)
        const h2El = document.createElement('h2')
        h2El.innerText = "Login"
        div1El.insertAdjacentElement("afterbegin", h2El)
        div1El.style.width = "30%"
        div1El.style.margin = "50px auto 0px";
        div1El.style.color = "#fff";
        div1El.style.background = "#5f9ea0";
        div1El.style.textAlign = "center";
        div1El.style.border = "1px solid #b0c4de";
        div1El.style.borderBottom = "none";
        div1El.style.borderRadius = "10px 10px 0px 0px"
        div1El.style.padding = "20px"
    </script>

    <form action="logindb.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
                <!-- แสดงข้อความที่ $_SESSION เก็บอยู่ -->
                <div class="error">
                    <h3>
                        <?php echo 
                            $_SESSION['error']; 
                            unset($_SESSION['error']);//เพื่อไม่ให้ข้อความอยู่ตลอด
                        ?>
                    </h3>
                </div>
            <?php endif ?>

        <script>
            const formEl = document.querySelector("form")
            const div2El = document.createElement('div')
            div2El.classList.add('input-group')
            formEl.insertAdjacentElement("afterbegin", div2El)
            const label1 = document.createElement('label')
            label1.innerText = "Username"
            div2El.insertAdjacentElement("afterbegin", label1)
            div2El.style.margin = "10px 0px 10px 0px";
            label1.style.display = "block";
            label1.style.textAlign = "left";
            label1.style.margin = "3px";
        </script>
        <input type="text" name="username">

        <script>
            const div3El = document.createElement('div')
            div3El.classList.add('input-group')
            formEl.insertAdjacentElement("beforeend", div3El)
            const label2 = document.createElement('label')
            label2.innerText = "Password"
            div3El.insertAdjacentElement("beforeend", label2)
            div3El.style.margin = "10px 0px 10px 0px";
            label2.style.display = "block";
            label2.style.textAlign = "left";
            label2.style.margin = "3px";
        </script>
        <input type="password" name="password">
        
        <script>
            const div4El = document.createElement('div')
            div4El.classList.add('input-group')
            formEl.insertAdjacentElement("beforeend", div4El)
            div4El.style.margin = "10px 0px 10px 0px";
        </script>
        <button type="submit" name="login_user" class="btn" >Login</button>

        <script>
        formEl.style.width = "30%"
        formEl.style.margin = "0 auto"
        formEl.style.padding = "20px"
        formEl.style.border = "1px solid #b0c4de"
        formEl.style.background = "#fff"
        formEl.style.borderRadius = "0px 0px 10px 10px"
        </script>
    </form>

</body>
</html>