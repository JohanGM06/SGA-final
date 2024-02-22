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

    public function productoRead(){
        try{
            $stm = $this->dbh->prepare('SELECT * FROM producto ORDER BY codigo_producto DESC');
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

}
?>