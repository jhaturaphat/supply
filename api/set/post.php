<?php

$data = json_decode(file_get_contents('php://input'));

$sql = "INSERT INTO set_od (code, name_th,remain, request, ward_id) VALUES (?,?,?,?,?)";
$stmt = $pdo->prepare($sql);
foreach($data as $val){
    try{
        $stmt->bindParam(1,$val->code, PDO::PARAM_STR);
        $stmt->bindParam(2,$val->name_th, PDO::PARAM_STR);
        $stmt->bindParam(3,$val->remain, PDO::PARAM_INT);
        $stmt->bindParam(4,$val->request, PDO::PARAM_INT);
        $stmt->bindParam(5,$val->ward_id, PDO::PARAM_INT);
        $stmt->execute();
    }catch(PDOException $e){
        http_response_code('500');
        echo json_encode(['message' => $e->getMessage()]);
        exit;
    }
}

http_response_code(200);
echo json_encode(['message' => 'success']);