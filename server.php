<?php
include __DIR__.'/database.php';
//var_dump($discs);

header('Content-Type: application/json');

echo json_encode($discs)
?>