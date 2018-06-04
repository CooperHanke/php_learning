<?php
function paramTest($paramA, $paramB) {
    echo "Param A is: {$paramA}\n";
    echo "Param B is: {$paramB}\n";
}

$param1 = "Hello";
$param2 = "Y'all!";

echo paramTest($param1, $param2);

?>