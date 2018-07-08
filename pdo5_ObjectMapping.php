<?php
class User {
    public $id;
    public $first_name;
    public $last_name;
     
    public function info()
    {
        return '#'.$this->id.': '.$this->first_name.' '.$this->last_name;
    }
}
$query = "SELECT id, first_name, last_name FROM users";
     
// PDO
$result = $pdo->query($query);
$result->setFetchMode(PDO::FETCH_CLASS, 'User');
 
while ($user = $result->fetch()) {
    echo $user->info()."\n";
}
?>