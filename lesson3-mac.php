<?php 
//Задание №1
$arrNamber1 = [1,2,3,4,5,6,7,8,9,10];
$arrNamber2 = [1,2,3,4,5,6,7,8,9,10];
$arrMultiNamber = [];

for ($i = 0; $i < count($arrNamber1); $i++){
    $arrMultiNamber[] = $arrNamber1[$i] * $arrNamber2[$i];
    
}
print_r($arrMultiNamber);

//Задание №2
$textWish1 = ["cчастья","здоровья","успеха","любви","удачи"];
$textWish2 = ["большой","невероятной","крепкого"];
$userName = readline("Как вас зовут?");

for ($i = 0; $i < 3; $i++){
    $textWishRand[] = $textWish2[array_rand($textWish2)]." ". $textWish1[array_rand($textWish1)];
}
print_r($textWishRand);

$text = implode(', ', $textWishRand);
echo "Дорогой $userName , от всего сердца поздравляю тебя с днем рожденья и желаю, $text";
