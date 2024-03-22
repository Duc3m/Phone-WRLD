<?php
class Controller 
{

    public $connection;

    public function __construct() {
        $this->connection = new mysqli($_SESSION["DBHOST"], $_SESSION["DBUSER"], $_SESSION["DBPASS"], $_SESSION["DBNAME"]);
        // $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		// $this->connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        if ($this->connection->connect_error) {
            die("". $this->connection->connect_error);
        }else{
            // print('<script>console.log("connected database")</script>');
        }
    }

    function selectData($sql) {
        return mysqli_query($this->connection, $sql);
    }

    function __destruct() {
        $this->connection->close();
    }
}

