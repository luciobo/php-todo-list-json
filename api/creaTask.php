<?php

$tasks = file_get_contents("../task.json");

$tasks = json_decode($tasks, true);

$newTask = [
    "parola" => $_POST["parola"]
];

$tasks[] = $newTask;

$tasksjson = json_encode($tasks, JSON_PRETTY_PRINT);

file_put_contents("../task.json", $tasksjson);

header ("Content-Type: application/json");

echo json_encode($newTask);

?>