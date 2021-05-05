<?php

$sql = "SELECT * FROM ward";
$result = $pdo->prepare($sql);
$result->execute();
$json = [];
while($rs = $result->fetch(PDO::FETCH_OBJ)){
    $json[] = $rs;
}

echo json_encode($json);