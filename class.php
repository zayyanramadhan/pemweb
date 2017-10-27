<?php
	require 'conf.php';
 
	class db_class{
		public $host = db_host;
		public $user = db_user;
		public $pass = db_pass;
		public $dbname = db_name;
		public $conn;
		public $error;
 
		public function __construct(){
			$this->connect();
		}
 
		private function connect(){
			$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database".$this->conn->connect_error;
				return false;
			}
		}
 
		public function save($nama_barang, $stok, $harga){
			$stmt = $this->conn->prepare("INSERT INTO `barang` (nama_barang,stok,harga) VALUES(?, ?, ?)") or die($this->conn->error);
			$stmt->bind_param('sss',$nama_barang, $stok, $harga);
			if($stmt->execute()){
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}
	}
?>