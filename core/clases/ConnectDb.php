<?php 


class ConnectDb{

	public static function Conector(){
		$pdo = new PDO('mysql:host=localhost;dbname=growthdb;charset=utf8', "growtuser", "growtpass");
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}

}

/*

create database growthDB;


*/
?>