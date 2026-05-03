<!DOCTYPE>
<html>
    <body>
        <?php

            include "init.php";

            $data = DB::table('user')->select()->all();

            echo "<pre>";
            print_r($data);
        ?>

    </body>
</html>