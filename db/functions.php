<?php

function db_connect() {
    $PDO = new PDO('mysql:host=mysql552.umbler.com;dbname=dbvitalpro',
            // usuario, senha
            'adminvitalproapp', 'RRQ7)]3q.u[2');

    return $PDO;
}

function isLoggedIn() {
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
        return false;
    }

    return true;
}
