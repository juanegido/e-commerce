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

            $skills = $this->serviceModel->getskillservice($id_service);
            
            $data = [
                'title' => 'Welcome to TachBot site', 
                'Skills' => $skills
            ];

            $this->view('pages/skills', $data);

        }

    }
?>