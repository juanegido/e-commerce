<?php
    class skills {

        public function __construct(){
            $this->skillModel = $this->models('skill');
        }

        public function index(){

        }

        public function edit($id){
            $this->view('skills' => ['skill' => $skill]):
            
        }

        public function create($id, $name, $category, $price, $description){

        }

    }


?>