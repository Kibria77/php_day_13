<?php

require_once 'vendor/autoload.php';
use App\classes\User;

$user = new User();
$user->makeSeries();
$user->index();