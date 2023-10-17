<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"];
        $hash = password_hash($contrasena, PASSWORD_DEFAULT);

       require_once($_SERVER["DOCUMENT_ROOT"] . "/config/database.php");
        try{
            $result = $mysqli->query("INSERT INTO users (correo, contrasena) VALUES ('$correo', '$hash')");

            if($result) {
                $data = $mysqli->query("SELECT * FROM users WHERE correo = '$correo'");
                $data = $data->fetch_assoc();
                session_start();
                $_SESSION["user_data"] = $data;

             header("Location: /view/dashboard.php");
            } else{
             echo "error al registrar usuario";
            }
        } catch (mysqli_sql_exception $e){
            if ($mysqli->errno === 1062){
                session_start();
                $_SESSION["duplicado"] = true;
                header("Location: /index.php");
            } else{
                echo "Error:" . $e->getMessage();
            }
        }
    }
    ?>