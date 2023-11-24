<style type="text/css">
h1.entrarmodulos {
height:33px;
margin-left: 1px; 
font-family: verdana;
font-size: 17px;
line-height:28px;
color: #ffffff;
position:relative; 
background-color: #000000;
opacity: 0.7;
filter:alpha(opacity=70);
padding-top: 3px;
border: 1px solid #535353;
margin-bottom:3px;
border-radius:5px;
}
.themain {
 background-image:url("template/<?=$core['config']['template'] ?>/images/menu_content.jpg");
	font-size:11px;
    border: 1px solid #2a2a2a;
    border-radius: 5px;
}

.topp2 {
	font-size:11px;
	color: #FFFFFF;
	font-weight: bold;
	background-color: #000000;
    opacity: 0.8;
    filter: alpha(opacity=80);
}

.trhover1 {
    background: #292929;
    color: #b5b5b5;
    opacity: 0.8;
    filter: alpha(opacity=80);
}
.trhovereventos {
    background: #292929;
    color: #FFFFFF;
    opacity: 0.8;
    filter: alpha(opacity=80);
}
.trhover2 {
    background: #393939;
    color: #b5b5b5;
    opacity: 0.8;
    filter: alpha(opacity=80);
}
.trhover3 {
    background: #ffffff;
    color: #b5b5b5;
    opacity: 0.8;
    filter: alpha(opacity=80);
}
a:link   
{   
 text-decoration:none;   
}  
</style>
<?
////////////////////////////////////////////////////////////////////////////////
//////////////////////////////NOMBRE DE TU SERVIDOR/////////////////////////////
////////////////////////////////////////////////////////////////////////////////
$BrianRoldan['NombreMU']	=  'CalaveraMu';
////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////FIN///////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////

 if (!isset($_GET['rank'])) {
        $rank_type = 'characters';
    } elseif (isset($_GET['rank'])) {
        $rank_type = safe_input($_GET['rank'], '');
    }
    if (!isset($_GET['class'])) {
        if ($_GET['rank'] == 'guilds') {
            $rank_class_type = 'no_rank_type';
        }
    
echo '	<table align="center" width="69%" border="0" cellspacing="0" cellpadding="0">
		  <tr>
		  <td><h1 class="entrarmodulos" align="center" style="margin-top: 2px;">RANKING DEL SERVIDOR</h1></td>
		  </tr>
		  </table>	
		  <table class="themain" align="center" cellpadding="2" cellspacing="1" width="70%">
<tr><td>
          <table  width="100%" border="0" cellspacing="1" cellpadding="2">
		  	<tr>';
    switch ($rank_type) {
        case 'characters':
            echo '<td width="50%" align="center" class="trhover3"><span style="color: #999999;">RANKING GENERAL</span></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=guilds">RANKING DE CLANES</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=duelos">RANKING DUELOS</a></td>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=BLOOD">BLOOD CASTLE</a></td>
<tr>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=DEVIL">DEVIL SQUARE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=CHAOS">CHAOS CASTLE</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=HORAS">HORAS ONLINE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=ILLUSION">ILLUSION TEMPLE</a></td>
    </tr></table></td></tr></table>';
            break;
        case 'guilds':
            echo '<td width="50%" align="center" class="trhover3"><span style="color: #999999;">RANKING GENERAL</span></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=guilds">RANKING DE CLANES</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=duelos">RANKING DUELOS</a></td>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=BLOOD">BLOOD CASTLE</a></td>
<tr>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=DEVIL">DEVIL SQUARE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=CHAOS">CHAOS CASTLE</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=HORAS">HORAS ONLINE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=ILLUSION">ILLUSION TEMPLE</a></td>
    </tr></table></td></tr></table>';
            break;

        case 'BLOOD':
            echo '<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=characters">RANKING GENERAL</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=guilds">RANKING DE CLANES</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=duelos">RANKING DUELOS</a></td>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=BLOOD">BLOOD CASTLE</a></td>
<tr>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=DEVIL">DEVIL SQUARE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=CHAOS">CHAOS CASTLE</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=HORAS">HORAS ONLINE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=ILLUSION">ILLUSION TEMPLE</a></td>
    </tr></table></td></tr></table>';
            break;	
	case 'PK':
            echo '<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=characters">RANKING GENERAL</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=guilds">RANKING DE CLANES</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=duelos">RANKING DUELOS</a></td>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=BLOOD">BLOOD CASTLE</a></td>
<tr>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=DEVIL">DEVIL SQUARE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=CHAOS">CHAOS CASTLE</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=HORAS">HORAS ONLINE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=ILLUSION">ILLUSION TEMPLE</a></td>
    </tr></table></td></tr></table>';
            break;	
			
	case 'DEVIL':
            echo '<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=characters">RANKING GENERAL</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=guilds">RANKING DE CLANES</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=duelos">RANKING DUELOS</a></td>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=BLOOD">BLOOD CASTLE</a></td>
<tr>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=DEVIL">DEVIL SQUARE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=CHAOS">CHAOS CASTLE</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=HORAS">HORAS ONLINE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=ILLUSION">ILLUSION TEMPLE</a></td>
    </tr></table></td></tr></table>';
            break;	
			
	case 'CHAOS':
            echo '<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=characters">RANKING GENERAL</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=guilds">RANKING DE CLANES</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=duelos">RANKING DUELOS</a></td>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=BLOOD">BLOOD CASTLE</a></td>
<tr>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=DEVIL">DEVIL SQUARE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=CHAOS">CHAOS CASTLE</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=HORAS">HORAS ONLINE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=ILLUSION">ILLUSION TEMPLE</a></td>
    </tr></table></td></tr></table>';
            break;	
			
	case 'HORAS':
            echo '<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=characters">RANKING GENERAL</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=guilds">RANKING DE CLANES</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=duelos">RANKING DUELOS</a></td>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=BLOOD">BLOOD CASTLE</a></td>
<tr>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=DEVIL">DEVIL SQUARE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=CHAOS">CHAOS CASTLE</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=HORAS">HORAS ONLINE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=ILLUSION">ILLUSION TEMPLE</a></td>
    </tr></table></td></tr></table>';
            break;	
			
		case 'duelos':
            echo '<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=characters">RANKING GENERAL</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=guilds">RANKING DE CLANES</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=duelos">RANKING DUELOS</a></td>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=BLOOD">BLOOD CASTLE</a></td>
<tr>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=DEVIL">DEVIL SQUARE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=CHAOS">CHAOS CASTLE</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=HORAS">HORAS ONLINE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=ILLUSION">ILLUSION TEMPLE</a></td>
    </tr></table></td></tr></table>';
            break;			
			
	case 'ILLUSION':
            echo '<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=characters">RANKING GENERAL</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=guilds">RANKING DE CLANES</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=duelos">RANKING DUELOS</a></td>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=BLOOD">BLOOD CASTLE</a></td>
<tr>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=DEVIL">DEVIL SQUARE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=CHAOS">CHAOS CASTLE</a></td>
<tr>
<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=HORAS">HORAS ONLINE</a></td>
	<td width="50%" align="center" class="trhover3"><a href="' . $core_run_script . '&rank=ILLUSION">ILLUSION TEMPLE</a></td>
    </tr></table></td></tr></table>';
            break;	
    }
	
 switch ($rank_type) {
        case 'characters':
//-------------------------------------------------//
echo "

<table class=\"themain\" align=\"center\" cellpadding=\"2\" cellspacing=\"1\" width=\"70%\">
<tr><td>

          <table  width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"2\">
			<tr>
<td width='3%' align='center' class='topp2'>#</td>
<td width='10%' align='center' class='topp2'>Nombre</td>
<td width='15%' align='center' class='topp2'>Raza</td>
<td width='8%' align='center' class='topp2'>Nivel</td>
<td width='3%' align='center' class='topp2'>ML</td>
<td width='7%' align='center' class='topp2'>Resets</td>
<td width='6%' align='center' class='topp2'>Pais</td>
<td width='3%' align='center' class='topp2'>Estado</td>
<td width='3%' align='center' class='topp2'>VIP</td>
</tr>";
 //-------------------------------------------------//
$topq = mssql_query("Select ToP 25 name,clevel,class,resetcount,accountid,grand_resets from character where CtlCode = '0' order by resetcount desc, clevel desc, grand_resets desc");
for ($i = 0;$i < mssql_num_rows($topq);++$i) {
    $rank = $i + 1;
    $row = mssql_fetch_row($topq);
    if ($row[2] == 0) {
        $row[2] = "Dark Wizard";
    }
    if ($row[2] == 1) {
        $row[2] = "Soul Master";
    }
    if ($row[2] == 2) {
        $row[2] = "Grand Master";
    }
    if ($row[2] == 16) {
        $row[2] = "Dark Knight";
    }
    if ($row[2] == 17) {
        $row[2] = "Blade Knight";
    }
    if ($row[2] == 18) {
        $row[2] = "Blade Master";
    }
    if ($row[2] == 32) {
        $row[2] = "Elf";
    }
    if ($row[2] == 33) {
        $row[2] = "Muse Elf";
    }
    if ($row[2] == 34) {
        $row[2] = "High Elf";
    }
    if ($row[2] == 48) {
        $row[2] = "Magic Gladiator";
    }
    if ($row[2] == 49) {
        $row[2] = "Duel Master";
    }
    if ($row[2] == 50) {
        $row[2] = "Duel Master";
    }
    if ($row[2] == 64) {
        $row[2] = "Dark Lord";
    }
    if ($row[2] == 65) {
        $row[2] = "Lord Emperor";
    }
    if ($row[2] == 66) {
        $row[2] = "Lord Emperor";
    }
    if ($row[2] == 81) {
        $row[2] = "Blood Summoner";
    }
    if ($row[2] == 82) {
        $row[2] = "Dimesion Master";
    }
    if ($row[2] == 96) {
        $row[2] = "Rage Fighter";
    }
    if ($row[2] == 97) {
        $row[2] = "Rage Fighter";
    }
    if ($row[2] == 98) {
        $row[2] = "First Master";
    }
    $statusaq = mssql_query("select * from MEMB_STAT where memb___id='$row[4]' and connectstat='1'");
    $statusa = mssql_num_rows($statusaq);
    if ($statusa != 0) {
        $statusq = mssql_query("select GameIDC From AccountCharacter where Id='$row[4]'");
        $statusr = mssql_fetch_row($statusq);
        if ($statusr[0] == $row[0]) {
            $status = '<img src="template/'.$core['config']['template'].'/images/online.png" align="absmiddle" alt="Conectado" title="Conectado" />';
        }
    } else {
        $status = '<img src="template/'.$core['config']['template'].'/images/offline.png" align="absmiddle" alt="Desconectado" title="Desconectado" />';
    }
    $country_check = "Select country from MEMB_INFO where memb___id='$row[4]'";
    $country_reults = mssql_query($country_check);
    $country = mssql_fetch_row($country_reults);
	
	$vipquery="Select AccountLevel from MEMB_INFO where memb___id='$row[4]'";
	$vpquery=mssql_query($vipquery);
	$country_vip = mssql_fetch_row($vpquery);
	
	$masterlevel = "select MasterLevel from MasterSkillTree where name = '$row[0]'";
	$busca_ml = mssql_query($masterlevel);
	$busco_ml = mssql_fetch_row($busca_ml);
	
	if ($country_vip[0] == '0') {
            $country_vip[0] = 'X';
        }
	if ($country_vip[0] == '1') {
            $country_vip[0] = '<img src="template/'.$core['config']['template'].'/images/vip/bronze.png" align="absmiddle" alt="VIP Bronze" title="VIP Bronze" />';
        }
	if ($country_vip[0] == '2') {
            $country_vip[0] = '<img src="template/'.$core['config']['template'].'/images/vip/silver.png" align="absmiddle" alt="VIP Plata" title="VIP Plata" />';
        }
	if ($country_vip[0] == '3') {
            $country_vip[0] = '<img src="template/'.$core['config']['template'].'/images/vip/gold.png" align="absmiddle" alt="VIP Gold" title="VIP Gold" />';
        }
	
    for ($numpais = 1;$numpais <= 240;$numpais++) {
        if ($country[0] == $numpais) {
            $country[0] = '<img src="template/'.$core['config']['template'].'/images/flags/' . $numpais . '.gif">';
        }
    }
    if ($country[0] == '') {
        $country[0] = '<img src="template/'.$core['config']['template'].'/images/flags/9.gif"/>';
    }
    if ($country[0] == '0') {
        $country[0] = '<img src="template/'.$core['config']['template'].'/images/flags/9.gif"/>';
    }
	
//-------------------------------------------------//
    echo "
	<tr>
	<td width='3%' align='center' class='trhover2'>$rank</td>
	<td width='10%' align='center' class='trhover1'>$row[0]</td>
	<td width='15%' align='center' class='trhover2'>$row[2]</td>
	<td width='8%' align='center' class='trhover1'>$row[1]</td>
	<td width='3%' align='center' class='trhover1'>$busco_ml[0]</td>
    <td width='7%' align='center' class='trhover2'>$row[3]</td>
	<td width='6%' align='center' class='trhover1'>$country[0]</td>
	<td width='3%' align='center' class='trhover2'>$status</td>
	<td width='3%' align='center' class='topp2'>$country_vip[0]</td>
	</tr>
";
}
?>
  </table>
  </td></tr>
</table>
<br />
<table class="themain" align="center" cellpadding="2" cellspacing="1" width="70%"><tr>
<td align="left"><img src="template/<?=$core['config']['template'] ?>/images/00CD8000.gif" align="absmiddle" /></td>
<td align="left"><span class="Estilo3">Aqui tienes una lista de los mejores jugadores de <?=$BrianRoldan['NombreMU'];?>. <br />
No te quedes atras, y ve por el primer puesto del ranking!</b></a><br />
</span></td>
</tr></table>
<br />
<center>

</center>
                
           <?php 
            break;
        case 'guilds': 
		echo "<table class=\"themain\" align=\"center\" cellpadding=\"2\" cellspacing=\"1\" width=\"70%\">
<tr><td>

          <table  width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"2\">
			<tr>
<td width='3%' align='center' class='topp2'>#</td>
<td width='13%' align='center' class='topp2'>Clan</td>
<td width='13%' align='center' class='topp2'>Master</td>
<td width='10%' align='center' class='topp2'>Scores</td>
<td width='6%' align='center' class='topp2'>Logo</td>
</tr>";
//-------------------------------------------------//
$sql = ("select TOP 100 * from MuOnline.dbo.guild order by G_Score desc");
$ranki_i=0;
$resultado = mssql_query($sql); 
while ($mostrar = mssql_fetch_assoc($resultado)){					
$logo=urlencode(bin2hex($mostrar['G_Mark']));
$ranki_i++;
if($mostrar['G_Score'] == ''){ $mostrar['G_Score'] = '0'; }
//-------------------------------------------------//
    echo "
	<tr>
	<td width='3%'align='center' class='trhover2'>$ranki_i</td>
	<td width='13%' align='center' class='trhover1'>".$mostrar['G_Name']."</td>
	<td width='13%' align='center' class='trhover2'>".$mostrar['G_Master']."</td>
    <td width='10%' align='center' class='trhover1'>".$mostrar['G_Score']."</td>
	<td width='6%' align='center' class='trhover2'><img src='Fix BrianDesign/logo.php?decode=".$logo."' alt='Logo del Clan' title='Logo del Clan' width='17' height='17' style='border: 1px solid #2a2a2a; background-color:#000000;' align='absmiddle' /></td>
	</tr>
";
}
?>
  </table>
  </td></tr>
</table>
<br />
<table class="themain" align="center" cellpadding="2" cellspacing="1" width="70%"><tr>
<td align="left"><img src="template/<?=$core['config']['template'] ?>/images/00CD8000.gif" align="absmiddle" /></td>
<td align="left"><span class="Estilo3">Aqui tienes una lista de los mejores clanes de <?=$BrianRoldan['NombreMU'];?>.<br />
No te quedes atras, y ve por el primer puesto del ranking!</b></a><br />
</span></td>
</tr></table><br />
<center>

</center>























<?php 
            break;
               case 'BLOOD':
//-------------------------------------------------//

echo "

<table class=\"themain\" align=\"center\" cellpadding=\"2\" cellspacing=\"1\" width=\"70%\">
<tr><td>

          <table  width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"2\">
			<tr>
<td width='3%' align='center' class='topp2'>#</td>
<td width='10%' align='center' class='topp2'>Nombre</td>
<td width='15%' align='center' class='topp2'>Puntos</td>

</tr>";
 //-------------------------------------------------//
$topq = mssql_query("Select ToP 25 Name,Score from RankingBloodCastle  order by Score desc "); 
for ($i = 0;$i < mssql_num_rows($topq);++$i) {
    $rank = $i + 1;
    $row = mssql_fetch_row($topq);
//-------------------------------------------------//
    echo "
	<tr>
	<td width='3%' align='center' class='trhover2'>$rank</td>
	<td width='10%' align='center' class='trhover1'>$row[0]</td>
	<td width='15%' align='center' class='trhover2'>$row[1]</td>

	</tr>
";
}
?>
</table>
  </td></tr>
</table>
<br />
<table class="themain" align="center" cellpadding="2" cellspacing="1" width="70%"><tr>
<td align="left"><img src="template/<?=$core['config']['template'] ?>/images/00CD8000.gif" align="absmiddle" /></td>
<td align="left"><span class="Estilo3">Aqui tienes una lista de los mejores del Blood Castle de <?=$BrianRoldan['NombreMU'];?>. <br />
No te quedes atras, y ve por el primer puesto del ranking!</b></a><br />
</span></td>
</tr></table>

<?php 


            break;
               case 'DEVIL':
//-------------------------------------------------//
echo "

<table class=\"themain\" align=\"center\" cellpadding=\"2\" cellspacing=\"1\" width=\"70%\">
<tr><td>

          <table  width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"2\">
			<tr>
<td width='3%' align='center' class='topp2'>#</td>
<td width='10%' align='center' class='topp2'>Nombre</td>
<td width='15%' align='center' class='topp2'>Puntos</td>

</tr>";
 //-------------------------------------------------//
$topq = mssql_query("Select ToP 25 Name,Score from RankingDevilSquare  order by Score desc "); 
for ($i = 0;$i < mssql_num_rows($topq);++$i) {
    $rank = $i + 1;
    $row = mssql_fetch_row($topq);
//-------------------------------------------------//
    echo "
	<tr>
	<td width='3%' align='center' class='trhover2'>$rank</td>
	<td width='10%' align='center' class='trhover1'>$row[0]</td>
	<td width='15%' align='center' class='trhover2'>$row[1]</td>

	</tr>
";
}
?>
</table>
  </td></tr>
</table>
<br />
<table class="themain" align="center" cellpadding="2" cellspacing="1" width="70%"><tr>
<td align="left"><img src="template/<?=$core['config']['template'] ?>/images/00CD8000.gif" align="absmiddle" /></td>
<td align="left"><span class="Estilo3">Aqui tienes una lista de los mejores del Devil Square de <?=$BrianRoldan['NombreMU'];?>. <br />
No te quedes atras, y ve por el primer puesto del ranking!</b></a><br />
</span></td>
</tr></table>

<?php 


            break;
               case 'duelos':
//-------------------------------------------------//
echo "

<table class=\"themain\" align=\"center\" cellpadding=\"2\" cellspacing=\"1\" width=\"70%\">
<tr><td>

          <table  width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"2\">
			<tr>
<td width='3%' align='center' class='topp2'>#</td>
<td width='10%' align='center' class='topp2'>Nombre</td>
<td width='15%' align='center' class='topp2'>Ganados</td>
<td width='8%' align='center' class='topp2'>Perdidos</td>
<td width='8%' align='center' class='topp2'>Puntaje</td>
</tr>";
 //-------------------------------------------------//
$topq = mssql_query("Select ToP 25 Name,WinScore,LoseScore,Puntaje from RankingDuel where Puntaje>=0 order by Puntaje desc ");
for ($i = 0;$i < mssql_num_rows($topq);++$i) {
    $rank = $i + 1;
    $row = mssql_fetch_row($topq);
//-------------------------------------------------//
    echo "
	<tr>
	<td width='3%' align='center' class='trhover2'>$rank</td>
	<td width='10%' align='center' class='trhover1'>$row[0]</td>
	<td width='15%' align='center' class='trhover2'>$row[1]</td>
	<td width='8%' align='center' class='trhover1'>$row[2]</td>
	<td width='8%' align='center' class='trhover2'>$row[3]</td>
	</tr>
";
}
?>
</table>
  </td></tr>
</table>
<br />
<table class="themain" align="center" cellpadding="2" cellspacing="1" width="70%"><tr>
<td align="left"><img src="template/<?=$core['config']['template'] ?>/images/00CD8000.gif" align="absmiddle" /></td>
<td align="left"><span class="Estilo3">Aqui tienes una lista de los mejores guerreros de <?=$BrianRoldan['NombreMU'];?>. <br />
No te quedes atras, y ve por el primer puesto del ranking!</b></a><br />
</span></td>
</tr></table>

<?php 


            break;
               case 'CHAOS':
//-------------------------------------------------//

echo "

<table class=\"themain\" align=\"center\" cellpadding=\"2\" cellspacing=\"1\" width=\"70%\">
<tr><td>

          <table  width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"2\">
			<tr>
<td width='3%' align='center' class='topp2'>#</td>
<td width='10%' align='center' class='topp2'>Nombre</td>
<td width='15%' align='center' class='topp2'>Puntos</td>

</tr>";
 //-------------------------------------------------//
$topq = mssql_query("Select ToP 25 Name,Score from RankingChaosCastle  order by Score desc "); 
for ($i = 0;$i < mssql_num_rows($topq);++$i) {
    $rank = $i + 1;
    $row = mssql_fetch_row($topq);
//-------------------------------------------------//
    echo "
	<tr>
	<td width='3%' align='center' class='trhover2'>$rank</td>
	<td width='10%' align='center' class='trhover1'>$row[0]</td>
	<td width='15%' align='center' class='trhover2'>$row[1]</td>

	</tr>
";
}
?>
</table>
  </td></tr>
</table>
<br />
<table class="themain" align="center" cellpadding="2" cellspacing="1" width="70%"><tr>
<td align="left"><img src="template/<?=$core['config']['template'] ?>/images/00CD8000.gif" align="absmiddle" /></td>
<td align="left"><span class="Estilo3">Aqui tienes una lista de los mejores del Chaos Castle de <?=$BrianRoldan['NombreMU'];?>. <br />
No te quedes atras, y ve por el primer puesto del ranking!</b></a><br />
</span></td>
</tr></table>

<?php 


            break;
               case 'ILLUSION':
//-------------------------------------------------//
echo "

<table class=\"themain\" align=\"center\" cellpadding=\"2\" cellspacing=\"1\" width=\"70%\">
<tr><td>

          <table  width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"2\">
			<tr>
<td width='3%' align='center' class='topp2'>#</td>
<td width='10%' align='center' class='topp2'>Nombre</td>
<td width='15%' align='center' class='topp2'>Puntos</td>

</tr>";
 //-------------------------------------------------//
$topq = mssql_query("Select ToP 25 Name,Score from RankingIllusionTemple  order by Score desc "); 
for ($i = 0;$i < mssql_num_rows($topq);++$i) {
    $rank = $i + 1;
    $row = mssql_fetch_row($topq);
//-------------------------------------------------//
    echo "
	<tr>
	<td width='3%' align='center' class='trhover2'>$rank</td>
	<td width='10%' align='center' class='trhover1'>$row[0]</td>
	<td width='15%' align='center' class='trhover2'>$row[1]</td>

	</tr>
";
}
?>
</table>
  </td></tr>
</table>
<br />
<table class="themain" align="center" cellpadding="2" cellspacing="1" width="70%"><tr>
<td align="left"><img src="template/<?=$core['config']['template'] ?>/images/00CD8000.gif" align="absmiddle" /></td>
<td align="left"><span class="Estilo3">Aqui tienes una lista de los mejores del ILLUSION Temple de <?=$BrianRoldan['NombreMU'];?>. <br />
No te quedes atras, y ve por el primer puesto del ranking!</b></a><br />
</span></td>
</tr></table>

<?php 


            break;
               case 'HORAS':
//-------------------------------------------------//
echo "

<table class=\"themain\" align=\"center\" cellpadding=\"2\" cellspacing=\"1\" width=\"70%\">
<tr><td>

          <table  width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"2\">
			<tr>
<td width='3%' align='center' class='topp2'>#</td>
<td width='10%' align='center' class='topp2'>Nombre</td>
<td width='15%' align='center' class='topp2'>Conexion</td>
<td width='15%' align='center' class='topp2'>Desconexion</td>
<td width='10%' align='center' class='topp2'>Horas Online</td>

</tr>";
 //-------------------------------------------------//
$topq = mssql_query("Select ToP 25 Memb___ID,ConnectTM,DisConnectTM,OnlineHours from MEMB_STAT order by OnlineHours desc "); 
for ($i = 0;$i < mssql_num_rows($topq);++$i) {
    $rank = $i + 1;
    $row = mssql_fetch_row($topq);
//-------------------------------------------------//
    echo "
	<tr>
	<td width='3%' align='center' class='trhover2'>$rank</td>
	<td width='10%' align='center' class='trhover1'>$row[0]</td>
	<td width='15%' align='center' class='trhover2'>$row[1]</td>
	<td width='15%' align='center' class='trhover2'>$row[2]</td>
	<td width='10%' align='center' class='trhover2'>$row[3]</td>

	</tr>
";
}
?>
</table>
  </td></tr>
</table>
<br />
<table class="themain" align="center" cellpadding="2" cellspacing="1" width="70%"><tr>
<td align="left"><img src="template/<?=$core['config']['template'] ?>/images/00CD8000.gif" align="absmiddle" /></td>
<td align="left"><span class="Estilo3">Aqui tienes una lista de los mas vicios de <?=$BrianRoldan['NombreMU'];?>. <br />
No te quedes atras, y ve por el primer puesto del ranking!</b></a><br />
</span></td>
</tr></table>

<?php 


            break;
    }   
}
?>