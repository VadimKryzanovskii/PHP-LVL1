<?php
// Задание #1

$question =  "В каком году была основана компания \"SpaceX\"?\n 1995 2002 2010\n";
$trueAnswer = (int)2002;
$userAnswer = readline($question);

while ($userAnswer != 1995 && $userAnswer != 2002 && $userAnswer != 2010) {
    echo "Введите пожалуйста ответ и 3х предложеных\n";
    $userAnswer = readline($question);
}
if ($userAnswer == 2002) echo "Поздравляю, это верный ответ! Вы наверно тоже фанат космоса!\n";
else echo "Ответ не верный. Правильный ответ 2002\n";

// Задание #2

placeToReturn:
$userTask = array();
$userTaskTime = array();
$sumTaskTime = 0;
$userNamberTask = readline("Сколько задач вы запланировали на сегодня?\n");

if ($userNamberTask > 0 ) {
    for ($i = $userNamberTask; $i > 0; $i-- ) {
        $namberTask = $userNamberTask - ($i-1);
        $userTask[$namberTask] = readline("Какая задача #{$namberTask}?");
        $userTaskTime[$namberTask] = (readline ("Сколько времени займет задача?"));
        //если данную задачу можно сделать без массива, покажите пример
    }
    print ("Cегодня у вас запланировано $userNamberTask приоритетных задачи на день:\n");

    for ($i = $userNamberTask; $i > 0; $i-- ){
        $namberTask = $userNamberTask - ($i-1);
        $sumTaskTime += $userTaskTime[$namberTask];
        print ("-{$userTask[$namberTask]}({$userTaskTime[$namberTask]}ч)\n");
         
    }
    print ("Примерное время выполнения плана = {$sumTaskTime}ч\n"); 
    }
else {
    print "Вы ввели не число или оно меньше и равно нулю\n";
    goto placeToReturn; 
}

//Задание №3

placeToReturn1:
$userNamber = readline("Введите число для начала счета\n");

if ($userNamber > 0) {
    $userNamberRemainder = $userNamber % 8;
    switch ($userNamberRemainder){
        case 0 : echo "2\n";
        break;
        case 1 : echo "1\n";
        break;
        case 2 : echo "2\n";
        break;
        case 3 : echo "3\n";
        break;
        case 4 : echo "4\n";
        break;
        case 5 : echo "5\n";
        break;
        case 6 : echo "4\n";
        break;
        case 7 : echo "3\n";
        break;
    }
}
else {
    print "Вы ввели не число или оно меньше и равно нулю\n";
    goto placeToReturn1;
}
