<?php

require_once "lesson5Class.php";

$user1 = new Task();
$user1->setUserName("Vadim");
$user1->setDescription("Task1");
var_dump($user1->getUserName());
var_dump($user1->getDescription());
var_dump($user1->getDateUpdated());
