<?php

try {
    // Connect to database
    require '../db/conexao.php';

$sql = "UPDATE agenda SET datatattoo = :datatattoo, 
            terminotattoo = :terminotattoo
            WHERE idcliente = :idcliente";
$retorno = $conexao->prepare($sql);                                  
$retorno->bindParam(':datatattoo', $_POST['start'], PDO::PARAM_STR);       
$retorno->bindParam(':terminotattoo', $_POST['end'], PDO::PARAM_STR);     
$retorno->bindParam(':idcliente', $_POST['id'], PDO::PARAM_INT);   
$retorno->execute(); 
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>