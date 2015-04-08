<?php

    include 'createDBConn.php';
    
    try{
        $stmt = $conn->prepare("SELECT content FROM test WHERE id = '". $idtext ."'");
        $stmt->execute();
        $content = $stmt->fetch();
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
    
    $conn = null;
?>