<?php
    class Skills extends Controller{
        public function __construct(){
            $this->skillModel = $this->model('Skill');
            
        }

        public function index(){

            $skills = $this->skillModel->getSkills();
            
            $data = [
                'title' => 'Welcome to TachBot site', 
                'Skills' => $skills
            ];

            $this->view('pages/skills', $data);
        }

        public function Category($id_category){
            //$this->view('pages/skill');
            
        }

        public function update($num_reg){
            echo $num_reg;
        }
    }
?>