<?php

include 'conexao_banco.php';


// Inserir dados no banco
$email = $_GET['email']; 
$senha = $_GET['senha'];

$query = mysqli_query($connection, "SELECT * FROM cadastrar WHERE email = '$email' AND senha = '$senha'");
// teste de validação ($connection, "SELECT * FROM cadastrar WHERE email = 'pp918545@gmail.com' AND senha = '1234'");

$result = ( $query );

$row = mysqli_num_rows($result);  // verifica o número de linhas encontradas

if($row == 1) { // caso encontrada 1 linha, então o usuário está cadastrado

    $_SESSION['email'] = $email;    // se o usuário está cadastrado, inicia uma sessão com seu nome
    echo "<script> alert ('Cadastro encontrado') </script>";
    // header('location: ./banco_cadastrar.php');

} else {
    echo "<script> alert ( 'Erro nas credenciais' ) </script>";
    
    echo "<meta http-equiv='refresh' content='0; url=../../pages/login.html'>";
}

?>