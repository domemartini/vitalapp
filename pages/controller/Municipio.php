<?php

require 'db/conexao.php';

/*
 * CADASTRAR
 */
if (isset($conexao)) {
    if (isset($_REQUEST ["operacao"])) {
        if ($_REQUEST ["operacao"] == "I") {
            $comando = $conexao->prepare("insert into municipio(idestado, nome) values(?,?)");
            $comando->execute(array(
                $_POST ["idestado"],
                $_POST ["nome"]
            ));
            echo '<script type="text/javascript">window.location = "http://protattoo.top/index.php?page=relMunicipio"</script>';
        }
    }

    $consultaEstados = $conexao->prepare("select * from estado");
    $consultaEstados->execute();
}

/*
 * LISTAR
 */
if (isset($conexao)) {
    if (isset($_GET ["codigo"])) {
        $comando = $conexao->prepare("delete from municipio where idmunicipio = ?");
        $comando->execute(array(
            $_REQUEST ["codigo"]
        ));
        echo '<script type="text/javascript">window.location = "http://protattoo.top/index.php?page=relMunicipio"</script>';
    }

    $comando = $conexao->prepare("select * from municipio order by nome");
    $comando->execute();
}