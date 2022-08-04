<?php
// Домашнее задание к первому уроку.

$userName = readline("Привет, как тебя зовут?\n");
$userAge = readline("Сколько вам лет?\n");
$task1 = readline("Какая задача стоит перед вами сегодня?\n"); // Сдесь можно было вопрос поместить в отдельную переменную
(int)$taskTime1 = readline("Сколько времени эта задача займет?\n") . "ч";
$task2 = readline("Какая задача стоит перед вами сегодня?\n");
(int)$taskTime2 = readline("Сколько времени эта задача займет?\n") . "ч";
$task3 = readline("Какая задача стоит перед вами сегодня?\n");
(int)$taskTime3 = readline("Сколько времени эта задача займет?\n") . "ч";
(int)$sumTaskTime = ($taskTime1 + $taskTime2 + $taskTime3) . "ч";

echo "Вас зовут $userName, вам $userAge
$userName, сегодня у вас запланировано 3 приоритетных задачи на день:
- $task1 ($taskTime1)\n  
- $task2 ($taskTime2)\n
- $task3 ($taskTime3)\n
Примерное время выполнения плана = $sumTaskTime\n";