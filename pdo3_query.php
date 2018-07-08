<?php
    try{
        $a = new PDO("mysql:host=127.0.0.1;
        dbname=chat;charset=UTF8;","root","");
        // change usage $pdo->query*************
        // $result = $a->prepare("select * from chatlog");
        // $result->execute();    
        $result = $a->query("select * from chatlog");

        while($row=$result->fetch(PDO::FETCH_ASSOC)){
            echo "<pre>".print_r($row, true)."</pre>";
        }
    }catch(PDOException $ex){
        $ex->getMessage();
    }

?>