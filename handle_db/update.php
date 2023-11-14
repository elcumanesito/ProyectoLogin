<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    extract($_POST);
    $id = $_SESSION["user_data"]["id"];

    require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");

    if ($nombre !== "") {
        $mysqli->query("UPDATE users SET nombre = '$nombre' WHERE id='$id'");
        $_SESSION["user_data"]["nombre"] = $nombre; 
    }
    
    if ($tlf !== "") {
        $mysqli->query("UPDATE users SET tlf = '$tlf' WHERE id='$id'");
        $_SESSION["user_data"]["tlf"] = $tlf; 
    }

    if ($bio !== "") {
        $mysqli->query("UPDATE users SET bio = '$bio' WHERE id='$id'");
        $_SESSION["user_data"]["bio"] = $bio; 
    }

    if (!empty($_FILES['imagen']['name'])) {
        $nombreArchivo = $_FILES['imagen']['name'];
        $rutaTemporal = $_FILES['imagen']['tmp_name'];
    
        $nombreUnico = time() . '_' . $nombreArchivo;
    
        $rutaDestino = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $nombreUnico;
    
        move_uploaded_file($rutaTemporal, $rutaDestino);
    
        // Modifica la columna 'imagen' en la base de datos
        $mysqli->query("UPDATE users SET imagen = '/uploads/$nombreUnico' WHERE id='$id'");
        $_SESSION["user_data"]["imagen"] = "/uploads/$nombreUnico";  // Actualiza la sesión con la nueva imagen
    }

    header("Location: /view/dashboard.php");
}

?>
