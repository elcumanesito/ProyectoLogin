<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/index.css">
    <title>Register</title>
</head>
<body class="contenedor">
    <section class="principal">
        <img src="./assets/devchallenges.svg" alt="##" class="img">
        <br>
        <h5 class="card-title">Join thousands of learners from around the world</h5>
        <br>
        <p class="card-text">Master web development by making real-life projects. There are multiple paths for you tochoose</p>
        <br>
        <form action="/handle_db/create.php" method="POST" class="form">
            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" placeholder="example@email.com" name="correo">
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="contrasena">
            </div>
            <div class="btnlogin">
                <button type="submit" class="btn-primary">Start coding now</button>
            </div>
            <div class ="registerTexto">
                <p>or continue with these social profile</p>
            </div>
            <div class="icon2">
                <img class="icon" src="/assets/Google.svg">
                <img class="icon" src="/assets/Facebook.svg">
                <img class="icon" src="/assets/Twitter.svg">
                <img class="icon" src="/assets/Gihub.svg">
            </div>
            <div class="dev">
                <?php
                if (isset($_SESSION["duplicado"])){
                    echo $_SESSION["duplicado"] = "<script>alert('El correo ya está registrado.')</script>";
                    unset($_SESSION["duplicado"]);
                }
                ?>
                <p class="parf">Have you an account?   <a href="/view/login.php">Login</a></p>
            </div>
        </form>
    </section>
    <section class="complete">
            <p>Created By: ElCumanesitoDev</p>
            <p>devchallenge.io</p>
    </section>
</body>
</html>


