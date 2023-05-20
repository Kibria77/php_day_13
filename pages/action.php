<?php

require_once '../vendor/autoload.php';
use App\classes\User;

if (isset($_POST['btn']))
{
    $user   = new User($_POST);
    $result = $user->makeSeries();
    include 'index.php';
}
else
{
    header('Location: index.php');
}
