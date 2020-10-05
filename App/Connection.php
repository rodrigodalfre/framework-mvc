<?php

namespace App;

class Connection {

    //Metodos static não é necessário criar uma classe, basta usar a referencia. Connection::getDb()
    public static function getDb() {
        try {
            $conn = new \PDO(
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                "root",
                ""
            );    
        
            return $conn;
        } catch (\PDOException $e) {
           # ... code
        }
    }


}

?>