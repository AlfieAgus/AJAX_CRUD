<?php
	class db{

		public $servername = 'localhost';
		public $username = 'root';
		public $password = '';
		public $dbname = 'ajaxcrud';

		public function conn() {
			$conn = mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);

			if(!$conn)
				die('Could not connect' .$conn->error);

			return $conn;
		}
	}
?>