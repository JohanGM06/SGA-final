<?PHP
class DataBase
{
    
    public static function connection(){            
        $hostname = "sgaproyecto2023.mysql.database.azure.com";
        $port = "3306";
        $database = "sgaproyecto2023";
        $username = "zac";
        $password = "Qwertyuiop123456.";
        $options = array(
            PDO::MYSQL_ATTR_SSL_CA => 'assets/DigiCertGlobalRootCA.crt.pem'
        );
        $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password,$options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
}

    // public static function connection()
    // {
    //     $hostname = "localhost:3306";
    //     $port = "3306";
    //     $database = "SGA2";
    //     $username = "root";
    //     $password = "";

    //     $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8", $username, $password);
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     return $pdo;

    // }

?>