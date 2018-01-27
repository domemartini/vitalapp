<?php

require 'db/conexao.php';

/*
 * CADASTRAR
 */
if (isset($conexao)) {
    if (isset($_REQUEST ["operacao"])) {
        if ($_REQUEST ["operacao"] == "I") {
            $comando = $conexao->prepare("insert into estado values(upper(?),?)");
            $comando->execute(array(
                $_POST ["idestado"],
                $_POST ["nome"]
            ));
            echo '<script type="text/javascript">window.location = "http://protattoo.top/index.php?page=relEstado"</script>';
        }
    }
}

/*
 * LISTAR
 */
if (isset($conexao)) {
    if (isset($_GET ["codigo"])) {
        $comando = $conexao->prepare("delete from estado where idestado = ?");
        $comando->execute(array(
            $_REQUEST ["codigo"]
        ));
        echo '<script type="text/javascript">window.location = "http://protattoo.top/index.php?page=relEstado"</script>';
    }

    $comando = $conexao->prepare("select * from estado order by nome");
    $comando->execute();
}