<?php

include "init.php";

$data = DB::TABLE('users')->select()->all();

echo "<pre>";
print_r($data);