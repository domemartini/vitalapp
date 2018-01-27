<?php

try {
    // Connect to database
    require '../db/conexao.php';

$sql = "DELETE FROM agenda WHERE idcliente = :idcliente";
$retorno = $conexao->prepare($sql);                                     
$retorno->bindParam(':idcliente', $_POST['id'], PDO::PARAM_INT);   
$retorno->execute(); 
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>