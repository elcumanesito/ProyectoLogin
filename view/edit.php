<?php
session_start();
if (!isset($_SESSION["user_data"])){
    header("Location: /view/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/edit.css">
    <title>Edit</title>
</head>
<body class="contenedor">
<div class="arribita">
    <img src="/assets/devchallenges.svg" alt="##" class="img">

    <button class="log"><a href="/handle_db/logout.php">Logout</a></button>
    </div>
    <section class="principal">
    <div class="titulo">
         <h1>Personal info</h1>
         <p>Basic info, like your name and photo</p>
         <a href="/view/dashboard.php">< Back</a> 
    </div>
    <form action="/handle_db/update.php" method="POST" class="formu" enctype="multipart/form-data">
        <section class="cardsect">
            <h4>Profile</h4> 
            <p>Some info may be visible to other people</p>
        </section>
        <section class="cardsection">
         <label for="imagen" class="li">Profile Image:</label>
         <input type="file" name="imagen" class="tam1">
        </section>
        <section class="cardsection">
            <label for="" class="li">Name:</label>
            <input type="text" class="tam" name="nombre" value="<?= $_SESSION["user_data"]["nombre"]?>">
        </section>
        <section class="cardsection">
            <label for="" class="li">Phone:</label>
            <input type="number" class="tam" name="tlf" value="<?= $_SESSION["user_data"]["tlf"]?>">
        </section>
        <section class="cardsection">
            <label for="" class="li">Biography:</label>
            <input type="text" class="tam" name="bio" value="<?= $_SESSION["user_data"]["bio"]?>">
        </section>
        <button class="btnsave" type="submit">Save</button>
    </form>
    <section class="complete">
            <p>Created By: ElCumanesito</p>
            <p class="pc" >devchallenge.io</p>
    </section>
    </section>
</body>
</html>
