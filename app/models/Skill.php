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

        public function getSkillsByCategory($id_category){
            $this->db->query("SELECT * FROM skills WHERE id_category=$id_category");
            return $this->db->records();
        }

    }



?>