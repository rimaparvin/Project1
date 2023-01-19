<?php
session_start();

function checkLogin()
{
    if ($_SESSION['login'] == false) {
        header('location: ./login.php');
    }
}

checkLogin();


function userName($pageName): void
{
    echo $_SESSION['name'] . ' You are in ' . $pageName . ' page';
}