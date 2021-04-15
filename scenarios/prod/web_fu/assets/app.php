<?php

require('db.php');

$count = 0;
$results = [];

if (isset($_GET[ARG]) && $_GET[ARG] != '') {
    $r = $pdo->query(str_replace('<ARG>', $_GET[ARG], QUERY));

    // Convert PDO statement to plain array and count number of rows.
    foreach ($r as $row) {
        array_push($results, $row);
        $count++;
    }
}

require('views/' . LEVEL . '.php');
