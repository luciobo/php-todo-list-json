<?php
$tasks = file_get_contents("../task.json");
header("Content-Type: application/json");
echo $tasks;