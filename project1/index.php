<!DOCTYPE>
<html>
    <body>
        <?php

            include "init.php";

            $array['username'] = "jhon1";
            $array['password'] = "123";

            // User::action()->update_by_id($array,1);

            $data = User::action()->get_by_email("jhon@gamil.com");

            echo "<pre>";
            print_r($data);
        ?>

    </body>
</html>