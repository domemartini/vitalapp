<?php

try {
    // Connect to database
    require '../db/conexao.php';

    // Prepare and execute query
    $query = "SELECT * FROM agenda";
    $sth = $conexao->prepare($query);
    $sth->execute();

    // Returning array
    $events = array();

    // Fetch results
    while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
        $e = array();
        $e['id'] = $row['idcliente'];
        $e['title'] = $row['nome'];
        $e['start'] = $row['datatattoo'];
        $e['end'] = $row['terminotattoo'];
        $e['description'] ="<strong>Nome: </strong>" . $row['nome'] .  
        "</br><strong>Telefone: </strong>" . $row['telefone'] . "</br><strong>Valor: </strong>R$ " . $row['valortattoo'] . "<br><strong>Local da Tatuagem: </strong>" . $row['localtattoo'] . "</br><strong>Sexo: </strong>" . $row['sexo'];
        $e['descricao'] = "</br><strong>Telefone: </strong>" . $row['telefone'] . "</br><strong>Valor: </strong>R$ " . $row['valortattoo'] . "<br><strong>Local da Tatuagem: </strong>" . $row['localtattoo'];

        // Merge the event array into the return array
        array_push($events, $e);
    }
    // Output json for our calendar
    echo json_encode($events);
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
