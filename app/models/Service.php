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

        public function getSkillsService($id_category){
            $this->db->query("SELECT * FROM skills WHERE id_category=$id_category");
            return $this->db->records();
        }

    }



?>