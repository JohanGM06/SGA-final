<?PHP
class DataBase{
    public static function connection(){
        $hostname = "localhost:3306";
        $port = "3306";
        $database = "SGA2";
        $username = "root";
        $password = "";

        $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
  
    }
}
?>