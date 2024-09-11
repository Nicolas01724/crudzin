<?php

    class Database {

        private $conn;
        private string $host;
        private string $dbname;
        private string $password;
        private string $user;

        public function __construct(string $localhost, string $dbname, string $password, string $user) {
            $this->host = $localhost;
            $this->dbname = $dbname;
            $this->password = $password;
            $this->user = $user;

            $this->connect();
        }
        
        public function connect() {
            try {
                $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
                $this->conn = $conn;
            } catch(PDOExeption $e) {
                echo "Conexão falhou: ";
            }
        }
    }