<?php
date_default_timezone_set('Asia/Bangkok');
//หน้าแสดงรายการเบิก

$sql = "
SELECT 
COUNT(set_od.id) as total,
set_od.*,
ward.name as ward
FROM set_od
INNER JOIN ward ON set_od.ward_id = ward.id
GROUP BY order_id
ORDER BY create_at DESC LIMIT 100
";
$result = $pdo->prepare($sql);
$result->execute();
$json = [];
while($rs = $result->fetch(PDO::FETCH_OBJ)){
    $json[] = $rs;
}

echo json_encode($json);