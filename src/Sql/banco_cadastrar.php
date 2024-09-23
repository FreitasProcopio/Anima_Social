<?php

include ' conexao_banco.php ';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmar = $_POST['confirmar'];

if ($email >= 1) {
    echo "<script style='background-color: black'> alert (' Email Cadastrado ') </script>";
    header ('Location: ../../pages/login.html');
} else {
    $query = "INSERT INTO cadastrar (nome,email,senha,confirmar) VALUES ('$nome','$email','$senha','$confirmar')";
    $sql= mysqli_query($connection, $query) or die ('erro de cadastro');
}
?>