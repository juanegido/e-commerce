<?php
    class Base{
        private $host = 'DB_HOST';
        private $user = 'DB_USER';
        private $password = 'DB_PASSWORD';
        private $dbname = 'DB_NAME';

        private $dbh;
        private $stmt;
        private $error;

        public function __construct(){
            $dsn = 'mysql:host='.$this->host.';dbname='.$this->dbname;
            $options = array (
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            //Creamos una instancia de PDO

            try {
                $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
                $this->dbh->exec('set names utf8');

            
            } catch (PDOException $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        public function quer($sql){
            $this->stmt = $this->dbh->prepare($sql);
            
        }


    }

?>