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
    <link rel="stylesheet" href="/styles/dashboard.css">
    <title>Dashboard</title>
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
        

    </div>   
    <ul class="card">
        <li class="profile">
            <section>
                <h4>Profile</h4> 
                <p>Some info may be visible to other people</p>
            </section>
            <a href="/view/edit.php" class="linkbtn">
                <button type="button" class="edit">Edit</button>
            </a> 
        </li>
        <li class="lis">
            <h3>Photo:</h3>
            <img src="/assets/foto.jpg" class="photo" alt="Profile Photo">
        </li>
        <li class="lis">
            <h3>Name:</h3>
                <?php          
                $nombre = $_SESSION["user_data"]["nombre"];
                echo "<h3>   $nombre</h3>";
                ?>
        </li>
        
        <li class="lis">
            <h3>Phone:</h3>
                <?php             
                    $tlf = $_SESSION["user_data"]["tlf"];
                    echo "<h3>   $tlf</h3>";
                    ?>
        </li>
        <li class="lis">
            <h3>Bio:</h3>
                <?php              
                     $bio = $_SESSION["user_data"]["bio"];
                     echo "<h3>   $bio</h3>";
                  ?>
        </li>
        <li class="lis">
            <h3>Email:</h3>
            <?php
                    $correo = $_SESSION["user_data"]["correo"];
                    echo "<h3>   $correo</h3>";
            ?>
        </li>
        <li class="lis">
            <h3>Password: ******* </h3>
        </li>
    </ul>
    <section class="complete">
            <p>Created By: ElCumanesitoDev</p>
            <p class="pc">devchallenge.io</p>
    </section>
    </section>
</body>
</html>
