<?php
class Entrada{
    private $dbh;
    public $codigoEP;
    public $productoEP;
    public $medidaEP;
    public $fechaEP;
    public $cantidadEP;
    public $precioEP;
    public $nombreproveedorEP;
    public $nitEP;
    public $celEP;
    public $direccionproveedorEP;
    public $correoproveedorEP;
    public $observacionesEP;

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
    public function __construct12($codigoEP,$productoEP,$medidaEP,$fechaEP,$cantidadEP,$precioEP,$nombreproveedorEP,$nitEP,$celEP,$direccionproveedorEP,$correoproveedorEP,$observacionesEP)
    {
      $this->codigoEP = $codigoEP;
      $this->productoEP = $productoEP;
      $this->medidaEP = $medidaEP;
      $this->fechaEP = $fechaEP;
      $this->cantidadEP = $cantidadEP;
      $this->precioEP = $precioEP;
      $this->nombreproveedorEP = $nombreproveedorEP;
      $this->nitEP = $nitEP;
      $this->celEP = $celEP;
      $this->direccionproveedorEP = $direccionproveedorEP;
      $this->correoproveedorEP = $correoproveedorEP;
      $this->observacionesEP = $observacionesEP;
    }
    public function __construct11($productoEP,$medidaEP,$fechaEP,$cantidadEP,$precioEP,$nombreproveedorEP,$nitEP,$celEP,$direccionproveedorEP,$correoproveedorEP,$observacionesEP)
    {
      $this->productoEP = $productoEP;
      $this->medidaEP = $medidaEP;
      $this->fechaEP = $fechaEP;
      $this->cantidadEP = $cantidadEP;
      $this->precioEP = $precioEP;
      $this->nombreproveedorEP = $nombreproveedorEP;
      $this->nitEP = $nitEP;
      $this->celEP = $celEP;
      $this->direccionproveedorEP = $direccionproveedorEP;
      $this->correoproveedorEP = $correoproveedorEP;
      $this->observacionesEP = $observacionesEP;
    }
    public function setcodigoEP($codigoEP){
        $this->codigoEP = $codigoEP;

    }
    public function getcodigoEP(){
        return $this->codigoEP;
    }
    public function setproductoEP($productoEP){
        $this->productoEP = $productoEP;

    }
    public function getproductoEP(){
        return $this->productoEP;
    }    
    public function setmedidaEP($medidaEP){
        $this->medidaEP = $medidaEP;

    }
    public function getmedidaEP(){
        return $this->medidaEP;
    }    
    public function setfechaEP($fechaEP){
        $this->fechaEP = $fechaEP;

    }
    public function getfechaEP(){
        return $this->fechaEP;
    }    
    public function setcantidadEP($cantidadEP){
        $this->cantidadEP = $cantidadEP;

    }
    public function getcantidadEP(){
        return $this->cantidadEP;
    }    
    public function setprecioEP($precioEP){
        $this->precioEP = $precioEP;

    }
    public function getprecioEP(){
        return $this->precioEP;
    }    
    public function setnombreproveedorEP($nombreproveedorEP){
        $this->nombreproveedorEP = $nombreproveedorEP;

    }
    public function getnombreproveedorEP(){
        return $this->nombreproveedorEP;
    }    
    public function setnitEP($nitEP){
        $this->nitEP = $nitEP;

    }
    public function getnitEP(){
        return $this->nitEP;
    }    
    public function setcelEP($celEP){
        $this->celEP = $celEP;

    }
    public function getcelEP(){
        return $this->celEP;
    }    
    public function setdireccionproveedorEP($direccionproveedorEP){
        $this->direccionproveedorEP = $direccionproveedorEP;

    }
    public function getdireccionproveedorEP(){
        return $this->direccionproveedorEP;
    }    
    public function setcorreoproveedorEP($correoproveedorEP){
        $this->correoproveedorEP = $correoproveedorEP;

    }
    public function getcorreoproveedorEP(){
        return $this->correoproveedorEP;
    }    
    public function setobservacionesEP($observacionesEP){
        $this->observacionesEP = $observacionesEP;

    }
    public function getobservacionesEP(){
        return $this->observacionesEP;
    }


    public function entradaCreate(){
       try{
        $sql = 'INSERT INTO 
        entrada
        values
        (
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            ?
        )';
        $stmt = $this->dbh->prepare($sql);
        $stmt->bindValue(1, $this->getcodigoEP());
        $stmt->bindValue(2, $this->getproductoEP());
        $stmt->bindValue(3, $this->getmedidaEP());
        $stmt->bindValue(4, $this->getfechaEP());
        $stmt->bindValue(5, $this->getcantidadEP());  
        $stmt->bindValue(6, $this->getprecioEP());
        $stmt->bindValue(7, $this->getnombreproveedorEP());  
        $stmt->bindValue(8, $this->getnitEP());
        $stmt->bindValue(9, $this->getcelEP());  
        $stmt->bindValue(10, $this->getdireccionproveedorEP());
        $stmt->bindValue(11, $this->getcorreoproveedorEP());
        $stmt->bindValue(12, $this->getobservacionesEP());
        $stmt->execute();
       } catch(Exception $e){
        die($e->getMessage());
       }
       try{
        $sql2 ='INSERT INTO producto VALUES(
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            ?,
            null,
            null,
            null
            )';
            $stmt2 = $this->dbh->prepare($sql2);
            $stmt2->bindValue(1, $this->getcodigoEP());
            $stmt2->bindValue(2, $this->getproductoEP());
            $stmt2->bindValue(3, $this->getmedidaEP());
            $stmt2->bindValue(4, $this->getnombreproveedorEP());  
            $stmt2->bindValue(5, $this->getprecioEP());
            $stmt2->bindValue(6, $this->getcantidadEP());  
            $stmt2->bindValue(7, $this->getobservacionesEP());
            $stmt2->execute();
        }catch (Exception $e){
        die($e->getMessage());
       }
    }
    public function entradaRead(){
        try {
            $entradalist = [];
            $sql = 'SELECT * FROM entrada';
            $stmt = $this->dbh->query($sql);
            foreach($stmt->fetchAll() as $entrada) {
                $entradalist[] = new Entrada(
                    $entrada['codigo_entrada'],        
                    $entrada['nombre_producto'],
                    $entrada['medida_producto'],
                    $entrada['fecha_compra'],
                    $entrada['cantidad'],
                    $entrada['precio'],
                    $entrada['nombre_proveedor'],
                    $entrada['nit'],
                    $entrada['telefono_proveedor'],
                    $entrada['direccion_proveedor'],
                    $entrada['correo_proveedor'],
                    $entrada['observaciones_entrada']
                );
            }
            return $entradalist;
        } catch (Exception $e) {
            die($e->getMessage());
        }
}
// aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa

    public function getEntradaById($codigoEP){

    try{
            $sql = "SELECT * FROM entrada WHERE codigo_entrada=:codigoEP";
            $stmt = $this->dbh->prepare($sql);                    
            $stmt->bindValue(':codigoEP', $codigoEP);               
            $stmt->execute();
            $entradaDB=$stmt->fetch();
                $entrada = new Entrada(
                    $entradaDB['codigo_entrada'],        
                    $entradaDB['nombre_producto'],
                    $entradaDB['medida_producto'],
                    $entradaDB['fecha_compra'],
                    $entradaDB['cantidad'],
                    $entradaDB['precio'],
                    $entradaDB['nombre_proveedor'],
                    $entradaDB['nit'],
                    $entradaDB['telefono_proveedor'],
                    $entradaDB['direccion_proveedor'],
                    $entradaDB['correo_proveedor'],
                    $entradaDB['observaciones_entrada']
                );
            return $entrada;
        }
        catch (Exception $e) {
        die($e->getMessage());
        }
    }

    public function entradaUpdate(){
        try {                
            $sql = 'UPDATE entrada SET
                        nombre_producto = ?,
                        medida_producto = ?,
                        fecha_compra = ?,
                        cantidad = ?,
                        precio = ?,
                        nombre_proveedor = ?,
                        nit = ?,
                        telefono_proveedor = ?,
                        direccion_proveedor = ?,                      
                        correo_proveedor = ?,
                        observaciones_entrada = ?
                    WHERE codigo_entrada = ?';

            $stmt = $this->dbh->prepare($sql);
            $stmt->bindValue(1, $this->getproductoEP());
            $stmt->bindValue(2, $this->getmedidaEP());
            $stmt->bindValue(3, $this->getfechaEP());
            $stmt->bindValue(4, $this->getcantidadEP());  
            $stmt->bindValue(5, $this->getprecioEP());
            $stmt->bindValue(6, $this->getnombreproveedorEP());  
            $stmt->bindValue(7, $this->getnitEP());
            $stmt->bindValue(8, $this->getcelEP());  
            $stmt->bindValue(9, $this->getdireccionproveedorEP());
            $stmt->bindValue(10, $this->getcorreoproveedorEP());
            $stmt->bindValue(11, $this->getobservacionesEP());
            $stmt->bindValue(12, $this->getcodigoEP());
            $stmt->execute();

        } catch (Exception $e) {
            die($e->getMessage());
        } 
    }
    public function entradaDelete($codigoEP){
        try{
            $sql = 'DELETE from entrada WHERE codigo_entrada = :codigoEP';
            $stmt = $this->dbh->prepare($sql);                    
            $stmt->bindValue(':codigoEP', $codigoEP);               
            $stmt->execute();
        }catch (Exception $e) {
            die($e->getMessage());
        } 
    }
}
?>