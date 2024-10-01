<?php

include ' conectBD.php ';

$name_cadastro = $_POST['name_cadastro'];
$nascimento_cadastro = $_POST['nascimento_cadastro'];
$email_cadastro = $_POST['email_cadastro'];
$senha_cadastro = $_POST['senha_cadastro'];
$confirmar_senha = $_POST['confirmar_senha'];

if ($email_cadastro >= 1) {
    echo "<script style='background-color: black'> alert (' Email Cadastrado ') </script>";
    header ('Location: ../../pages/login.html');
} else {
    $query = "INSERT INTO cadastrar (name_cadastro, nascimento_cadastro, email_cadastro, senha_cadastro, confirmar_senha) VALUES ('$name_cadastro','$nascimento_cadastro','$email_cadastro','$senha_cadastro', '$confirmar_senha')";
    $sql= mysqli_query($connection, $query) or die ('erro de cadastro');
}


?>