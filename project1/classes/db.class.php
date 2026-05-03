<?php 

class DB {
    protected static $instance;
    protected static $con;
    protected static $table;
    protected $query;
    protected $query_type;

    public static function table($table){
        
        self::$table = $table;

        if(!self::$instance)
        {
            self::$instance = new self();
        }

        if(!self::$con)
        {
            try {
                $string = "mysql:host=" .DBHOST. ";dbname=" .DBNAME;
                self::$con = new PDO($string, DBUSER, DBPASS);
            } catch (PDOException $e) {
                $e->getMessage();
                die;
            }
        }

        return self::$instance;
    }

    protected function run(){

    }

    public function all(){

    }

    public function where(){

    }

    public function select(){

    }

    public function update(){

    }
}