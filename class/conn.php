<?php
date_default_timezone_set("Asia/Kolkata");
class conn 
{
	private $server;
	private $user;
	private $pass;
	private $dbname;
	private $charset;
	protected function connect()
	{
		$this->server = "localhost";
		$this->user = 'root';
		$this->pass = '';
		$this->dbname = 'sns';
		$this->charset = "utf8mb4";
		try{
			$dbc = "mysql:host=".$this->server.";dbname=".$this->dbname.";charset=".$this->charset;
			$conn = new PDO($dbc, $this->user, $this->pass);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conn;
		}catch(PDOException $e){
			echo "Somethis is missing: " . $e->getMessage();
		}
	}
}
?>