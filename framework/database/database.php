<?php

class database {
	private $database_host ;
	private $database_name;
	private $user_name;
	private $password; 
	function __construct(){
		$this->database_host = DATABASE_HOST;
		$this->database_name = DATABASE_NAME;
		$this->user_name = USER_NAME;
		$this->password = PASSWORD;
	}

	private function connect() {
               $pdo = new PDO("mysql:host=".$this->database_host.";dbname=".$this->database_name.";charset=utf8", $this->user_name, $this->password);
               $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
               return $pdo;
     }
     
	public function query($query, $params = array()) {

	    $statement = self::connect()->prepare($query);
	    $statement->execute($params);
	    if (explode(' ', $query)[0] == 'SELECT') {

	    	$data = $statement->fetchAll();
	    	// row result = 0 
	    	if (!$data) { 
	    		return false ; 
	    	}
	    	return $data[0];
	    }

	}

	public function query2D($query, $params = array()) {

	    $statement = self::connect()->prepare($query);
	    $statement->execute($params);
	    if (explode(' ', $query)[0] == 'SELECT') {
	    $data = $statement->fetchAll();

	    if (!$data) { 
	    		return false ; 
	    	}
	    return $data;
	    }
	}
}

?>