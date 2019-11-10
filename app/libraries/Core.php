<?php
    /*Mapear la url ingresada en el navegador
    1-Controlador
    2-Método
    3-Parámetro
    Ejemplo: /skills/edit/4
    */

    class Core{
        protected $actualController = 'pages';
        protected $actualMethod = 'index';
        protected $params = [];

        public function __construct(){
            //print_r($this->getUrl());
            $url = $this->getUrl();

            if (file_exists('../app/controllers/'.ucwords($url[0]).'.php')) {
                $this->actualController = ucwords ($url[0]);

                unset($url[0]);
            }

            require_once '../app/controllers/'.$this->actualController.'.php';
            $this->actualController = new $this->actualController;

            if (isset($url[1])) {
                
                if (method_exists($this->actualController, ($url[1]))) {
                    $this->actualMethod = ($url[1]);
                    
                    unset($url[1]);
                }

            }

            //echo $this->actualMethod;
            $this->params = $url ? array_values($url) : [];

            call_user_func_array([$this->actualController, $this->actualMethod], $this->params);

        }

        public function getUrl(){
            //echo $_GET['url'];
            if (isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode ('/', $url);
                return $url;
            }
        }
    }




?>