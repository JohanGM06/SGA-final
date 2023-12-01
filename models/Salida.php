<?php 
class Salida{
    private $dbh;
    public $codigoS;
    public $productoS;
    public $medidaS;
    public $fechaS;
    public $cantidadS;
    public $tipoidS;
    public $numidS;
    public $nombresS;
    public $celS;
    public $direccionS;
    public $coreoS;
    public $observacionesS;

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
    public function __construct12($codigoS,$productoS,$medidaS,$fechaS,$cantidadS,$tipoidS,$numidS,
    $nombresS,$celS,$direccionS,$coreoS,$observacionesS)
    {
      $this->codigoS = $codigoS;
      $this->productoS = $productoS;
      $this->medidaS = $medidaS;
      $this->fechaS = $fechaS;
      $this->cantidadS = $cantidadS;
      $this->tipoidS = $tipoidS;
      $this->numidS = $numidS;
      $this->nombresS = $nombresS;
      $this->celS = $celS;
      $this->direccionS = $direccionS;
      $this->coreoS = $coreoS;
      $this->observacionesS = $observacionesS;
    }
    public function setcodigoS($codigoS){
        $this->codigoS = $codigoS;

    }
    public function getcodigoS(){
        return $this->codigoS;
    }
    public function setproductoS($productoS){
        $this->productoS = $productoS;

    }
    public function getproductoS(){
        return $this->productoS;
    }    
    public function setmedidaS($medidaS){
        $this->medidaS = $medidaS;

    }
    public function getmedidaS(){
        return $this->medidaS;
    }    
    public function setfechaS($fechaS){
        $this->fechaS = $fechaS;

    }
    public function getfechaS(){
        return $this->fechaS;
    }    
    public function setcantidadS($cantidadS){
        $this->cantidadS = $cantidadS;

    }
    public function getcantidadS(){
        return $this->cantidadS;
    }    
    public function settipoidS($tipoidS){
        $this->tipoidS = $tipoidS;

    }
    public function gettipoidS(){
        return $this->tipoidS;
    }    
    public function setnumidS($numidS){
        $this->numidS = $numidS;

    }
    public function getnumidS(){
        return $this->numidS;
    }    
    public function setnombresS($nombresS){
        $this->nombresS = $nombresS;

    }
    public function getnombresS(){
        return $this->nombresS;
    }    
    public function setcelS($celS){
        $this->celS = $celS;

    }
    public function getcelS(){
        return $this->celS;
    }    
    public function setdireccionS($direccionS){
        $this->direccionS = $direccionS;

    }
    public function getdireccionS(){
        return $this->direccionS;
    }    
    public function setcoreoS($coreoS){
        $this->coreoS = $coreoS;

    }
    public function getcoreoS(){
        return $this->coreoS;
    }    
    public function setobservacionesS($observacionesS){
        $this->observacionesS = $observacionesS;

    }
    public function getobservacionesS(){
        return $this->observacionesS;
    }
    public function salidaCreate(){
        try{
        $sql = 'INSERT INTO salida values (
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
            $stmt =$this->dbh->prepare($sql);
            $stmt->bindValue(1,$this->getcodigoS());
            $stmt->bindValue(2,$this->getproductoS());
            $stmt->bindValue(3,$this->getmedidaS());
            $stmt->bindValue(4,$this->getfechaS());
            $stmt->bindValue(5,$this->getcantidadS());
            $stmt->bindValue(6,$this->getobservacionesS());
            $stmt->bindValue(7,$this->gettipoidS());
            $stmt->bindValue(8,$this->getnumidS());
            $stmt->bindValue(9,$this->getnombresS());
            $stmt->bindValue(10,$this->getcelS());
            $stmt->bindValue(11,$this->getdireccionS());
            $stmt->bindValue(12,$this->getcoreoS());
            $stmt->execute();
        }catch(Exception $e){
            die($e->getMessage());
        }
        // try{
        //     $sql2 = 'UPDATE producto SET 
        //     cantidad = (cantidad-(?)) 
        //     WHERE 
        //     nombre_producto = ? and
        //     medida_producto = ?';
        //     $stmt2= $this->dbh->prepare($sql2);
        //     $stmt2->bindValue(1,$this->getcantidadS());
        //     $stmt2->bindValue(2,$this->getproductoS());
        //     $stmt2->bindValue(3,$this->getmedidaS());
        //     $stmt2->execute();
        // }catch (Exception $e){
        // die($e->getMessage());
        // }
        } 
     public function salidaRead(){
        try{
            $salidalist = [];
            $sql='SELECT * FROM salida';
            $stmt = $this->dbh->query($sql);
            foreach($stmt->fetchAll() as $salida){
                $salidalist[] = new Salida(
                $salida['codigo_salida'],
                $salida['nombre_producto'],
                $salida['medida_producto'],
                $salida['fecha'],
                $salida['cantidad'],
                $salida['observaciones_salida'],
                $salida['tipo_id'],
                $salida['num_id'],
                $salida['nombre_cliente'],
                $salida['telefono_cliente'],
                $salida['direccion_cliente'],
                $salida['correo_cliente']
                );
            }
            return $salidalist;
        }catch (Exception $e){
            die($e->getMessage());
            }
        }
    public function getSalidaById($codigoS){

    try{
            $sql = "SELECT * FROM salida WHERE codigo_salida =:codigoS";
            $stmt = $this->dbh->prepare($sql);                    
            $stmt->bindValue(':codigoS', $codigoS);               
            $stmt->execute();
            $salidaDB=$stmt->fetch();
                $salida = new Salida(                                                                                                           
                    $salidaDB['codigo_salida'],
                    $salidaDB['nombre_producto'],
                    $salidaDB['medida_producto'],
                    $salidaDB['fecha'],
                    $salidaDB['cantidad'],
                    $salidaDB['observaciones_salida'],
                    $salidaDB['tipo_id'],
                    $salidaDB['num_id'],
                    $salidaDB['nombre_cliente'],
                    $salidaDB['telefono_cliente'],
                    $salidaDB['direccion_cliente'],
                    $salidaDB['correo_cliente']
                );
            return $salida;
        }
        catch (Exception $e) {
        die($e->getMessage());
        }
    }     
    public function salidaUpdate(){
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
            $stmt =$this->dbh->prepare($sql);
            $stmt->bindValue(1,$this->getcodigoS());
            $stmt->bindValue(2,$this->getproductoS());
            $stmt->bindValue(3,$this->getmedidaS());
            $stmt->bindValue(4,$this->getfechaS());
            $stmt->bindValue(5,$this->getcantidadS());
            $stmt->bindValue(6,$this->gettipoidS());
            $stmt->bindValue(7,$this->getnumidS());
            $stmt->bindValue(8,$this->getnombresS());
            $stmt->bindValue(9,$this->getcelS());
            $stmt->bindValue(10,$this->getdireccionS());
            $stmt->bindValue(11,$this->getcoreoS());
            $stmt->bindValue(12,$this->getobservacionesS());
            $stmt->execute();

        } catch (Exception $e) {
            die($e->getMessage());
        } 
    }
    public function salidaDelete($codigoS){
        try{
            $sql = 'DELETE from salida WHERE codigo_salida =:codigoS';
            $stmt = $this->dbh->prepare($sql);                    
            $stmt->bindValue(':codigoS', $codigoS);               
            $stmt->execute();
            echo "eliminado";
        }catch (Exception $e) {
            die($e->getMessage());
        } 
    }

}
?>