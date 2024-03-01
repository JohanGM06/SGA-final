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

    public function __CONSTRUCT()
    {
        try {
            $this->dbh = Database::connection();
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