<?php
$x=[1, 4, 5, 7, 12];

usort($x, function ($e1, $e2){

    return $e2<=>$e1;

});
foreach ($x as $index =>$value){
    echo "$index -> $value <br/>";
}