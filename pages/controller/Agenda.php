<?php

require '../../db/conexao.php';

if (isset($conexao)) {
    if (isset($_REQUEST ["operacao"])) {
        if ($_REQUEST ["operacao"] == "I") {
            $comando = $conexao->prepare("
        INSERT INTO agenda(
          nome, sexo, telefone, valortattoo, 
          datatattoo, tododia, terminotattoo, localtattoo)
      VALUES (?, ?, ?, ?, ?, ?, ?, ?); 
      ");
            $sql = array(
                $_POST ["nome"],
                $_POST ["sexo"],
                $_POST ["telefone"],
                $_POST ["valortattoo"],
                $_POST ["apptStartTime"],
                $_POST ["apptStartTime"],
                $_POST ["apptEndTime"],
                $_POST ["localtattoo"],
            );

            $comando->execute($sql);

            echo '<script type="text/javascript">window.location = "http://protattoo.top/index.php?page=cadAgenda"</script>';
        }
    }
}