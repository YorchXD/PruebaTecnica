<?php
    class DB
    {
        private $host;
        private $db;
        private $user;
        private $password;
    
        public function __construct()
        {
            $this->host     = 'desafio-full-stack.cdr9wf5llq1m.us-east-1.rds.amazonaws.com';
            $this->db       = 'georesearch';
            $this->user     = 'fullstack';
            $this->port     = '5432';
            $this->password = "desafio-2020";
        }
        
        function connect()
        {        
            try
            {                
                $connection = "pgsql:host=".$this->host.";dbname=" . $this->db;
                $pdo = new PDO($connection,$this->user,$this->password);
                return $pdo;
    
    
            }
            catch(PDOException $e)
            {
                print_r('Error connection: ' . $e->getMessage());
            }   
        }
    }

?>