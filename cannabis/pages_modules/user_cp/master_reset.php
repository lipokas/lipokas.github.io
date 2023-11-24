<!--Modulo Por M4NU31-->
<?php
$Level='250';             //Level necesario para hacer el reset
?>
<style type="text/css">
<!--
.Estilo1 {color: #00FF33}
.Estilo2 {color: #FF9900}
-->
</style>


<fieldset>
<legend><strong>Resetear Master Skill Tree</strong></legend>
<p align="center"><img src="http://i.imgur.com/qsCh6cS.png" width="549" height="160" /></p>
<center>
  <p><strong>Se pondra tu arbol de habilidades todo en 0, tu <span class="Estilo2">MasterLevel 1</span> y con <span class="Estilo2">249 puntos</span> para distribuirlos</strong><br>
    <strong>1.</strong> Tu personaje debe ser <span class="Estilo2">MasterLevel 1</span><br>
    <strong>2.</strong> Tu personaje debe estar <span class="Estilo2">desconectado</span> </p>
  <p><strong><span class="Estilo1">Personaje</span>:</strong>
    <?
		$pj_list=mssql_query("SELECT Name FROM Character WHERE AccountID='$user_auth_id'");
echo '<form action="" method="post"><select name="pj">';
while($result=mssql_fetch_assoc($pj_list)){
    echo '<option value="'.$result['Name'].'">'.$result['Name'].'</option>';
}
echo '<input type="submit" name="Resetear" value="Resetear" /></select></form>';

		?></p>
  <p>Module Adapted <span class="Estilo2">By  M4NU31</span><br />
  Modulo Actualizado  por <span class="Estilo2">Azzlaer</span> para Files <span class="Estilo2">MU Emu</span><br />
    www.tuservermu.com.ve
</p>
</center></fieldset>
<fieldset>
<legend><strong>Publicidad</strong></legend>
<p><script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- nemesis -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-6810315420985813"
     data-ad-slot="2767614986"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script></p>
</fieldset>


<?php


$res=mssql_connect($core['db_host'],$core['db_user'],$core['db_password']);
mssql_select_db($core['db_name'],$res);



if(!empty($_POST['pj'])){
    $nombre=safe_input($_POST['pj'],'');
}

$sql_vip_check = $core_db -> Execute("SELECT ConnectStat from MEMB_STAT");
$vip_check = $sql_vip_check->numrows();
$ConnectStat = $sql_vip_check->fetchrow();
if($ConnectStat[1] == '1'){


echo die("<script>alert('Tienes que estar desconectado del juego para acceder a este modulo!!'); 
		location='javascript:history.back()'</script>");
}else{

$query=mssql_query("SELECT MasterLevel from MasterSkillTree WHERE Name='$nombre'");
while($row=mssql_fetch_assoc($query)){
$levelz=$row['MasterLevel'];

  if($levelz < $Level){
   echo die("<script>alert('Tu personaje debe ser MasterLevel $Level, tu personaje es nivel $levelz');
location='javascript:history.back()'</script>");
 
}else{


$reset=mssql_query("Update MasterSkillTree set  [MasterLevel]='1', [MasterPoint]='249', [MasterSkill]=NULL, [MasterExperience]=NULL where Name='$nombre'");
$reset=mssql_query("Update Character set [MagicList]=CONVERT(varbinary(180) where Name='$nombre'");


echo die("<script>alert('Has utilizado el Master Level reset, tu personaje $nombre, ah sido reseteado con exito');
	</script>");

}
}
 }
?>