<?php
error_reporting(0);
require 'config/config.php';
require 'db.php';


$f_status_modalidade="active";
$sql="select * from markers order by name";
$return=sql("map", $sql);
while($res=mysqli_fetch_array($return))
{
    $m_todos[]=$res;
}


$sql="select * from fic order by descricao";
$return=sql("map", $sql);
while($res=mysqli_fetch_array($return))
{
    $modalidade[]=$res;
}

if($_POST['escolher']=="Escolher")
    {
        $f_status_modalidade="disabled";
        $sql="select * from curso where fic='".$_POST['modalidade']. "' order by nome";
        $return=sql("map", $sql);
        while($res=mysqli_fetch_array($return))
        {
            $curso[]=$res;
        }
}

if($_POST['escolher_curso']=="Escolher")
    {
        $f_status_modalidade="deactivate";
        $sql="select nome from curso where id='".$_POST['curso']."'";
        $return=sql("map", $sql);
        while($res=mysqli_fetch_assoc($return))
        {
            $nome_curso=$res['nome'];
        }
        $descricao ="Campus que oferecem o curso ".$nome_curso. ":";

        $sql="select * from markers m, tab_curso t where t.id_curso='".$_POST['curso']. "' and t.id_cidade=m.id order by m.name";
        $return=sql("map", $sql);
        while($res=mysqli_fetch_array($return))
        {
            $m_parte[]=$res;
        }
    }

$titulo="Cartografia Digital";
$lat="-22.02485";
$lon="-48.16628";
$smarty->assign('descricao', $descricao);
$smarty->assign('m_parte',$m_parte);
$smarty->assign('modalidade', $modalidade);
$smarty->assign('curso', $curso);
$smarty->assign('titulo',$titulo);
$smarty->assign('f_status_modalidade',$f_status_modalidade);
$smarty->assign('lat',$lat);
$smarty->assign('lon',$lon);
$smarty->display('index.tpl');
?>
