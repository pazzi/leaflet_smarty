<?php
error_reporting(0);
require 'config/config.php';
require 'db.php';


/* ******************************************************************************************** */
/*Buscar a layer EJA */
$sql="select c.latitude, c.longitude, cu.nome as curso, c.endereco, c.nome as campi
from campi c, campi_curso cc, curso cu 
where c.id=cc.id_campi  
and cu.id=cc.id_curso 
and cc.eja=1";
$return=sql("mapv2", $sql);
while($res=mysqli_fetch_array($return))
{
    $eja[]=$res;
}

$sql="select c.latitude, c.longitude, cu.nome as curso, c.endereco 
from campi c, campi_curso cc, curso cu, modalidade m 
where c.id=cc.id_campi 
and cu.id=cc.id_curso 
and cc.modalidade=m.id
and m.descricao='EAD'";
$return=sql("mapv2", $sql);
while($res=mysqli_fetch_array($return))
{
    $ead[]=$res;
}

$sql="select c.latitude, c.longitude, cu.nome as curso, c.endereco 
from campi c, campi_curso cc, curso cu, modalidade m 
where c.id=cc.id_campi 
and cu.id=cc.id_curso 
and cc.modalidade=m.id
and m.descricao='EAD e Presencial'";
$return=sql("mapv2", $sql);
while($res=mysqli_fetch_array($return))
{
    $eadPresencial[]=$res;
}

$sql="select c.latitude, c.longitude, cu.nome as curso, c.endereco 
from campi c, campi_curso cc, curso cu, modalidade m 
where c.id=cc.id_campi 
and cu.id=cc.id_curso 
and cc.modalidade=m.id
and m.descricao='Presencial'";
$return=sql("mapv2", $sql);
while($res=mysqli_fetch_array($return))
{
    $presencial[]=$res;
}


//$f_status_modalidade="active";
$sql="select * from campi order by nome";
$return=sql("mapv2", $sql);
while($res=mysqli_fetch_array($return))
{
    $m_todos[]=$res;
}

/* ******************************************************************************************** */



/*

$sql="select * from curso order by nome";
$return=sql("map", $sql);
while($res=mysqli_fetch_array($return))
{
    $cursos[]=$res;
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

if($_GET['id'])
{
        $sql="select * from markers m, curso c, tab_curso t where  c.id_cidade='".$GET['id']."' and t.id_curso=c.id order by c.nome";
        $return=sql("map", $sql);
        while($res=mysqli_fetch_array($return))
        {
            $m_geral[]=$res;
        }
}
  

*/

$titulo="Cartografia Digital";
$lat="-22.3";
$lon="-48.4 ";

$smarty->assign('descricao', $descricao);
$smarty->assign('m_parte',$m_parte);
$smarty->assign('modalidade', $modalidade);
$smarty->assign('curso', $curso);
$smarty->assign('cursos', $cursos);
$smarty->assign('titulo',$titulo);
$smarty->assign('f_status_modalidade',$f_status_modalidade);
$smarty->assign('lat',$lat);
$smarty->assign('lon',$lon);
$smarty->assign('geral', $m_geral);

$smarty->assign('campi', $m_todos);
$smarty->assign('eja', $eja);
$smarty->assign('ead', $ead);
$smarty->assign('eadPresencial', $eadPresencial);
$smarty->assign('presencial', $presencial);
$smarty->display('index.tpl');
