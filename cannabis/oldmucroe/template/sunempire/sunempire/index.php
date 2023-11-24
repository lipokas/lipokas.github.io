<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?=build_header_seo(); ?>
<title><?=build_header_title(); ?></title>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script src="js/core_global.js" language="javascript" type="text/javascript"></script>
<link rel="StyleSheet" href="template/<?=$core['config']['template'] ?>/template/template_002/immagini/xiah_default.css" type="text/css" title="style">
<link rel="stylesheet" href="template/<?=$core['config']['template'] ?>/MuVip-IG/default/MuVipIG/fcv.css" type="text/css">
<link rel="stylesheet" href="template/<?=$core['config']['template'] ?>/MuVip-IG/default/MuVipIG/fcv2.css" type="text/css">
<script src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/menu.js" type="text/javascript"></script>
</head>

<script>
function OnLoad ()
{
	startClock();
	vote_run();
}
var gClockHours;
var gClockSeconds;
var gClockMinutes;
var gClockTimer=null;

function startClock()
{
  gClockHours=14;
  gClockMinutes=29;
  gClockSeconds=28;
  if(gClockTimer){clearInterval(gClockTimer);gClockTimer=null;}
  clockWork();
  gClockTimer=setInterval("clockWork();",1000);
}
 
function twoDigit(_v)
{
  if(_v<10)_v="0"+_v;
  return _v;
}
 
function clockWork()
{
  if (!document.layers && !document.all && !document.getElementById) return;
  var runTime = new Date();
  var dn = "AM";
  var shours = gClockHours;
  var sminutes = gClockMinutes;
  var sseconds = gClockSeconds;
  if (shours >= 12)
  {
    dn = "PM";
    shours-=12;
  }
  if (!shours) shours = 12;
  sminutes=twoDigit(sminutes);
  sseconds=twoDigit(sseconds);
  shours  =twoDigit(shours  );
  movingtime = ""+ shours + ":" + sminutes +":"+sseconds+" " + dn;
  if (document.getElementById)
    document.getElementById("clock").innerHTML=movingtime;
  else if (document.layers)
  {
    document.layers.clock.document.open();
    document.layers.clock.document.write(movingtime);
    document.layers.clock.document.close();
  }
  else if (document.all)
    clock.innerHTML = movingtime;
 
  if(++gClockSeconds>59)
  {
    gClockSeconds=0;
    if(++gClockMinutes>59)
    {
      gClockMinutes=0;
      if(++gClockHours>23)
      {
        gClockHours=0;
      }
    }
  }
}
function clrImg(obj) {
        obj.style.backgroundImage = ""; obj.onkeydown = obj.onmousedown = null;
    }
function Img_id(obj) {
	if(obj.value == ''){
        obj.style.backgroundImage = "url('template/<?=$core['config']['template'] ?>/template/template_002/immagini/id_bg.gif')";}
    }
function Img_pw(obj) {
	if(obj.value==''){
        obj.style.backgroundImage = "url('template/<?=$core['config']['template'] ?>/template/template_002/immagini/pw_bg.gif')";}
    }


</script>


<body onLoad="OnLoad();" leftmargin="0" topmargin="0" style="background-repeat: repeat-x;" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/key_bg.jpg" bgcolor="#191107" marginheight="0" marginwidth="0">
<table style="background-repeat: no-repeat; background-position: center top;" width="100%" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/header.png" border="0" cellpadding="0" cellspacing="0" height="100%">
  <td height="162">
<tbody><tr>
	<td align="center" valign="top">
		<div id="MyDiv2" style="position: relative; top: 10px; left: 20px; height: 0pt; width: 0pt; display: none; background-color: green;">
</div><table width="1010" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr height="170">
			  <td style="background-repeat: no-repeat; background-position: center bottom;" width="202" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/logo_bg.png" valign="bottom"><table width="205" border="0" cellpadding="0" cellspacing="0">
                <tbody>
                  <tr>
                    <td align="center">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="14"></td>
                  </tr>
                </tbody>
		      </table></td>
				<td widht="600" valign="bottom"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/tbl_tbg_v03.png"></td>
		  <td style="background-repeat: no-repeat; background-position: center bottom;" width="205" align="center" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/cst_bg_v01.png" valign="bottom">
  <table width="205" border="0" cellpadding="0" cellspacing="0">
						<tbody><tr>
							<td align="center"><?=date('H:i:s l j/m/y') ;?></td>
						</tr>
						<tr>
							<td height="14"></td>
						</tr>
					</tbody></table>
			  </td>
			</tr>
			<tr height="">
<td width="205" valign="top">
	<table width="205" border="0" cellpadding="0" cellspacing="0" height="">
		<tbody><tr>
			<td height="9"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_tbg.png"></td>
		</tr>
		<tr>
			<td align="right" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_cbg.gif" valign="top">
				<table width="191" border="0" cellpadding="0" cellspacing="0">			
					<tbody><tr>
						<td id="td_notice" cellpadding="5" width="184" align="right" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/notice_gtit02.gif" height="29"><div id="menuimage_notice"></div>
						</a></td>
						<td width="7" valign="top"></td>
					</tr>								
					<tr><td><span id="notice" style=""><table width="184" border="0" cellpadding="0" cellspacing="0"><tbody>
                    
                    <tr><td background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif" height="22"><?
					  $m_row_ = get_sort('engine/cms_data/pag_d.cms','¦');
					#  echo $test[1][2][3];
					  foreach ($m_row_ as $li){
					 #  explode("¦",$li);
					   switch ($li[7]){
					   	case '0':
					   		if($li[8] == '1'){
					   			if($li[6] != '0'){
					   				echo '<li class="meniu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$li[3].'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a></li>';
					   			}
					   	
					   		}
					   		break;
					   	case '1':
					   		switch ($li[11]){
					   			case '1': $target = "_blank"; break;
					   			case '0': $target = "_self"; break;
					   		}
					   		echo '<li class="meniu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="'.$li[10].'"  target="'.$target.'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a></li>  ';
					   	
					   	break;
					   }


					  	
					  }
					  
		  ?>
                    </td>
		                          </tr>
						</tbody></table>
					</span>
						</td>
						<td></td>
					</tr>
					<tr>
						<td id="td_download" width="184" align="right" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/download_gtit.gif" height="29"><div id="menuimage_download"></div>
						</a></td>
						<td width="7" valign="top"></td>
					</tr>
					<tr>
						<td>
							<span id="download" style="display: block;">
		                    <table width="184" border="0" cellpadding="0" cellspacing="0">
		                      <tbody>
		                        <tr>
		                          <td style="padding: 0pt 0pt 4px;" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif" height="22"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/g_bull.gif" align="absmiddle"><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>downloads" class="xa_link01">Download Client</a></td>
		                          </tr>
		                        <tr></tr>
		                        <tr>
		                          <td style="padding: 0pt 0pt 4px;" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg02.gif" height="28"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/g_bull.gif" align="absmiddle"><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>downloads" class="xa_link01">Download Drivers</a></td>
		                          </tr>
		                        </tbody>
		                      </table>
		                    </span>						</td>
						<td></td>
					</tr>
					<tr>
						<td id="td_community" width="184" align="right" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/community_gtit.gif" height="29"><div id="menuimage_community"></div>
						</a></td>
						<td width="7" valign="top"></td>
					</tr>
					<tr>
						<td>
							
							<span id="community" style="">
							
							<table width="184" border="0" cellpadding="0" cellspacing="0">
								<tbody><tr>
									<td style="padding: 0pt 0pt 4px;" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif" height="22"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/g_bull.gif" align="absmiddle"><a href="http://darkgames.eu/" class="xa_link01">Forum</a></td>
		                        </tr>
		                      <tr>
		                        <td style="padding: 0pt 0pt 4px;" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif" height="22"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/g_bull.gif" align="absmiddle"><a href="http://video.muareax.com/" class="xa_link01">Videos</a></td>
								</tr>
						</tbody></table></span></td>
						<td></td>
					</tr>
					<tr>
						<td id="td_support" width="184" align="right" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/TopRank_gtit.gif" height="29"><div id="menuimage_support"></div>
						</a></td>
						<td width="7" valign="top"></td>
					</tr>
					<tr>
						<td>
							
							<span id="support" style="">
							
							<table width="184" border="0" cellpadding="0" cellspacing="0">
								<tbody><tr>
								  <td width="27" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif" style="padding: 0pt 0pt 4px;"><div align="center"><span class="static">N</span></div></td>
								  <td width="63" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif" style="padding: 0pt 0pt 4px;"><div align="center"><span class="static">Nombre</span></div></td>
								  <td width="40" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif" style="padding: 0pt 0pt 4px;"><div align="center"><span class="static">Nivel</span></div></td>
								  <td width="51" height="22" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif" style="padding: 0pt 0pt 4px;"><div align="center"><span class="static">Resets</span></div></td><?
$query=mssql_query("select TOP 5 * from MuOnline.dbo.Character Where ctlcode !='32' and ctlcode !='8' order by Resets desc, cLevel desc");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$levelz=$row['cLevel'];
$resetsz=$row['Resets'];

?>
								  </tr>
								<tr>
								  <td style="padding: 0pt 0pt 4px;" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif"><div align="center">
								    <span class="static"><?=++$count1;?></span>
								  </div></td>
								  <td style="padding: 0pt 0pt 4px;" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif"><div align="center">
								    <span class="static"><?=$namez;?></span>
								  </div></td>
								  <td style="padding: 0pt 0pt 4px;" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif"><div align="center">
								    <span class="static"><?=$levelz;?></span>
								    </div></td>
								  <td style="padding: 0pt 0pt 4px;" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif" height="28"><div align="center">
								    <span class="static"><?=$resetsz;?></span>
								  </div></td>
							    </tr><?

}
?></tbody></table></span></td>
						<td></td>
					</tr>
					<tr>
						<td id="td_support" width="184" align="right" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/srvinfo_gtit.gif" height="29"><div id="menuimage_support"></div>
						</a></td>
						<td width="7" valign="top"></td>
					</tr>
					<tr>
						<td>
							
							<span id="support" style="">
							
							<table width="184" border="0" cellpadding="0" cellspacing="0">
								<tbody>
								<tr><?
//Estadisticas Usuarios

$statistics_accounts=mssql_query("SELECT count(*) memb___id FROM MuOnline.dbo.MEMB_INFO");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['accounts_reults']=$row['memb___id'];
?>
									<td style="padding: 0pt 0pt 4px;" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif" height="22"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/g_bull.gif" align="absmiddle"><span class="static">Total Account: </span><span class="static"><?=$core['accounts_reults'];?></span></td><?

}
?>
								</tr>
								<tr><?
//Estadisticas Personajes

$statistics_accounts=mssql_query("SELECT count(*) AccountID FROM MuOnline.dbo.Character");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['character_reults']=$row['AccountID'];
?>
									<td style="padding: 0pt 0pt 4px;" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif" height="22"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/g_bull.gif" align="absmiddle"><span class="static">Total Personajes:</span><span class="static"><?=$core['character_reults'];?></span></td>
<?

}
?>
								</tr>
								<tr><?
//Estadisticas Clanes

$statistics_accounts=mssql_query("SELECT count(*) G_Name FROM MuOnline.dbo.Guild");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['guild_reults']=$row['G_Name'];
?>
									<td style="padding: 0pt 0pt 4px;" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif" height="22"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/g_bull.gif" align="absmiddle"><span class="static">Total Guild:</span><span class="static"><?=$core['guild_reults'];?></span></td>
<?

}
?>
								</tr>
								<tr><?
//Estadisticas Usuarios Conectados

$statistics_players=mssql_query("SELECT count(*) ConnectStat FROM MuOnline.dbo.MEMB_STAT WHERE ConnectStat='1'");
while($row=mssql_fetch_assoc($statistics_players)){
$core['config']['statistics_results']=$row['ConnectStat'];
?>
									<td style="padding: 0pt 0pt 4px;" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif" height="22"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/g_bull.gif" align="absmiddle"><span class="static">Total Online:</span><span class="static"><?=$core['config']['statistics_results'];?></span></td>
 <?

}
?>
								</tr>
								<tr>
									<td style="padding: 0pt 0pt 4px;" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg.gif" height="22"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/g_bull.gif" align="absmiddle"><span class="static">Server Free:</span><?PHP
if (eregi("status/servidor.php", $_SERVER['SCRIPT_NAME'])) { die ("Access Denied"); }
require 'engine/global_config.php';

$onlineoffline = "127.0.0.1";
if ($check=@fsockopen($onlineoffline,55901,$ERROR_NO,$ERROR_STR,(float)0.5)) 
	{ 
	fclose($check); 
	echo '<img src="template/'.$core['config']['template'].'/images/on.png" alt="Online">'; 
	}
else 
	{ 
	echo '<img src="template/'.$core['config']['template'].'/images/off.png" alt="Offline">'; 
	} 
?>
								</td>
								</tr>
								<tr>
									<td style="padding: 0pt 0pt 4px;" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_sbg02.gif" height="22"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/g_bull.gif" align="absmiddle"><span class="static">Castle Siegue:<?PHP
if (eregi("status/statusgscs.php", $_SERVER['SCRIPT_NAME'])) { die ("Access Denied"); }
require 'engine/global_config.php';

$onlineoffline = "127.0.0.1";
if ($check=@fsockopen($onlineoffline,55919,$ERROR_NO,$ERROR_STR,(float)0.5)) 
	{ 
	fclose($check); 
	echo '<img src="template/'.$core['config']['template'].'/images/on.png" alt="Online">'; 
	}
else 
	{ 
	echo '<img src="template/'.$core['config']['template'].'/images/off.png" alt="Offline">'; 
	} 
?></td>
		</						</tr></tbody></table></td>
						<td></td>
					</tr></tbody></table></td>
		</tr>
		<tr>
			<td height="20"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/gnb_dbg.gif"></td>
		</tr>
	</tbody></table>
</td>
				<td widht="600" height="" valign="top">
					<table width="600" border="0" cellpadding="0" cellspacing="0" height="">
						<tbody><tr>
						  <td align="center" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/ftit_bg_v01.gif" height="80"><div align="left">
		                    <?
		  if(CMS_NAVBAR == '1'){
		  	if(isset($_GET[LOAD_GET_PAGE])){
                  	$l_load = file("engine/cms_data/pag_d.cms");
                  	foreach ($l_load as $l_name){
                  		$l_name = explode("¦",$l_name);
                  		if($l_name[3] == $page_check_id){
                  			$primary_l = $l_name[2];
                  			break;
                  		}

                  	}
                  }
                  
                  if(isset($_GET[USER_GET_PAGE])){
                  	$ti2_td = xss_clean(safe_input($_GET[USER_GET_PAGE],"_"));
                  	$l2_load = file("engine/cms_data/mods_uss.cms");
                  	foreach ($l2_load as $l2_name){
                  		$l2_name = explode("¦",$l2_name);
                  		if($l2_name[3] == $ti2_td){
                  			$secondary_l = $l2_name[2];
                  			break;
                  		}
                  	}
                  }
                  
                  if(!isset($_GET[LOAD_GET_PAGE])){
                                        #&gt;
                                        $title_p =  '<a  href="'.$core['config']['website_url'].'">'.$core['config']['websitetitle'].'</a>';
                                    }elseif  (isset($_GET[LOAD_GET_PAGE])){
                                        if(isset($_GET[USER_GET_PAGE])){
                                            $usercp_module_title =  str_replace($modules_text_tile,$modules_text_translate,$secondary_l);
$title_p =  '<a  href="'.$core['config']['website_url'].'">'.$core['config']['websitetitle'].'</a>  &gt; <a  href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$l_name[3].'">'.str_replace($menu_links_title,$menu_links_translated,$primary_l).'</a>  &gt; <a  href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$l_name[3].'&panel='.$l2_name[3].'">'.$usercp_module_title.'</a>';
                                        }else{ $title_p =  '<a  href="'.$core['config']['website_url'].'">'.$core['config']['websitetitle'].'</a>  &gt; <a  href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$l_name[3].'">'.str_replace($menu_links_title,$menu_links_translated,$primary_l).'</a>';}
                                    }
                  echo '
                  
                  <div class="where_nav">
                  <table cellpadding="0" cellspacing="0" border="0" >
                  <tr>
                  <td align="left"><img src="template/'.$core['config']['template'].'/images/arrow.gif" border="0"></td>
                  <td>&nbsp;</td>
                  <td width="100%" align="left">'.$title_p.'</td>
                  </table>
                  </div>';
		  	
		  }

if($page_check_id != ANNOUNCEMENTS_CMS_PAGE){
	require('engine/announcement_config.php');
if($core['ANNOUNCEMENT']['ACTIVE'] == '1'){
	$ann_file = array_reverse(file('engine/variables_mods/announcements.tDB'));
	$count_ann = '0';
	foreach ($ann_file as $ann){
		$ann = explode("¦",$ann);
		if($ann[3] > time()){
			$ann_found = '1';
			$ann_title = $ann[1];
			$ann_date = $ann[2];
			$ann_id = $ann[0];
;			break;
		}
	}
}
	if($ann_found == '1'){
		echo '
		<div class="tmp_m_content"> 
					<div  class="tmp_right_title">'.text_announcement.'</div>
					<div class="tmp_page_content">
								<table cellpadding="0" cellspacing="0" border="0" width="100%">
					  <tr>
					  <td rowspan="3" align="left" width="60"><img src="template/'.$core['config']['template'].'/images/announcement.gif" width="38" height="38"></td>
					  <td align="left" style="padding-top: 2px; padding-bottom: 2px;"><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.ANNOUNCEMENTS_CMS_PAGE.'#announcement-'.$ann_id.'">'.$ann_title.'</a></td>
					  <td align="right" class="ann_date">'.date('F j, Y | H:i',$ann_date).'</td>
					  </tr>
					  <tr>
					  <td colspan="2"  align="left" style="background-image:url(template/'.$core['config']['template'].'/images/inner_line.jpg); height: 2px;"></td>
					  </tr>
					  
					  ';
		if($core['ANNOUNCEMENT']['AUTHOR'] == '1'){
			echo '<tr>
			<td colspan="2" align="right"><b>'.$core['config']['admin_nick'].'</b> (Administrator)</td>
			</tr>';
			
		}
		echo '</table></div>
							</div>
						';
	}
}
		  
		  
	
$load_pages = file('engine/cms_data/pag_d.cms');
foreach ($load_pages as $pages_loaded){
	$pages_loaded = explode("¦",$pages_loaded);
	
	if($pages_loaded[3] == $page_check_id){
		$p_loaded_array = preg_split( "/\ /", $pages_loaded[5]); 
		$p_l = '1';
		break;
	}
}
if($p_l == '1'){
$load_mods = file('engine/cms_data/mods.cms');
foreach ($load_mods as $mods_loaded){
	$mods_loaded = explode("¦",$mods_loaded);
	if(in_array($mods_loaded[0],$p_loaded_array)){
		$_c_id_m[] = $mods_loaded[0];
	}else {
		$_c_id_m[] = 'NULL';
	}
}
$co=0;
foreach ($p_loaded_array as $give){
	#echo $give;
	if(in_array($give,$_c_id_m)){
		foreach ($load_mods as $give_me_out){
			$give_me_out = explode("¦",$give_me_out);
			if($give_me_out[0] == $give){
				if($give_me_out[4] == '1'){
					if($_GET[LOAD_GET_PAGE] == USER_CMS_PAGE && isset($_GET[USER_GET_PAGE])){
						$construct_title = $secondary_l;
					}else{
						$construct_title = $give_me_out[3];
					}
				
					echo '<div class="tmp_m_content"> 
					 <div  class="tmp_right_title">'.htmlspecialchars(str_replace($modules_text_tile,$modules_text_translate,$give_me_out[3])).'</div>
					<div class="tmp_page_content">';
					if($give_me_out[1] == '1'){
						if(is_file("pages_modules/".$give_me_out[2]."")){
							include('pages_modules/'.$give_me_out[2].'');
						}else{
							echo 'Unable to load module file, reason: not found.';
						}
					}elseif ($give_me_out[1] == '0'){
						if(is_file('engine/cms_data/cms_co/'.$give_me_out[0].'_cms.cms')){
							include('engine/cms_data/cms_co/'.$give_me_out[0].'_cms.cms');
						}else{
							echo 'Unable to load module content, reason: not found.';
						}
					}
					echo '</div> </div>';
				}
			}
		}
	}
}
}
?>
		                  </div></td>
						</tr>
						<tr>
							<td align="center" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/tbl_cbg.gif" height="" valign="top">
								<table width="556" border="0" cellpadding="0" cellspacing="0">
									<tbody>
                                    <tr>									</tr>
								</tbody></table>							</td>
						</tr>
						<tr>
							<td><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/tbl_dbg.gif"></td>
						</tr>
					</tbody></table>
				</td>
<td width="205" valign="top">
	<table width="205" border="0" cellpadding="0" cellspacing="0" height="">
		<tbody><tr>
			<td height="9"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/rnb_tbg_v01.png"></td>
		</tr>
		<tr>
			<td background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/rnb_cbg.gif" valign="top">
				<table width="191" border="0" cellpadding="0" cellspacing="0">
					<tbody><tr>
						<td width="7"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/side_deco_r.gif"></td>
						<td width="184"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/sign_tit01.gif"></td>
					</tr>
					<tr height="43">
						<td></td>
						<td align="center" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/sign_cbg.gif">
						  <div align="left">
						    <?
		  if($user_login == '1'){
		  	echo '<div class="sidemenu"><ul>
  <span class="">';
		$m_uss_row_ = get_sort('engine/cms_data/mods_uss.cms','¦');
 	 	$count_m_uss = 0;
		foreach ($m_uss_row_ as $tr){
			explode("¦",$tr);
			$count_m_uss++;
			if($tr[6] == '1'){
				if($tr[3] != ACCOUNTSETTINGS_CMS_USER){
					echo '<li class="list_menu"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.$tr[3].'">'.str_replace($menu_links_title,$menu_links_translated,$tr[2]).'</a></li>';
				}
				
			}
		}
		echo '</span></ul>
		 </div>
		 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="4">
		 <tr>
		  <td align="left" class="yellow"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.ACCOUNTSETTINGS_CMS_USER.'">'.link_account_settings.'</a></td>
		  <td align="right" class="yellow"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'=logout">'.link_log_out.'</a></td>
		 </tr>
		 </table>
		 
		 ';
		  }else{
		  	echo '<form method="post" action="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOGIN_CMS_PAGE.'" name="uss_login_form">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr>
    <td   width="120"><input type="text" size="18" name="uss_id" maxlength="10" class="FlareMU_LoginForm" value="USER ID" OnClick="this.value=\'\'"></td>
    <td width="1171" rowspan="2" valign="middle"><input type="image" src="template/'.$core['config']['template'].'/template/template_002/immagini/sign_btn01.gif"  onclick="uss_login_form.submit();"></td>
  </tr>

  <tr>
    <td ><input type="password" name="uss_password" size="18" class="FlareMU_LoginForm" value="PASSWORD" maxlength="12" OnClick="this.value=\'\'">
    <input type="hidden" name="process_login"></td>
  </tr>
<tr>
					  <td colspan="2" style="background-image: url(template/'.$core['config']['template'].'/images/inner_line.png); height: 2px;" align="left"></td>
					  </tr>

    <tr>
    <td style="height: 25px; padding-left: 2px; font-size: 10px;" colspan="2" align="left"> - <a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOSTPASSWORD_CMS_PAGE.'">'.link_lost_password.'</a<span class="register"><br></span>  - <a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.REGISTER_CMS_PAGE.'">'.link_sign_up.'</a></td>
  </tr>
<tr>
					  <td colspan="2" style="background-image: url(template/'.$core['config']['template'].'/images/inner_line.png); height: 2px;" align="left"></td>
					  </tr>

</table>
</form>';
		  }
		  ?></div></td>									
					</tr>
					<tr height="7">
						<td></td>
						<td background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/sign_cbg.gif"></td>									
					</tr>
					<tr>
						<td></td>
						<td><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/sign_line.gif"></td>
					</tr>
					<tr height="5">
						<td></td>
						<td background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/sign_cbg.gif"></td>									
					</tr>
					<tr height="7">
						<td></td>
						<td background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/sign_cbg.gif"></td>									
					</tr>
					<tr height="36">
						<td></td>
						<td align="center" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/sign_cbg.gif"><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'=';?>register"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/regi_btn.gif"></a></td>								
					</tr>
					<td></td>
						<td><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/sign_dbg.gif"></td>									
					</tr><tr height="0">
						<td></td>
						<td></td>
					</tr>
					<tr height="0">
					  <td></td>
					  <td></td>
					  </tr>
					<tr height="0">
					  <td></td>
					  <td></td>
					  </tr>
					<tr height="1">
					  <td></td>
					  <td></td>
					  </tr>
					<tr height="1">
						<td></td>
						<td></td>
					</tr>
					<tr height="5">
						<td></td>
						<td></td>
					</tr>
				</table><table width="191" border="0" cellpadding="0" cellspacing="0">
					<tbody><tr>
						<td width="7"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/side_deco_r.gif"></td>
						<td width="184"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/sign_tit02.gif"></td>
					</tr>
					<tr height="7">
						<td></td>
						<td background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/sign_cbg.gif"></td>									
					</tr>
					<tr>
						<td></td>
						<td><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/sign_line.gif"></td>
					</tr>
					<tr height="5">
						<td></td>
						<td background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/sign_cbg.gif"></td>									
					</tr>
					<tr height="7">
					  <td></td>
					  <td background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/sign_cbg.gif"></td>									
					  </tr>
					<tr>
					  <td></td>
					  <td><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/sign_dbg.gif"></td>									
					  </tr><tr height="5">
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'=';?>downloads"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/down_btn.gif"></a></td>									
					</tr>
					<tr height="5">
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>rankings"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/ggw_btn.gif"></a></td>									
					</tr>
					<tr height="5">
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<a href="/forum/"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/forum_btn.gif"></a></td>									
					</tr>
					<tr height="5">
						<td></td>
						<td></td>
					</tr>
					<tr height="5">
						<td></td>
						<td></td>
					</tr>
					<tr height="5">
						<td></td>
						<td></td>
					</tr>
				</tbody></table>			</td>
		</tr>
		<tr>
			<td height="20"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/rnb_dbg.gif"></td>
		</tr>
	</tbody></table>
</td>

			</tr>
			<tr>
				<td height="50"></td>
			</tr>
		</tbody></table>
	</td>
</tr>
<tr>
	<td>
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr>
				<td style="padding: 3px 0pt 0pt;" align="center" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/fmenu_bg.gif" height="38">
					<table width="1010" border="0" cellpadding="0" cellspacing="0">
						<tbody><tr>
							<td width="15"></td>
							<td width="78"><a href="index.php?page_id=terms"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/terms.gif"></a></td>
							<td width="21"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/f_vline.gif"></td>
							<td width="83"><a href="#"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/privacy.gif"></a></td>
							<td width="21"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/f_vline.gif"></td>
							<td width="61"><a href="index.php?page_id=contact"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/contacts.gif"></a></td>
							<td width="583"></td>
						</tr>
					</tbody></table>
				</td>
			</tr>
			<tr>
				<td align="center" bgcolor="#000000"><img src="template/<?=$core['config']['template'] ?>/template/template_002/immagini/fline.gif"></td>
			</tr>			
			<tr>
				<td style="padding: 20px 0pt 0pt;" align="center" background="template/<?=$core['config']['template'] ?>/template/template_002/immagini/copy_bg.gif" height="130" valign="top"><div id='footer'>
                    <?=build_footer(),$XX= base64_decode('VGVtcGxhdGUgQnkgUkpRUCA=');?></td>
			</tr>
		</tbody></table>
	</td>
</tr>
</tbody></table>
<div id="_ilx_updateIcon_"></div><div id="_alertShown_"></div></body>
</html>