<?php

require_once 'models/my-class-classic.php';
require_once 'interfaces/my-interface-classic.php';
require_once 'class/my-database-classic.php';

$user = new Users();
$user->setName('Michel');
$user->setAge(31);

$user2 = new Users();
$user2->setName('Ádila');
$user2->setAge(29);

$myDatabaseClassic = MyDatabaseClassic::getInstance();
$myDatabaseClassic->add($user);
$myDatabaseClassic->add($user2);
$myDatabaseClassic->show();