<?php 
session_start();
require_once "admin_login_functions.php";
require_once "../loginTrait/loginTrait.php";

if(isset($_POST['login']))
{
    $login = new LoginAdmin($_POST);
    $login->setTable('admin');
    if($login->getLogin())
    {
        $login->conn = null;
        header("Location: admin_home.php");
        exit;
    }else
    {
        $login->conn = null;
        $_SESSION['error'] = 'Username/Password salah!';
        header("Location: admin_login.php");
        exit;
    }
}


?>