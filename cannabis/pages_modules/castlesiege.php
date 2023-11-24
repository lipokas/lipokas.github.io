<style type="text/css">
h1.entrarmodulos {
height:29px;
margin-left: 1px; 
font-family: verdana;
font-size: 17px;
line-height:28px;
color: #ffffff;
position:relative; 
background-color: #000000;
opacity: 0.7;
filter:alpha(opacity=70);
padding-top: 1px;
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

.topp1 {
	font-size:11px;
	color: #FFFFFF;
	font-weight: bold;
	background-color: #000000;
        opacity: 0.8;
        filter: alpha(opacity=80);
}

.topp2 {
	font-size:11px;
	color: #FFFFFF;
	font-weight: bold;
	background-color: #000000;
        opacity: 0.8;
        filter: alpha(opacity=80);
}

.topp3 {
	font-size:11px;
	color: #FFFFFF;
	font-weight: bold;
	background-color: #D6D6D6;
        opacity: 0.8;
        filter: alpha(opacity=80);
}
.toptexto {
	font-size:12px;
	font-variant:small-caps;
	color: #FFFFFF;
	font-weight: normal;
    opacity: 0.8;
    filter: alpha(opacity=80);
}
.trhover1 {
        background: #292929;
        color: #b5b5b5;
        opacity: 0.8;
        filter: alpha(opacity=80);
}

.trhover2 {
        background: #393939;
        color: #b5b5b5;
        opacity: 0.8;
        filter: alpha(opacity=80);
}
.BrianDesign {
        background: #393939;
        color: #b5b5b5;
        opacity: 0.8;
        filter: alpha(opacity=80);
		width: auto;}

.trhover3 {
        background: #494949;
        color: #b5b5b5;
        line-height:12px;
        font-size:10px;
        opacity: 0.8;
        filter: alpha(opacity=80);
}

.themain0 {
    background-image:url("template/<?=$core['config']['template'] ?>/images/main0bg.jpg");
    background-color: #000000;
	color: #FFFFFF;
	font-size:11px;
	border-left: 1px solid #2a2a2a;
	border-right: 1px solid #2a2a2a;
	border-top: 1px solid #2a2a2a;
    border-radius: 5px;
}

.themain3 {
    background-image:url("template/<?=$core['config']['template'] ?>/images/main1bg.jpg");
    background-color: #000000;
	color: #CCCCCC;
	font-size:14px;
	border-left: 1px solid #2a2a2a;
	border-right: 1px solid #2a2a2a;
	border-top: 1px solid #2a2a2a;
    border-radius: 5px;
}

div#toptexto {
	font-size:16px;
	color: #FFFFFF;
	font-weight: bold;
    opacity: 0.8;
    filter: alpha(opacity=80);
}

.themain4 {
    background-image:url("template/<?=$core['config']['template'] ?>/images/menu_content.jpg");
	font-size:11px;
    border: 1px solid #2a2a2a;
    border-radius: 5px;
    opacity: 0.7;
    filter: alpha(opacity=70);
}
</style>
<?php

////////////////////////////////////////////////////////////////////////////////
///////////////////////////////FECHA DEL CASTLE SIEGE///////////////////////////
////////////////////////////////////////////////////////////////////////////////

$FECHAS	=  'Domingo 22/05/2016 a las 21:00hs';

////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////INFORMACION///////////////////////////////////
////////////////////////////////////////////////////////////////////////////////

$Dinero        =       '325,200,000 de Zen';

$Maquina      =       '0%';

$Tiendas       =       '0%';

$Impuestos     =       '300,000 de Zen';

////////////////////////////////////////////////////////////////////////////////
//////////////////////////PROGRAMADO POR BRIAN DESIGN///////////////////////////
////////////////////////////////////////////////////////////////////////////////
?>
		 
	</br>	
<div align="center" class="alert alert-success"><font size="+3"><i class="fa fa-shield" aria-hidden="true"></i>&nbsp;PR&Oacute;XIMA BATALLA: 
<b><font color="#2a2a2a"><?=$FECHAS;?></font> a las <font color="#2a2a2a">22:00hs</b></font></font></div>


<?
$SiegeInfo = mssql_fetch_row(mssql_query("SELECT OWNER_GUILD,MONEY,TAX_RATE_CHAOS,TAX_RATE_STORE,TAX_HUNT_ZONE,SIEGE_START_DATE,SIEGE_END_DATE FROM MuCastle_DATA"));
			$GuilDueño = $SiegeInfo[0];
			$Money = $SiegeInfo[1];
			$Chaos = $SiegeInfo[2];
			$Store = $SiegeInfo[3];
			$Hunt = $SiegeInfo[4];
			
$GuildInfo = mssql_fetch_row(mssql_query("SELECT G_Master,G_Mark,G_Score,G_Name FROM Guild WHERE G_Name = (SELECT OWNER_GUILD FROM MuCastle_DATA)")); 
			$MasterGuild = $GuildInfo[0]; 
			$LogoGuild = urlencode(bin2hex($GuildInfo[1]));
			$ScoreGuild = $GuildInfo[2]; 
			
$MasterInfo = mssql_fetch_row(mssql_query("SELECT Resets,cLevel,AccountID FROM Character WHERE Name='".$MasterGuild."'")); 
			$AccountMaster = $MasterInfo[2];
			
$NivelMasterInfo = mssql_fetch_row(mssql_query("SELECT $TablaNivelMaster FROM Character WHERE Name='".$MasterGuild."'")); 
			$NivelMaster = $NivelMasterInfo[0];
 
				$country_check = "Select country from MEMB_INFO where memb___id='".$AccountMaster."'";
    $country_reults = mssql_query($country_check);
    $country = mssql_fetch_row($country_reults);
    for ($numpais = 1;$numpais <= 240;$numpais++) {
        if ($country[0] == $numpais) {
            $country[0] = '<img src="template/'.$core['config']['template'].'/images/flags/' . $numpais . '.gif">';
        }
    }
    if ($country[0] == '') {
        $country[0] = '<img src="template/'.$core['config']['template'].'/images/flags/desco.png"/>';
    }
    if ($country[0] == '0') {
        $country[0] = '<img src="template/'.$core['config']['template'].'/images/flags/desco.png"/>';
    }
				
$bnmInfo = mssql_fetch_row(mssql_query("Select TOP 3 * from MuOnline.dbo.GuildMember WHERE G_Name = (SELECT OWNER_GUILD FROM MuCastle_DATA) AND G_Status = '32'")); 
			$bnm = $bnmInfo[0];
			
			$AsistenteInfo = mssql_fetch_row(mssql_query("SELECT Name FROM GuildMember WHERE G_Name ='".$Alianzas."' AND G_Status = '64'")); 
			$Asistente = $AsistenteInfo[0];
			
			if($GuilDueño == ''){ $GuilDueño = '<Font Color="#DF0101">Nadie </Font>'; }
			if($MasterGuild == ''){ $MasterGuild = '<Font Color="#DF0101">Nadie </Font>'; }
			if($AsistenteGuild == ''){ $AsistenteGuild = '<Font Color="#DF0101">Nadie </Font>'; }
			if($bnm == ''){ $bnm = '<Font Color="#DF0101">Nadie</Font>'; }
			if($ScoreGuild == ''){ $ScoreGuild = '0'; }
?>


<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-heading"><h4><i class="fa fa-trophy" aria-hidden="true"></i>&nbsp;Ocupantes del Castillo</h4></div

<div class="panel-body">
						<div class="row">
							<div class="col-xs-6"><strong>Due&ntilde;os del castillo:</strong></div><div class="col-xs-6"><?=$GuilDueño;?></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>L&iacute;der del clan:</strong></div><div class="col-xs-6"><?=$MasterGuild;?></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Asistente:</strong></div><div class="col-xs-6"><?=$AsistenteGuild;?></div>
						</div>
													<div class="row">
								<div class="col-xs-6"><strong>Batallador 1:</strong></div><div class="col-xs-6"><?=$bnm;?></div>
							</div>
												
						<div class="row">
							<div class="col-xs-6"><strong>Pa&iacute;s:</strong></div><div class="col-xs-6"><?=$country[0];?></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Logo:</strong></div><div class="col-xs-6"><img src="get.php?aL=<?=$LogoGuild;?>.png" alt="" width="40" height="40" /></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Puntos:</strong></div><div class="col-xs-6"><i><?=$ScoreGuild?></i></div>
						</div>
					</div>							
			</div>
		</div>

<br />


  <table class="themain3" align="center" cellpadding="2" cellspacing="1" width="70%">
<tr>
<div class="col-sm-12">
			<div class="panel panel-info">
			<div class="panel-heading"><h4><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;Alianzas</h4></div>

</td>
</tr>
</table>





          <table class="themain" align="center" cellpadding="2" cellspacing="1" width="70%">
              
    
              
              
              
						<table class="table table-striped table-condensed">
		                    <thead>
			                    <tr>
			                       <th>#</th>
			                        <th>Alianza</th>
			                        <th>L&iacute;der</th>
			                        <th>Asistente</th>
			                        <th>Puntos</th>
			                        <th>Pa&iacute;s</th>
			                        <th>Logo</th>
			                    
		                	</thead>
		                	<tbody>
		                	    <?
				  
$AlianzasInfo = mssql_fetch_row(mssql_query("select Number,G_Name FROM Guild WHERE G_Name= (SELECT OWNER_GUILD FROM MuCastle_DATA)")); 
			$Union = $AlianzasInfo[0];
			
$query=mssql_query("select TOP 5 * from MuOnline.dbo.Guild WHERE G_Union= (SELECT Number FROM Guild WHERE G_Name= (SELECT OWNER_GUILD FROM MuCastle_DATA))");
while($row=mssql_fetch_assoc($query)){
$Alianzas=$row['G_Name'];
$Master=$row['G_Master'];
$Score=$row['G_Score'];
$Logo=urlencode(bin2hex($row['G_Mark']));

$AsistenteInfo = mssql_fetch_row(mssql_query("SELECT Name FROM GuildMember WHERE G_Name ='".$Alianzas."' AND G_Status = '64'")); 
			$Asistente = $AsistenteInfo[0];
			
$CharacterInfo = mssql_fetch_row(mssql_query("SELECT AccountID,Name FROM Character WHERE Name='".$Master."'")); 
			$Account = $CharacterInfo[0];
			
$country_check1 = "Select country from MEMB_INFO where memb___id='".$AccountMaster."'";
    $country_reults1 = mssql_query($country_check1);
    $country1 = mssql_fetch_row($country_reults1);
    for ($numpais1 = 1;$numpais1 <= 240;$numpais1++) {
        if ($country1[0] == $numpais1) {
            $country1[0] = '<img src="template/'.$core['config']['template'].'/images/flags/' . $numpais . '.gif">';
        }
    }
    if ($country1[0] == '') {
        $country1[0] = '<img src="template/'.$core['config']['template'].'/images/flags/desco.png"/>';
    }
    if ($country1[0] == '0') {
        $country1[0] = '<img src="template/'.$core['config']['template'].'/images/flags/desco.png"/>';
    }
			
			if($Asistente == ''){ $Asistente = ' N/A '; }


?>

                    		 <td ><?=++$countAli;?></td>
                    <td ><?=$Alianzas?></td>
                    <td ><?=$Master?></td>
                    <td ><?=$Asistente?></td>
                    <td><?=$Score?></td>
                    <td><?=$country1[0];?></td>
                    <td><img src="Fix BrianDesign/logo.php?decode=<?=$Logo;?>.png" alt="" width="20" height="20" /></td>
		                		</tr>

                  
                  
                    <? } ?>
                </table>
              </td>
            </tr>
          </table>


		<br>
<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-heading"><h4><i class="fa fa-money" aria-hidden="true"></i>&nbsp;Informaci&oacute;n de Impuestos</h4></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-6"><strong>Dinero del Castillo:</strong></div><div class="col-xs-6"><?=$Dinero;?></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Impuesto de la Maquina de Combinaciones:</strong></div><div class="col-xs-6"><?=$Maquina;?></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Impuesto en las Tiendas:</strong></div><div class="col-xs-6"><?=$Tiendas;?></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Impuesto para ingresar a Land of Trial:</strong></div><div class="col-xs-6"><?=$Impuestos;?></div>
						</div>
					</div>							
			</div>
		</div>

		
	

<br />
             
<table class="themain3" align="center" cellpadding="2" cellspacing="1" width="70%">
<tr>
<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-heading"><h4><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Clanes registrados para la pr&oacute;xima batalla</h4></div>

</td>
</tr>
</table>





          <table class="themain" align="center" cellpadding="2" cellspacing="1" width="70%">
              
              <?
$query=mssql_query("select TOP 5 * from MuOnline.dbo.MuCastle_REG_SIEGE");
while($row=mssql_fetch_assoc($query)){
$Registrados=$row['REG_SIEGE_GUILD'];
$Marks=$row['REG_MARKS'];

$GuildReg = mssql_fetch_row(mssql_query("SELECT G_Master,G_Score,G_Mark,G_Name FROM Guild WHERE G_Name='".$Registrados."'")); 
			$MasterReg = $GuildReg[0];
			$ScoreReg = $GuildReg[1];
			$LogoReg = urlencode(bin2hex($GuildReg[2]));
			$GuildReg = $GuildReg[3];
			
$PeronsajeInfo = mssql_fetch_row(mssql_query("SELECT AccountID,Name FROM Character WHERE Name='".$MasterReg."'")); 
			$AccountReg = $PeronsajeInfo[0];
			
$country_check2 = "Select country from MEMB_INFO where memb___id='".$AccountMaster."'";
    $country_reults2 = mssql_query($country_check2);
    $country2 = mssql_fetch_row($country_reults2);
    for ($numpais2 = 1;$numpais2 <= 240;$numpais2++) {
        if ($country2[0] == $numpais2) {
            $country2[0] = '<img src="template/'.$core['config']['template'].'/images/flags/' . $numpais . '.gif">';
        }
    }
    if ($country2[0] == '') {
        $country2[0] = '<img src="template/'.$core['config']['template'].'/images/flags/desco.png"/>';
    }
    if ($country2[0] == '0') {
        $country2[0] = '<img src="template/'.$core['config']['template'].'/images/flags/desco.png"/>';
    }
?> 
              
              
              
						<table class="table table-striped table-condensed">
		                    <thead>
			                    <tr>
			                        <th>#</th>
			                        <th>Clan</th>
			                        <th>L&iacute;der</th>
			                        <th>Puntos</th>
			                        <th>Signs Of Lord</th>
			                        <th>Pa&iacute;s</th>
			                        <th>Logo</th>
			                    </tr>
		                	</thead>
		                	<tbody>

                    			<td><?=++$countReg;?></td>
		                			<td><?=$Registrados?></td>
		                			<td><?=$MasterReg?></td>
		                			<td><?=$ScoreReg?></td>
		                			<td><?=$Marks?></td>
		                			<td><?=$country2[0];?></td>
		                			<td><img src="Fix BrianDesign/logo.php?decode=<?=$LogoReg;?>.png" alt="" width="20" height="20" /></td>
		                		</tr>

                  
                  
                    <? } ?>
                </table>
              </td>
            </tr>
          </table>
<br />
 <table class="themain" align="center" cellpadding="2" cellspacing="1" width="70%">
<div class="col-sm-12">
    
			<div class="panel panel-info">
				<div class="panel-heading"><h4><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;Horarios y Periodos</h4></div>
					<div class="panel-body">
						Lunes, 00:00 Hs <span class="label label-success">Registro de Clanes (Inicio)</span><br />
						Martes, 23:59 Hs <span class="label label-success">Registro de Clanes (Fin)</span><br />
						Mi&eacute;rcoles, 00:00 Hs <span class="label label-default">Registro de Sign Of Lords (Inicio)</span><br />
						Jueves, 00:00 Hs <span class="label label-default">Registro de Sign Of Lords (Fin)</span><br />
						Viernes, 12:00 Hs <span class="label label-default">Notificaci&oacute;n de Clanes</span><br />
						S&aacute;bado, 19:00 Hs <span class="label label-default">Preparaci&oacute;n de la Zona de Batalla</span><br />
						Domingo, 22:00 Hs <span class="label label-danger">Batalla (Inicio)</span><br />
						Domingo, 24:00 Hs <span class="label label-danger">Batalla (Fin)</span>
					</div>							
			</div>
		</div>
</div>
</table>


<table class="themain3" align="center" cellpadding="2" cellspacing="1" width="70%">

<hr class="divider" /><br />

<div class="alert alert-info">
  <h2 class="tips-ayudas-color"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;INFORMACI&Oacute;N PARA REGISTRO DE CLANES</h2>
  <p class="alert-info">
  	Para poder registrar tu clan en el Castle Siege tenes que cumplir con los siguientes requisitos:<br /><br />
    <i class="fa fa-check" aria-hidden="true"></i>&nbsp;Tener un clan con por lo menos 10 miembros con su Asistente y sus Battle Masters correspondientes.<br />
    <i class="fa fa-check" aria-hidden="true"></i>&nbsp;Tener por lo menos Nivel 200 al momento de registrar el clan.<br />
    <i class="fa fa-check" aria-hidden="true"></i>&nbsp;Tener 10 puntos de Wars (Guerras) ganadas.<br />
    <i class="fa fa-check" aria-hidden="true"></i>&nbsp;Tener una alianza con cualquier otro clan.<br /><br />
    Si cumpl&iacute;s con &eacute;stos requisitos podes registrar tu clan con el NPC que se encuentra en Valley Of Loren (coordenadas 86-61), el cual te mostrar&aacute; la informaci&oacute;n de cuando es la pr&oacute;xima batalla por el Castle Siege y sus diferentes periodos.
  </p>
</div></div>
										</div>
									</div>
								</div>
								<br />
							</div>
						</div>


</table>