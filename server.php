<?php
include __DIR__.'/database.php';
$newDiscs = [];
//var_dump($discs);
if(isset($_GET['genre'])){
    foreach($discs as $disc){
        if($disc['genre'] == $_GET['genre']){
            $newDiscs[] = $disc;
        }
    }
} else {
    $newDiscs = $discs;
}
header('Content-Type: application/json');

echo json_encode($newDiscs)
?>