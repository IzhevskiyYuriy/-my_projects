<?php
class Db
{

	public static function getConnection()
	{
		$paramsPath = ROOT . '/data/db_params.php';
		$params = include($paramsPath);


		$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
		
		return $db = new PDO($dsn, $params['user'], $params['password']);
	}
}




?>