<?php
    class Pages extends Controller{
        public function __construct(){
            
        }

        public function index(){
          
            $data = [
                'title' => 'Welcome to TachBot site'
            ];

            $this->view('pages/home', $data);
        }

    }
?>