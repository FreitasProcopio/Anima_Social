<?php

include('conectBD.php');

$name_cadastro = $_POST['name_cadastro']; 
$nascimento_cadastro = $_POST['nascimento_cadastro'] ;
$email_cadastro = $_POST['email_cadastro'];
$senha_cadastro = $_POST['senha_cadastro'];
$confirmar_senha = $_POST['confirmar_senha'];

$email_check = $connection->prepare("SELECT COUNT(*) FROM cadastro WHERE email_cadastro = ?");
$email_check->bind_param("s", $email_cadastro);
$email_check->execute();
$email_check->bind_result($email_exists);
$email_check->fetch();
$email_check->close();

if ($email_exists > 0) {
    echo "<script>alert('Email Cadastrado');</script>";
    header('Location: ../../pages/login.html');
} else if ($senha_cadastro === $confirmar_senha) {
    $senha_cadastro_hashed = password_hash($senha_cadastro, PASSWORD_BCRYPT);

    if (empty($name_cadastro) || empty($nascimento_cadastro) || empty($email_cadastro) || empty($senha_cadastro) || empty($confirmar_senha)) {
        echo "<script> alert (Por favor, preencha todos os campos.) </script>";
        exit;
    }

    $stmt = $connection->prepare("INSERT INTO cadastro (name_cadastro, nascimento_cadastro, email_cadastro, senha_cadastro) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name_cadastro, $nascimento_cadastro, $email_cadastro, $senha_cadastro_hashed);
    $stmt->execute();
    $stmt->close();

    header('Location: ../../pages/cadastro/cadastro-2.html');
} else {
    echo "<script>alert('As senhas não coincidem.');</script>";
}

?>
