<?php
////////////////////////////////////////////////////////////////////////////////
//////////////////////////////MODULO DE ESTADISTICAS////////////////////////////
////////////////////////////////////////////////////////////////////////////////

$BrianDesign['Version']	=  'Season 6 Episodio 3';

$BrianDesign['Apertura'] =  'Indefinida';

$BrianDesign['Administracion'] =  'Argentina <i>(Buenos Aires)</i>';

$BrianDesign['ZenBug'] =  'No';

$BrianDesign['ModsHP'] =  '100%';

$BrianDesign['WebShop'] =  'Si';

$BrianDesign['VIP'] =  'Si';

////////////////////////////////////////////////////////////////////////////////
//////////////////////////////DATOS DE LOS SERVERS//////////////////////////////
////////////////////////////////////////////////////////////////////////////////

$BrianDesign['FREE-EXP']  =  '500x';

$BrianDesign['FREE-DROP'] =  '';

$BrianDesign['FREE-TIPO'] =  'PVP';

$BrianDesign['VIP-EXP']	 =  '1300x';

$BrianDesign['VIP-DROP'] =  '80%';

$BrianDesign['VIP-TIPO'] =  'PVP';

////////////////////////////////////////////////////////////////////////////////
////////////////////////////IP Y PORTS DE LOS SERVERS///////////////////////////
////////////////////////////////////////////////////////////////////////////////

$IPFREE   = "167.114.124.70";

$PORTFREE = "55901"; 

$IPVIP    = "167.114.124.70";

$PORTVIP  = "55903"; 

////////////////////////////////////////////////////////////////////////////////
//////////////////////////PROGRAMADO POR BRIAN DESIGN///////////////////////////
////////////////////////////////////////////////////////////////////////////////
?>
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
</style>
		 
		 
<?
$characters = mssql_query("SELECT count(*) FROM Character");
$totalchars = mssql_fetch_row($characters);
$accounts = mssql_query("SELECT count(*) FROM MEMB_INFO");
$totalacc = mssql_fetch_row($accounts);
$guild = mssql_query("SELECT count(*) FROM Guild");
$totalguilds = mssql_fetch_row($guild);
$onlinepl = mssql_query("SELECT count(*) From MEMB_STAT where Connectstat='1'");
$online = mssql_result($onlinepl, 0, 0);
$bannedchar = mssql_query("SELECT count(*) FROM Character WHERE CtlCode='1'");
$bannchar = mssql_fetch_row($bannedchar);
$bannedchar1 = mssql_query("SELECT count(*) FROM MEMB_INFO WHERE bloc_code='1'");
$bannchar1 = mssql_fetch_row($bannedchar1);
$gm = mssql_query("SELECT * FROM Character WHERE CtlCode = 8");
$gms = mssql_num_rows($gm);
$gmon = mssql_fetch_array($gm);
$gmonline = mssql_query("SELECT * FROM MEMB_STAT WHERE memb___id='$gmon[AccountID]' AND ConnectStat=1");
$gmsonline = mssql_num_rows($gmonline);
$load = substr(100 * $online / 150, 0, 5);
?>
		 
<br>


<div class="row">
		<div class="col-md-6" >
			<div class="panel panel-info">
				<div class="panel-heading"><h4><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;Informaci&oacute;n General</h4></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-6"><strong>Versión:</strong></div><div class="col-xs-6"><?=$BrianDesign['Version'];?></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Fecha de apertura:</strong></div><div class="col-xs-6"><?=$BrianDesign['Apertura'];?></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Administración:</strong></div><div class="col-xs-6"><?=$BrianDesign['Administracion'];?></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Zen bug:</strong></div><div class="col-xs-6"><?=$BrianDesign['ZenBug'];?></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Mobs HP:</strong></div><div class="col-xs-6"><?=$BrianDesign['ModsHP'];?></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Stats m&aacute;ximos:</strong></div><div class="col-xs-6">65535</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Webshop de Items:</strong></div><div class="col-xs-6"><?=$BrianDesign['WebShop'];?></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Subservidores VIP:</strong></div><div class="col-xs-6"><span style="color:#00A500;"><?=$BrianDesign['VIP'];?></div>
						</div>
					</div>		
					

</tr>
			</div>
		</div>
		<div class="col-md-6" >
			<div class="panel panel-info">
				<div class="panel-heading"><h4><i class="fa fa-database" aria-hidden="true"></i>&nbsp;Base de Datos</h4></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-6"><strong>Cuentas activas:</strong></div><div class="col-xs-6"><?=$totalacc[0];?></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Personajes activos:</strong></div><div class="col-xs-6"><?=$totalchars[0];?></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Clanes activos:</strong></div><div class="col-xs-6"><?=$totalguilds[0];?></div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>Cuentas bloqueadas:</strong></div><div class="col-xs-6"><?=$bannchar1[0];?></div>
						</div>
						<div class="row">
		
						<div class="col-xs-6"><strong>GMs conectados:</strong></div><div class="col-xs-6"><?=$gmsonline;?>/<span style="color:#F00000;"><?=$gms;?></span></div>
						</div>
					</div>					
			</div>
		</div>
	</div>

			<div class="panel panel-info">
				<div class="panel-heading"><h4><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp;Estado de los Servidores</h4></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-3"><strong>FREE 1</strong> <span class="badge"><?=$BrianDesign['FREE-EXP'];?>&nbsp;/<?=$BrianDesign['FREE-DROP'];?> PVP</span></div>
							<div class="col-xs-3">
								<div class="progress">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow=48 aria-valuemin="0" aria-valuemax=150 style="width: <?=$online;?>%" ">ONLINE</div>						</div>
							</div>
							<div class="col-xs-6"><?=$online;?></div>
						</div>
						
					</div>					
			</div>

			<div class="panel panel-info">
				<div class="panel-heading"><h4><i class="fa fa-terminal" aria-hidden="true"></i>&nbsp;Comandos del juego</h4></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-6"><strong>/post:</strong></div><div class="col-xs-6">Mensaje por canal GLOBAL</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/resetear:</strong></div><div class="col-xs-6">Resetea el personaje</div>
						</div>
						<hr class="divider" />
						<div class="row">
							<div class="col-xs-6"><strong>/addstr:</strong></div><div class="col-xs-6">A&ntilde;ade puntos de stats en Fuerza al personaje</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/addagi:</strong></div><div class="col-xs-6">A&ntilde;ade puntos de stats en Agilidad al personaje</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/addvit:</strong></div><div class="col-xs-6">A&ntilde;ade puntos de stats en Vitalidad al personaje</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/addene:</strong></div><div class="col-xs-6">A&ntilde;ade puntos de stats en Energ&iacute;a al personaje</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/addcmd:</strong></div><div class="col-xs-6">A&ntilde;ade puntos de stats en Comando al personaje</div>
						</div>
						<hr class="divider" />
						<div class="row">
							<div class="col-xs-6"><strong>/pkclear:</strong></div><div class="col-xs-6">Limpia el PK (asesinatos)</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/asesinatos:</strong></div><div class="col-xs-6">Muestra la cantidad de asesinatos que cometi&oacute; el personaje</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/borrarinv:</strong></div><div class="col-xs-6">Borra los items del inventario (solo los items NO equipados)</div>
						</div>
						<hr class="divider" />
						<div class="row">
							<div class="col-xs-6"><strong>/miinfo:</strong></div><div class="col-xs-6">Muestra informaci&oacute;n adicional sobre tu personaje y cuenta</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/online:</strong></div><div class="col-xs-6">Devuelve la cantidad de personajes conectados en el subservidor</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/hora:</strong></div><div class="col-xs-6">Devuelve la fecha y hora del servidor</div>
						</div>
						<hr class="divider" />
						<div class="row">
							<div class="col-xs-6"><strong>/pet1:</strong></div><div class="col-xs-6">Invoca tu Skelldog (mascota) [<a href="http://guias.argmu.net/soporte/como-crear-y-evolucionar-el-skelldog/" target="_blank"><b>ver m&aacute;s</b></a>]</div>
						</div>
						<hr class="divider" />
						<div class="row">
							<div class="col-xs-6"><strong>/protecton:</strong></div><div class="col-xs-6">Activa la protecci&oacute;n del sistema Items Protect [<a href="http://guias.argmu.net/seguridad/item-protect-seguridad-para-tus-items/" target="_blank"><b>ver m&aacute;s</b></a>]</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/protectoff:</strong></div><div class="col-xs-6">Desactiva la protecci&oacute;n del sistema Items Protect</div>
						</div>
						<hr class="divider" />
						<div class="row">
							<div class="col-xs-6"><strong>/casamiento:</strong></div><div class="col-xs-6">Propone casamiento [<a href="http://guias.argmu.net/como-jugar/casamiento/" target="_blank"><b>ver m&aacute;s</b></a>]</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/acepto:</strong></div><div class="col-xs-6">Acepta la propuesta de casamiento</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/tracepareja:</strong></div><div class="col-xs-6">Te teletransporta al lado de tu pareja</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/estadocivil:</strong></div><div class="col-xs-6">Te muestra qui&eacute;n es tu pareja</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/divorcio:</strong></div><div class="col-xs-6">Te divorcia de tu pareja</div>
						</div>
						<hr class="divider" />
						<div class="row">
							<div class="col-xs-6"><strong>/vendo:</strong></div><div class="col-xs-6">Publica un mensaje de VENTA de items</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/compro:</strong></div><div class="col-xs-6">Publica un mensaje de COMPRA de items</div>
						</div>
						<hr class="divider" />
						<div class="row">
							<div class="col-xs-6"><strong>/veranuncios:</strong></div><div class="col-xs-6">Muestra los anuncios enviados por los administradores al juego</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><strong>/bloqanuncios:</strong></div><div class="col-xs-6">Oculta los anuncios enviados por los administradores al juego</div>
						</div>
						<hr class="divider" />
						<div class="row">
							<div class="col-xs-6"><span class="badge">VIP</span>&nbsp;<strong>/movebar:</strong></div><div class="col-xs-6">Te teletransporta al Bar de Lorencia</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><span class="badge">VIP</span>&nbsp;<strong>/movechaos:</strong></div><div class="col-xs-6">Te teletransporta a la M&aacute;quina de Combinaciones</div>
						</div>
						<div class="row">
							<div class="col-xs-6"><span class="badge">VIP</span>&nbsp;<strong>/movebaul:</strong></div><div class="col-xs-6">Te teletransporta al ba&uacute;l</div>
						</div>
					</div>					
			</div>

			<div class="panel panel-success">
				<div class="panel-heading"><h4><i class="fa fa-calendar-o" aria-hidden="true"></i>&nbsp;Eventos habilitados</h4></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12">
								  <a href="http://guias.argmu.net/eventos/invasion-de-dragones-rojos/" target="_blank" class="btn btn-success" role="button">Invasi&oacute;n de Dragones Rojos</a>
								  <a href="http://guias.argmu.net/eventos/invasion-de-skeleton-king/" target="_blank" class="btn btn-success" role="button">Invasi&oacute;n del Skeleton King</a>
								  <a href="http://guias.argmu.net/eventos/white-wizard-evento/" target="_blank" class="btn btn-success" role="button">Invasi&oacute;n del Mago Blanco</a>
								  <a href="http://guias.argmu.net/eventos/invasion-de-conejos-blancos-evento/" target="_blank" class="btn btn-success" role="button">Invasi&oacute;n de Conejos Blancos</a>
								  <a href="http://guias.argmu.net/eventos/invasion-de-dragones-dorados/" target="_blank" class="btn btn-success" role="button">Invasi&oacute;n de Dragones Dorados</a>
								  <a href="http://guias.argmu.net/eventos/frozen-soldiers-evento/" target="_blank" class="btn btn-success" role="button">Invasi&oacute;n de Frozen Soldiers</a>
								  <a href="http://guias.argmu.net/eventos/shadows-of-kundun/" target="_blank" class="btn btn-success" role="button">Escape de Shadows Of Kundun</a>
								  <a href="http://guias.argmu.net/eventos/evento-de-san-valentin/" target="_blank" class="btn btn-success" role="button">San Valent&iacute;n</a>
								  <a href="http://guias.argmu.net/eventos/happy-hour/" target="_blank" class="btn btn-success" role="button">Happy Hour</a>
								  <a href="http://guias.argmu.net/eventos/crywolf-evento/" target="_blank" class="btn btn-success" role="button">Crywolf</a>
								  <a href="#" target="_blank" class="btn btn-success disabled" role="button">Halloween</a>
								  <a href="http://guias.argmu.net/eventos/illusion-temple/" target="_blank" class="btn btn-success" role="button">Illusion Temple</a>
								  <a href="http://guias.argmu.net/eventos/castle-deep/" target="_blank" class="btn btn-success" role="button">Castle Deep</a>
								  <a href="http://guias.argmu.net/eventos/hit-and-up/" target="_blank" class="btn btn-success" role="button">Hit And Up!</a>
								  <a href="http://guias.argmu.net/eventos/kantru-evento/" target="_blank" class="btn btn-success">Kantru</a>
								  <a href="http://guias.argmu.net/eventos/castle-siege-evento/" target="_blank" class="btn btn-success" role="button">Castle Siege</a>
								  <a href="http://guias.argmu.net/eventos/chaos-castle-evento/" target="_blank" class="btn btn-success" role="button">Chaos Castle</a>
								  <a href="http://guias.argmu.net/eventos/blood-castle-evento/" target="_blank" class="btn btn-success" role="button">Blood Castle</a>
								  <a href="http://guias.argmu.net/eventos/devil-square-evento/" target="_blank" class="btn btn-success" role="button">Devil Square</a>
								  <a href="http://guias.argmu.net/eventos/invasion-kalima-lord-of-kundun/" target="_blank" class="btn btn-success" role="button">Lord Of Kundun</a>
								  <a href="http://guias.argmu.net/eventos/santa-claus-malvado/" target="_blank" class="btn btn-success" role="button">Santa Claus malvado</a>
								  <a href="http://guias.argmu.net/eventos/santa-claus-malvado/" target="_blank" class="btn btn-success" role="button">Dalibor "El Desertor"</a>
								  <a href="#" target="_blank" class="btn btn-success disabled" role="button">Narcondra</a>
							</div>
						</div>
					</div>					
			</div>

			<div class="panel panel-warning">
				<div class="panel-heading"><h4><i class="fa fa-map-signs" aria-hidden="true"></i>&nbsp;Mapas disponibles</h4></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-xs-12">
								  <a href="http://guias.argmu.net/mapas/lorencia-mapamobs/" target="_blank" class="btn btn-warning" role="button">Lorencia</a>
								  <a href="http://guias.argmu.net/mapas/noria-mapamobs/" target="_blank" class="btn btn-warning" role="button">Noria</a>
								  <a href="http://guias.argmu.net/mapas/davias-mapamobs/" target="_blank" class="btn btn-warning" role="button">Devias</a>
								  <a href="http://guias.argmu.net/mapas/dungeon-mapa-y-mobs/" target="_blank" class="btn btn-warning" role="button">Dungeon</a>
								  <a href="http://guias.argmu.net/mapas/atlans-mapamobs/" target="_blank" class="btn btn-warning" role="button">Atlans</a>
								  <a href="http://guias.argmu.net/mapas/losttower-mapamobs/" target="_blank" class="btn btn-warning" role="button">Losttower</a>
								  <a href="http://guias.argmu.net/mapas/tarkan-mapamobs/" target="_blank" class="btn btn-warning" role="button">Tarkan</a>
								  <a href="http://guias.argmu.net/mapas/icarus-mapamobs/" target="_blank" class="btn btn-warning" role="button">Icarus</a>
								  <a href="http://guias.argmu.net/mapas/valley-of-loren-mapa-mobs/" target="_blank" class="btn btn-warning" role="button">Valley Of Loren</a>
								  <a href="http://guias.argmu.net/mapas/aida-mapamobs/" target="_blank" class="btn btn-warning" role="button">Aida</a>
								  <a href="http://guias.argmu.net/mapas/kanturu-mapamobs/" target="_blank" class="btn btn-warning" role="button">Kantru</a>
								  <a href="http://guias.argmu.net/mapas/barrack-mapamobs/" target="_blank" class="btn btn-warning" role="button">Barraks</a>
								  <a href="http://guias.argmu.net/mapas/kalima-mapamobs/" target="_blank" class="btn btn-warning" role="button">Kalima</a>
								  <a href="#" target="_blank" class="btn btn-warning disabled" role="button">Arena</a>
								  <a href="http://guias.argmu.net/mapas/elbeland-mapa-y-mobs/" target="_blank" class="btn btn-warning" role="button">Elbeland</a>
								  <a href="http://guias.argmu.net/mapas/mapa-raklion/" target="_blank" class="btn btn-warning" role="button"><span class="badge">VIP</span>&nbsp;Raklion</a>
								  <a href="http://guias.argmu.net/mapas/refuge-mapamob/" target="_blank" class="btn btn-warning" role="button">Refuge</a>
								  <a href="http://guias.argmu.net/mapas/crywolf-mapamobs/" target="_blank" class="btn btn-warning" role="button">Crywolf</a>
								  <a href="http://guias.argmu.net/mapas/mapa-land-of-trials-pemio-del-cs/" target="_blank" class="btn btn-warning" role="button">Land Of Trials</a>
								  <a href="http://guias.argmu.net/mapas/swamp-of-calmess/" target="_blank" class="btn btn-warning" role="button"><span class="badge">VIP</span>&nbsp;Swamp Of Calmness</a>
								  <a href="#" target="_blank" class="btn btn-warning disabled" role="button">Lost Island</a>
								  <a href="http://guias.argmu.net/mapas/forest-arena/" target="_blank" class="btn btn-warning" role="button"><span class="badge">VIP</span>&nbsp;Forest Arena</a>
								  <a href="http://guias.argmu.net/mapas/mapa-pvp/" target="_blank" class="btn btn-warning" role="button">Mapa PVP</a>
							</div>
						</div>
					</div>					
			</div>
</div> <!-- Cierro cuerpo principal -->
<div class="col-md-3"> <!-- Abro cuerpo secundario -->
	<div class="well wellargpalette">
		<h3 style="text-align: center;">EQUIPO DE TRABAJO</h3>			
		<p style="text-align: center;">Contamos con un equipo de Game Masters, Administradores y Desarrolladores que trabajan día a día para ofrecer un juego más entretenido, limpio y estable.</p>	
	</div>

