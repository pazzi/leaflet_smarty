<?php
error_reporting(0);
session_start();
require 'config/config.php';

if($_POST['login']=="Login"){
if(($_POST['username'] == "admin")  AND ($_POST['passwd'] == "admin"))
{
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["passwd"] = $_POST['passwd'];

    header("Location:inicio.php");

}
else{
    $smarty->assign('msg', "Usuário e senha inválidos");
}
}
$smarty->display("session.tpl");
?>


