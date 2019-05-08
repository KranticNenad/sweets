<?php
    namespace App\Core;

    class DatabaseConnection {
        private $connection;
        private $config;

        public function __construct(DatabaseConfig $config)
        {
            $this->config = $config;
        }

        public function getConnection() : \PDO{
            if ($this->connection === NULL){
                $this->connection = new \PDO($this->config->getSourceString(),
                                            $this->config->getUser(), 
                                            $this->config->getPassword());
            }
            return $this->connection;
        }
    }