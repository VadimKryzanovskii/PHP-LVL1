<?php

$arrNamber = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$isNamber = function ($namber) {  
return $namber % 2 == 0 ? "Четное" : "Нечетное";
};

$listNamber = array_map($isNamber , $arrNamber);

print_r($listNamber);