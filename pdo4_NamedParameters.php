<?php
    try{
        $conn = new PDO("mysql:host=127.0.0.1;
        dbname=chat;charset=UTF8;","root","");
        
        $sql='select * from chatlog where id>:id';
        $params = array(':id' => 5);
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            // extract($row);
            echo "<pre>".print_r($row, true)."</pre>";
        }
    }catch(PDOException $ex){
        echo $ex->getMessage();
    }

?>