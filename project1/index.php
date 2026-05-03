<!DOCTYPE>
<html>
    <body>
        <?php

            include "init.php";

            // $data = DB::table('user')->select()->all();
            $data = DB::table('user')->select()->where("id = :id",["id" => 1]);

            echo "<pre>";
            print_r($data);
        ?>

    </body>
</html>