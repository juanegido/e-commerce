<?php
    class Pages extends Controller{
        public function __construct(){
            $this->skillModel = $this->model('Skill');
            
        }

        public function index(){

            $skills = $this->skillModel->getSkills();
            
            $data = [
                'title' => 'Welcome to TachBot site', 
                'Skills' => $this->skills
            ];

            $this->view('pages/home', $data);
        }

        public function skill(){
            $this->view('pages/skill');
            
        }

        public function update($num_reg){
            echo $num_reg;
        }
    }
?>