 <?php


// DBConfig\Db.php singleton class

class Db
{
    private static $instance = null;
    private $connection;

    private function __construct()
    {
        $this->connection = new \PDO("mysql:host=localhost;dbname=restaurant", "root", "");
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Db();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
