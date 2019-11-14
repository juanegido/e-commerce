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

        public function service($id_category){
            //$this->view('pages/skill');
            
        }

        public function update($num_reg){
            echo $num_reg;
        }
    }
?>