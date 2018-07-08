<?php
    $host="localhost";
    $dbName="chat";
    $charset="UTF8";
    $user="root";
    $pw="";
    
    try{
        $conn=new PDO(
            "mysql:host={$host};dbname={$dbName};charset={$charset};",
            $user,$pw);
        echo "db Connected successfully <br>";
        $sql='select * from chatlog where id>:id';
        $params = array(':id' => 5);
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);
        while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
            // extract($row);
            echo "<pre>".print_r($row, true)."</pre>";
        }
    }
    catch(PDOException $ex){
        echo "DB error: ".$ex->getMessage();
    }

?>
