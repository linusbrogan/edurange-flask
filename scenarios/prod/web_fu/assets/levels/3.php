<?php

require('../db.php');

const LEVEL = 3;
const ARG = 'title';

$count = 0;
$results = [];

if (isset($_POST['title']) && $_POST['title'] != '') {
    $r = $pdo->query("SELECT * FROM movies WHERE year='{$_POST['title']}'");

    foreach ($r as $row) {
        array_push($results, $row);
        $count++;
    }
}

require('../views/' . LEVEL . '.php');
