<?php


class DBConnection{

	private $mysql_server_name;
	private $mysql_username;
	private $mysql_password;
	private $database;
	private $conn=null;


	/**
	 * DBConnection constructor.
	 */

	function  openConnection($level_id=0) {


		if ($level_id==0) {
			$this->mysql_server_name = "localhost";
			$this->mysql_username = "root";
			$this->mysql_password = "";
			$this->database = "travelcompanion";
		}
//		else if ($level_id==2){
//			$this->mysql_server_name = "localhost";
//			$this->mysql_username = "teacher";
//			$this->mysql_password = "";
//			$this->database = "musicschool";
//		}

		else{
			$this->mysql_server_name = "localhost";
			$this->mysql_username = "public";
			$this->mysql_password = "";
			$this->database = "travelcompanion";
		}


		if($this->conn == null){
			$this->conn = mysqli_connect( $this->mysql_server_name,
				$this->mysql_username,
				$this->mysql_password,
				$this->database );
		}

		//Create connection


		/*$this->conn =  new mysqli( $this->mysql_server_name,
			$this->mysql_username,
			$this->mysql_password,
			$this->database );*/

		//Check connection
		if ( $this->conn->connect_error ) {
			die( "Connection failed: " . $this->conn->connect_error );
		}
		return $this->conn;
	}

	function closeConnection() {
		mysqli_close($this->conn);
	}

	function executeSQL($query) {
		return mysqli_query($this->conn, $query);
//		return $query->query();
	}

	function startTransaction() {
		$this->conn->begin_transaction(MYSQLI_TRANS_START_READ_WRITE);
	}

	function endTransaction() {
		$this->conn->commit();
	}



}