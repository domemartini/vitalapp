<?php

require '../db/conexao.php';

/*
 * CADASTRAR
 */
if (isset($conexao)) {
    if (isset($_REQUEST ["operacao"])) {
        if ($_REQUEST ["operacao"] == "I") {
            $comando = $conexao->prepare("insert into cliente(idmunicipio, nome, datanascimento, sexo, rg, telefone, rua, numero, bairro, cep, plano) values(?,?,?,?,?,?,?,?,?,?,?)");
            $comando->execute(array(
                $_POST ["idmunicipio"],
                $_POST ["nome"],
                $_POST ["datanascimento"],
                $_POST ["sexo"],
                $_POST ["rg"],
                $_POST ["telefone"],
                $_POST ["rua"],
                $_POST ["numero"],
                $_POST ["bairro"],
                $_POST ["cep"],
                $_POST ["idplanos"]
            ));

            echo '<script type="text/javascript">window.location = "http://grupovitalpro.com.br/pages/CadCliente.php"</script>';
        }
    }

    $consultaEstados = $conexao->prepare("select * from estado");
    $consultaEstados->execute();

    $consultaMunicipios = $conexao->prepare("select * from municipio");
    $consultaMunicipios->execute();
    
    $consultaPlanos = $conexao->prepare("select * from planos");
    $consultaPlanos->execute();
}

/*
 * LISTAR
 */
if (isset($conexao)) {
    if (isset($_GET ["codigo"])) {
        $comando = $conexao->prepare("delete from cliente where idcliente = ?");
        $comando->execute(array(
            $_REQUEST ["codigo"]
        ));
        echo '<script type="text/javascript">window.location = "http://grupovitalpro.com.br/pages/CadCliente.php"</script>';
    }

    $comando = $conexao->prepare("SELECT * FROM cliente ORDER BY nome ASC;");
    $comando->execute();
}