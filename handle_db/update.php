<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    extract($_POST);
    $id = $_SESSION["user_data"]["id"];

    require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

    $nombre !== "" && $mysqli->query("UPDATE users SET nombre = '$nombre' WHERE id='$id'");
    
    $tlf !== "" && $mysqli->query("UPDATE users SET tlf = '$tlf' WHERE id='$id'");

    $bio !== "" && $mysqli->query("UPDATE users SET bio = '$bio' WHERE id='$id'");

    header("Location: /view/dashboard.php");
}
