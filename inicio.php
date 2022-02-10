<?php
error_reporting(0);
session_start();
require 'config/config.php';


if(empty($_SESSION['username']) AND empty($_SESSION['passwd'])){

    header ("Location:session.php");

}else{

    if($_GET['act'] == 'logout'){
        session_destroy();
        header ("Location:session.php");
    }
    $smarty->display('inicio.tpl');
}
?>