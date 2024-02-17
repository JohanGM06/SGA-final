<?php
    require_once "models/Producto.php";
    class Productos{
        public function main(){
            echo "hola";
        }
        public function readProducto(){
            $productos = new Producto;
            $productos = $productos->productoRead();
            // var_dump($productos);

            require_once "views/Producto/Producto_read.view.php";
        }
    }
?>