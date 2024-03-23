<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $id_doc = $_POST['id_doc'];

    if (empty($username) || empty($password) || empty($email) || empty($id_doc)) {
        echo "Por favor, completa todos los campos.";
    } else {
        $file = fopen("users.txt", "a");
        fwrite($file, $username . "," . $password . "," . $email . "," . $id_doc . "\n");
        fclose($file);

        echo "Registro exitoso. <a href='login.html'>Iniciar sesión</a>";
    }
}
