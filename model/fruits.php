<?php
class fruits {
    public function __construct($conn){
        $this->conn = $conn;
    }

  	public function store($name, $classification, $description) {

    	$sql = "INSERT INTO fruits (name, classification, description) VALUES ($name','$classification', '$description')";

    	if ($this->conn->query($sql) === TRUE) {
			return true;
    	} else {
        	return false;
    	}
  	}
}


?>