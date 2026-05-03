<!DOCTYPE>
<html>
    <body>
        <?php

            include "init.php";

            $data = User::action()->get_all();

            echo "<pre>";
            print_r($data);
        ?>

    </body>
</html>