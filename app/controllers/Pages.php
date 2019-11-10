<?php
    class Pages extends Controller{
        public function __construct(){
            $this->skillModel = $this->model('Skill');
            
        }

        public function index(){
            
            $data = [
                'title' => 'Welcome to TachBot site'
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