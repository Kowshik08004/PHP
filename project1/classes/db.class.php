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
                self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo $e->getMessage();
                die;
            }
        }

        return self::$instance;
    }

    protected function run($values = array())
    {
        $stm = self::$con->prepare($this->query);
        $check = $stm->execute($values);
        if($check)
        {
            $data = $stm->fetchALL(PDO::FETCH_OBJ);
            if(is_array($data) && count($data) > 0)
            {
                return $data;
            }
        }

        return false;
    }

    public function all()
    {
        return $this->run(); 
    }

    public function where($where, $values = array())
    {
        $this->query .= "where " .$where;
        return $this->run($values); 
    }

    public function select()
    {
        $this->query = "select * from " . self::$table  . " ";
        return self::$instance;
    }

    public function update()
    {
        return self::$instance;
    }
}