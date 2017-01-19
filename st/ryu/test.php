<?php
require("../../top.php");

function f($req, $opt = null, ...$params) {
    // $params is an array containing the remaining arguments.
    printf('$req: %d; $opt: %d; number of params: %d'."\n",
        $req, $opt, count($params));
    var_dump($params);
    echo implode( ', ' , $params);
}

f(1, 2, 3, 4, 5);