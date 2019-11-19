<?php
    class Services extends Controller{
        public function __construct(){
            $this->serviceModel = $this->model('Service');
            
        }

        public function index(){

            $services = $this->serviceModel->getServices();
            
            $data = [
                'title' => 'Welcome to TachBot site', 
                'Services' => $services
            ];

            $this->view('pages/services', $data);
        }

        public function skills($id_service){

            $services = $this->serviceModel->getskillsservice($id_service);
            
            $data = [
                'title' => 'Welcome to TachBot site', 
                'Skills' => $skills
            ];

            $this->view('pages/skills', $data);

        }

        public function service($id_category){
            //$this->view('pages/skill');
            
        }

        public function update($num_reg){
            echo $num_reg;
        }
    }
?>