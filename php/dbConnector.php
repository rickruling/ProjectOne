<?php
try {
	class contentClass {
		private static $servername;
		private static $username;
		private static $password;
		private static $dbname;
		public static $conn;
		private static $instance;
		function __construct() {
			$this->servername = "localhost";
			$this->username = "rickruling";
			$this->password = "rickruling";
			$this->dbname = "project_one";
			$this->conn = new mysqli
			( $this->servername, $this->username, $this->password, $this->dbname );
		}
		function __destruct() {
			$this->conn->close ();
		}
		public static function openconnection() {
			self::$conn = new mysqli 
			( self::$servername, self::$username, self::$password, self::$dbname );
		}
		public static function closeconnection() {
			$this->conn->close ();
		}
		public static function singleton() {
			if (! isset ( self::$instance )) {
				self::$instance = new contentClass ();
			}
			if(self::$conn == false){
				self::openconnection();
			}
			return self::$instance;
		}
	}
} catch ( Exception $e ) {
	echo "error occured";
}
?>