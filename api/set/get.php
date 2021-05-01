<?php

$sql = "SELECT 
`set`.*,
use_gp.group,
use_gp.color
FROM `set`
INNER JOIN use_gp ON `set`.use_gp_id = use_gp.id
GROUP BY `set`.id";
$result = $conn_db->prepare($sql);
$result->execute();
$json = [];
while($rs = $result->fetch(PDO::FETCH_OBJ)){
    $json[] = $rs;
}

echo json_encode($json);