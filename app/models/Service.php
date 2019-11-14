<?php
    class Service{
        private $db;

        public function __construct(){
            $this->db = new Base;
        }

        public function getServices(){
            $this->db->query("SELECT * FROM services");
            return $this->db->records();
        }

    }



?>