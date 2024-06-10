<?php 

namespace App\Database;

use PDO;
class Connection{
    private static $instance;

    public static function getInstance(){
        try{
            if (!isset(self::$instance)){
                self::$instance = new \PDO('pgsql:host=localhost;dbname=livaria', 'postgres', 'root');
                
                self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }
            return self::$instance;
        } catch (\PDOException $e) {
            echo "Erro na conexão: " . $e->getMessage();

            return null;
        }
    }
}

?>