<?php
    class Database{
        private $server_name = "localhost"; //127.0.0.1
        private $username = "root";
        private $password = ""; // if you are using MAC, add "root" as the password
        private $db_name = "the_company_april";
        protected $conn;

        public function __construct(){
            $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

            if ($this->conn->connect_error) {
                die("Unable to connect to the database " . $this->conn->connect_error);
            }
        }
    }
?>