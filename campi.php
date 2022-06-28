<?php
error_reporting(0);
require 'config/config.php';
require 'db.php';

if($_GET['id'])
{
    
    $nome=$_GET['nome'];
        $sql="select m.nome as nomeCampi, m.endereco as endereco, c.nome as curso, f.descricao as tipo, md.descricao as modalidade, pd.descricao as periodo
        from campi m, curso c, campi_curso t, tipo f, modalidade md, periodo pd 
        where  t.id_campi='".$_GET['id']."' 
        and t.id_curso=c.id  
        and m.id=t.id_campi
        and md.id=t.modalidade 
        and pd.id=t.periodo
        and f.id=t.tipo 
        order by f.descricao, c.nome";

        $return=sql("mapv2", $sql);
        while($res=mysqli_fetch_array($return))
        {
            $m_geral[]=$res;
        }
    
        $lat=$_GET['lat'];
        $lon=$_GET['lon'];
     
        
        $sql="select cidade from campi";
        $return=sql("mapv2", $sql);
        while($res=mysqli_fetch_array($return))
            {
                $campi[]=$res;
            }
    
}
    
$titulo="Cartografia Digital";
$smarty->assign('geral', $m_geral);
$smarty->assign('campi', $campi);
$smarty->assign('nome', $nome);
$smarty->assign('lat', $lat);
$smarty->assign('lon', $lon);
$smarty->display('campi.tpl');
