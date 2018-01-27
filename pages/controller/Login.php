<?php

//require 'db/conexao.php';

// inclui o arquivo de inicialização
require 'init.php';

// resgata variáveis do formulário
$email = isset($_POST['usuario']) ? $_POST['usuario'] : '';
$password = isset($_POST['senha']) ? $_POST['senha'] : '';

if (empty($email) || empty($password)) {
    echo "Informe email e senha";
    exit;
}

$PDO = db_connect();

$sql = "SELECT id, nome FROM usuarios WHERE usuario = :usuario AND senha = :senha";
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':usuario', $email);
$stmt->bindParam(':senha', $password);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($users) <= 0) {
    echo "Email ou senha incorretos";
    exit;
}

// pega o primeiro usuário
$user = $users[0];

session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['nome'];

header('Location: ../admin.php');
