<?php
Class Database{
	public $hostdb   = DB_HOST;
	public $userdb   = DB_USER;
	public $passdb   = DB_PASS;
	public $namedb 	 = DB_NAME;
	
	
	public $link;
	public $error;
	
	public function __construct(){
		$this->connectDB();
	}
	
	private function connectDB(){

	/**
	$this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
	if(!$this->link){
		$this->error ="Connection fail".$this->link->connect_error;
		return false;
	}
	**/

	if (!isset($this->link)) {
			try{
				$pdo = new PDO("mysql:host=".$this->hostdb.";dbname=".$this->namedb, $this->userdb, $this->passdb);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$pdo->exec("SET CHARACTER SET utf8");
				$this->link = $pdo;
			}catch(PDOException $e){
				die("Failed to connect with database".$e->getMessage());
			}
		}
 	}
 
}
?>

