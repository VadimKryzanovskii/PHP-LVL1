<?php

$arrNamber = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function isNum(array $arrNum): array 
{
    return $arrNumStructur = [
        'numMax' => max($arrNum),
        'numMin' => min($arrNum),
        'numAvg' => array_sum($arrNum) / count($arrNum)
    ];
};

print_r(isNum($arrNamber));