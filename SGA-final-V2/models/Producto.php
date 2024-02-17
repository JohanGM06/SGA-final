<?php
class Producto{
    private $dbh;
    public $codigoP;
    public $productoP;
    public $medidaP;
    public $nombreproveedorP; 
    public $precioP;
    public $cantidadP;
    public $observacionesP;

    public function __construct(){
        try {
            $this->dbh = DataBase::connection();
            $a = func_get_args();
            $i = func_num_args();
            if (method_exists($this, $f = '__construct' . $i)) {
                call_user_func_array(array($this, $f), $a);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        } 
    }
    public function __construct7($codigoP,$productoP,$medidaP,$cantidadP,$precioP,$nombreproveedorP,$observacionesP)
    {
      $this->codigoP = $codigoP;
      $this->productoP = $productoP;
      $this->medidaP = $medidaP;      
      $this->nombreproveedorP = $nombreproveedorP;
      $this->precioP = $precioP;      
      $this->cantidadP = $cantidadP;
      $this->observacionesP = $observacionesP;
    }        
    public function setcodigoP($codigoP){
        $this->codigoP = $codigoP;
    }
    public function getcodigoP(){
        return $this->codigoP;
    }
    public function setproductoP($productoP){
        $this->productoP = $productoP;
    }
    public function getproductoP(){
        return $this->productoP;
    }
    public function setmedidaP($medidaP){
        $this->medidaP = $medidaP;
    }
    public function getmedidaP(){
        return $this->medidaP;
    }
    public function setnombreproveedorP($nombreproveedorP){
        $this->nombreproveedorP = $nombreproveedorP;
    }
    public function getnombreproveedorP(){
        return $this->nombreproveedorP;
    }
    public function setprecioP($precioP){
        $this->precioP = $precioP;
    }
    public function getprecioP(){
        return $this->precioP;
    }
    public function setcantidadP($cantidadP){
        $this->cantidadP = $cantidadP;
    }
    public function getcantidadP(){
        return $this->cantidadP;
    }
    public function setobservacionesP($observacionesP){
        $this->observacionesP = $observacionesP;
    }
    public function getobservacionesP(){
        return $this->observacionesP;
    }
// necesito poner el set

    public function productoRead(){
        try{
            $productolist = [];
            $sql= 'SELECT * FROM producto';
            $stmt = $this->dbh->query($sql);
            foreach($stmt->fetchAll() as $producto) {
                $productolist[] = new Producto(
                    $producto['codigo_producto'],
                    $producto['nombre_producto'],
                    $producto['medida_producto'],
                    $producto['nombre_proveedor'],
                    $producto['precio'],
                    $producto['cantidad'],
                    $producto['observaciones_producto']
                );
            }
            return $productolist;
        }catch (Exception $e){
        die($e->getMessage());
        }
    }

}
?>