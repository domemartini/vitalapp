<?php

try {
    $conexao = new PDO('mysql:host=mysql552.umbler.com;dbname=dbvitalpro',
            // usuario, senha
            'adminvitalproapp', 'RRQ7)]3q.u[2');
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>