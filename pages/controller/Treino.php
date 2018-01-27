<?php

require 'db/conexao.php';

/*
 * CADASTRAR
 */
if (isset($conexao)) {
    $consultaNome = $conexao->prepare("select * from cliente");
    $consultaNome->execute();
    $comando = $conexao->prepare("SELECT * FROM membros_superiores ORDER BY idmemb_sup ASC;");
    $comando->execute();
}


/*
 * LISTAR
 */