<?php
    require_once "models/Producto.php";
    class Productos{
        private $model;
        public function __CONSTRUCT()
        {
            $this->model = new Producto();
        }
        public function main(){
            require_once "views/Producto/Producto_read.view.php";        
        }

    }
?>