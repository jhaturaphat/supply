<?php
if(!isset($_GET['oid'])){
    http_response_code(404);
    echo json_encode(['message'=>'ไม่มีพารามิเตอร์ส่งมา']);
    exit;
}
$data = $_GET['oid'];

$sql = "
SELECT 
set_od.*,
ward.name as ward
FROM set_od
INNER JOIN ward ON set_od.ward_id = ward.id
WHERE set_od.order_id = ?;
";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(1,$data, PDO::PARAM_STR);
$stmt->execute();
$json = [];
while($rs = $stmt->fetch(PDO::FETCH_OBJ)){
    $json[] = $rs;
}

echo json_encode($json);
