<?php
$dsn = "mysql:dbname=testepdo;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
	$pdo = new PDO($dsn, $dbuser, $dbpass);

}catch(PDOException $e){
	echo "Erro na conexão: ".$e->getMessage();
}
?>