<?php
$_GET['username'] = "'; DELETE FROM users; /*";
//__________________________________________________________
// PDO, "manual" escaping
$username = PDO::quote($_GET['username']); 
$pdo->query("SELECT * FROM users WHERE username = $username");         
// mysqli, "manual" escaping
$username = mysqli_real_escape_string($_GET['username']); 
$mysqli->query("SELECT * FROM users WHERE username = '$username'");
//__________________________________________________________
// PDO, prepared statement
$pdo->prepare('SELECT * FROM users WHERE username = :username');
$pdo->execute(array(':username' => $_GET['username'])); 
// mysqli, prepared statements
$query = $mysqli->prepare('SELECT * FROM users WHERE username = ?');
$query->bind_param('s', $_GET['username']);
$query->execute()


?>