<?php

$data = json_decode(file_get_contents('php://input'));

$sql = "UPDATE set_od SET `get`=?, status = 'bg-success' WHERE id=?";

$stmt = $pdo->prepare($sql);
foreach($data as $val){    
    try{
        $stmt->bindParam(1,$val->remain, PDO::PARAM_STR);
        $stmt->bindParam(2,$val->id, PDO::PARAM_INT);       
        $stmt->execute();
        
    }catch(PDOException $e){
        http_response_code('500');
        echo json_encode(['message' => $e->getMessage()]);
        exit;
    }
}

echo json_encode(['message' => 'บันทึกสำเร็จ']);
