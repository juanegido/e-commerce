<?php
    class Skill{
        private $db;

        public function __construct(){
            $this->db = new Base;
        }

        public function getSkills(){
            $this->db->query("SELECT * FROM skills");
            return $this->db->records();
        }

    }



?>