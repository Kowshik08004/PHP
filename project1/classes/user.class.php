<?php

    class User 
    {
        protected static $instance;

        public static function action()
        {
            if(!self::$instance)
            {
                self::$instance = new self();
            }

            return self::$instance;
        }

        public function create()
        {

        }

        public function update_by_id($values, $id)
        {
            return DB::table('user')->update($values)->where("id = :id",["id" => $id]);
        }

        public function get_all()
        {
            return DB::table('user')->select()->all();
        }

        // public function get_by_id($id)
        // {
        //     return DB::table('user')->select()->where("id = :id",["id" => $id]);
        // }

        // public function get_by_email($email)
        // {
        //     return DB::table('user')->select()->where("email = :email",["email" => $email]);
        // }

        //replaced get_by_id() & get_by_email() method
        public function __call($function, $param)
        {
            $values = $param[0];
            $column = str_replace("get_by_", "", $function);
            $column = addslashes($column);

            return DB::table('user')->select()->where($column . "=:" .$column ,[$column => $values]);
        }
    }