<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?=build_header_seo(); ?>
<title><?=build_header_title(); ?></title>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script src="js/core_global.js" language="javascript" type="text/javascript"></script>
		<link href="template/<?=$core['config']['template'] ?>/images/global_style.css" rel="stylesheet" type="text/css" />
		<link href="template/<?=$core['config']['template'] ?>/images/sortabletable.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="template/<?=$core['config']['template'] ?>/images/favicon.ico" />
		<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/images/security.js"></script>
		<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/images/overlib.js"></script>
		<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/images/menubuttons.js"></script>
		<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/images/jquery.js"></script>
		<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/images/ajax.js"></script>
	</head>
	
	<body>
		<table align="center" border="0" cellpadding="0" cellspacing="0" width="100">
			<tr>
				<td>
				<img src="template/<?=$core['config']['template'] ?>/images/logo.jpg" border="0" width="1024" height="319" alt="Mu Online Header" />
				</td>
			</tr>

			<tr>
			<td>
			<table border="0" cellpadding="0" cellspacing="0" width="100">
			<tr>
				<td valign="top">
				<img src="template/<?=$core['config']['template'] ?>/images/Left.png" alt="menu background" width="19" height="445" />
				</td>
				<td valign="top"><table border="0" cellpadding="0" cellspacing="0" width="100">


<tr>
	<td>
	<img src='template/<?=$core['config']['template'] ?>/images/Login.png' alt='Login menu' width='201px' height='60px' />
	</td>
</tr>
<tr>
	<td style='background:url(template/<?=$core['config']['template'] ?>/images/Log_mid.png);'>
	<table align='center' border='0' cellpadding='0' cellspacing='0' width='179'>
<tr>
<td> 
<table align='center' border='0' cellpadding='0' cellspacing='0' width='167'>

<tr>
	<td>
	<td>
	<table border='0' cellpadding='0' cellspacing='0' width='167'>
<tr>
	<td>
<?
		  if($user_login == '1'){
		  	echo '<div class="tmp_left_menu">
		  	<ul>';
		$m_uss_row_ = get_sort('engine/cms_data/mods_uss.cms',',');
 	 	$count_m_uss = 0;
		foreach ($m_uss_row_ as $tr){
			explode(",",$tr);
			$count_m_uss++;
			if($tr[6] == '1'){
				if($tr[3] != ACCOUNTSETTINGS_CMS_USER){
					echo '<li class="list_menu"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.$tr[3].'">'.str_replace($menu_links_title,$menu_links_translated,$tr[2]).'</a></li>';
				}
				
			}
		}
		echo ' </ul>
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
			 <table width="121" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
      <td style="height: 20px; padding-left: 2px;  " width="121"><input type="text" name="uss_id" maxlength="10" size="12" class="login_field" value="USER ID" OnClick="this.value=\'\'"></td>
    <td rowspan="2"><input type="image" src="template/'.$core['config']['template'].'/images/logg.png" width="54" height="50" onclick="uss_login_form.submit();"></td>
  </tr>
  <tr>
    <td style="height: 20px; padding-left: 2px;"><input type="password" name="uss_password" class="login_field" value="PASSWORD" maxlength="12" size="12" OnClick="this.value=\'\'"><input type="hidden" name="process_login"></td>
  </tr>
    <tr>
    <td style="height: 25px; padding-left: 2px;" colspan="2" align="left" class="yellow"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOSTPASSWORD_CMS_PAGE.'">'.link_lost_password.'</a></td>
  </tr>
     <tr>
    <td style="height: 25px; padding-left: 2px;"  colspan="2" align="left"  class="yellow">'.text_start_play_now.'</span> <a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.REGISTER_CMS_PAGE.'">'.link_sign_up.'</a></td>
  </tr>
</table>
</form>';
		  }
		  ?>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>

	<tr>
    <td><img src='template/<?=$core['config']['template'] ?>/images/menu_lo.gif' width='201' height='21' alt='Login menu down' /></td>
    </tr>          <tr>
            <td><img src="template/<?=$core['config']['template'] ?>/images/menu_.gif" width="201" height="44" alt="Menu top" /></td>
          </tr>
          <tr>
            <td style="background:url(template/<?=$core['config']['template'] ?>/images/menu_mid.gif);"><table align="center" border="0" cellpadding="0" cellspacing="1" width="140">
              <tbody>
			  <tr>
			  <td>
			  <img src='template/<?=$core['config']['template'] ?>/images/space_login.png'>
			  </td>
                <td width="40"></td>
    <?
					  $m_row_ = get_sort('engine/cms_data/pag_d.cms',',');
					#  echo $test[1][2][3];
					  foreach ($m_row_ as $li){
					 #  explode(",",$li);
					   switch ($li[7]){
					   	case '0':
					   		if($li[8] == '1'){
					   			if($li[6] != '0'){
					   				echo '<br><img border="0" src="http://img847.imageshack.us/img847/9061/menudarksweb.png"> <a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$li[3].'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a>';
					   			}
					   	
					   		}
					   		break;
					   	case '1':
					   		switch ($li[11]){
					   			case '1': $target = "_blank"; break;
					   			case '0': $target = "_self"; break;
					   		}
					   		echo '<br><img border="0" src="http://img847.imageshack.us/img847/9061/menudarksweb.png"> <a  href="'.$li[10].'"  target="'.$target.'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a>  ';
					   	
					   	break;
					   }


					  	
					  }
					  
		  ?>
		  </td>
              </tr>
            </tbody></table></td>
          </tr>
          <tr>
            <td><img src="template/<?=$core['config']['template'] ?>/images/menu_v.gif" width="201" height="66" alt="About menu" /></td>
          </tr>
          <tr>
            <td style="background:url(template/<?=$core['config']['template'] ?>/images/menu_mid.gif);"><table border="0" width="170" align="center" cellpadding="0" cellspacing="0">
              <tbody>
	      <tr>
                <td><b><font color="#98794c">Characteristics:</font></b></td>
              </tr>
	      <tr>
                <td >Server:</td>
                <td ><font color="#98794c"> Frozen MU</font></td>
              </tr>
	      <tr>
                <td>Version:</td>
                <td ><font color="#98794c"> Season 4</font></td>
              </tr>
	      <tr>
                <td>Experience:</td>
                <td ><font color="#98794c"> 1000x</font></td>
              </tr>
	      <tr>
                <td>Drop:</td>
                <td ><font color="#98794c"> 50%</font></td>
              </tr>
	<tr>
                <td>Uptime:</td>
                <td ><font color="#98794c">24/7</font></td>
              </tr>
	      <tr>
                <td><b><br /><font color="#8a6b47">Server Status:</font></b></td>
              </tr>
			  
	      <tr>
		  <?
//Estadisticas Usuarios

$statistics_accounts=mssql_query("SELECT count(*) memb___id FROM MuOnline.dbo.MEMB_INFO");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['accounts_reults']=$row['memb___id'];
?>
                <td>Accounts:</td>
                <td ><font color="#98794c"> <?=$core['accounts_reults'];?>
 </font></td>
                <?

}
?>
              </tr>
	      <tr>
		                 <?
//Estadisticas Personajes

$statistics_accounts=mssql_query("SELECT count(*) AccountID FROM MuOnline.dbo.Character");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['character_reults']=$row['AccountID'];
?>
                <td>Characters:</td>
                <td ><font color="#98794c"> <?=$core['character_reults'];?></font></td>
		<?

}
?>
              </tr>
	      <tr>
                <td>Blocked:</td>
                <td > <font color="#98794c">6</font></td>
              </tr>
	      <tr>
		                  <?
		  //Estadisticas Clanes

$statistics_accounts=mssql_query("SELECT count(*) G_Name FROM MuOnline.dbo.Guild");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['guild_reults']=$row['G_Name'];
?>
                <td>Guilds:</td>
                <td > <font color="#98794c"> <?=$core['guild_reults'];?></font></td>
				                <?

}
?>
              </tr>
	      <tr>
                <td>Server Status:</td>
                <td > <? include("server/servidor.php"); ?></td>
              </tr>
<tr>
<td><b><br /><font color="#98794c">In Game Events:</font></b></td>
</tr>
<tr>
<td><div align="left">
Devil Square:</td>
<td><font color="#98794c"><span id=timespan><script>
var dods;
var minute = 31;var secundes = 02;//document.write(55-minute);
dsin = minute * 60 + secundes;
function changeeventtime()
{
dsin = dsin + 1;
dods = 55*60 - dsin;
min = Math.floor(dods/60);
sec = dods%60;
if(dods < 0)
{
document.getElementById("timespan").innerHTML="Open";
}
else
{
if(min < 10) min = "0"+min;
if(sec < 10) sec = "0"+sec;
document.getElementById("timespan").innerHTML=min+":"+sec;
}
window.setTimeout("changeeventtime()",1000);
}
changeeventtime(); 
</script></span></font></div></td>
</tr>
<tr>
<td>Blood Castle:</td>
<td><font color='#98794c'><span id=timespan2><script>
var minute2 = 31;var secundes2 = 02;bcin = minute2 * 60 + secundes2;

if(minute2 > 30) doin = 3600 - bcin;
else doin = -bcin;

dobc = doin + 25*60;
function changeeventtime2()
{
dobc = dobc - 1;
if(dobc < -5*60)
{
dobc = 3600 + 30*60;
dobc = dobc-1;
}
min2 = Math.floor(dobc/60);
sec2 = dobc%60;

if(min2 < 0)
{
document.getElementById("timespan2").innerHTML="Open";
}
else
{
if(min2 < 10) min2 = "0"+min2;
if(sec2 < 10) sec2 = "0"+sec2;
document.getElementById("timespan2").innerHTML=min2+":"+sec2;
}
window.setTimeout("changeeventtime2()",1000);
}
changeeventtime2();
</script></font></span></font></tr>

            </tbody></table></td>
          </tr>
          <tr>
            <td><img src="template/<?=$core['config']['template'] ?>/images/menu_top.gif" alt="Menu" width="201" height="18"></td>
          </tr>
        </tbody></table>
        <td valign="top"><img src="template/<?=$core['config']['template'] ?>/images/mid1.png" alt="Mid background" width="9" height="445"></td>
        <td valign="top"><table border="0" cellpadding="0" cellspacing="0" width="100" height="100%">
          <tbody><tr>
            <td><img src="template/<?=$core['config']['template'] ?>/images/top.gif" alt="Top background" width="100%" height="16"></td>
          </tr>
          <tr>
            <td background="template/<?=$core['config']['template'] ?>/images/topmid.gif"><table align="center" border="0" cellpadding="0" cellspacing="3" width="490" height="24">
              <tbody><tr>
                <td height="18"><center><?=build_header_title(); ?></center></td>
              </tr>
            </tbody></table></td>
          </tr>
          <tr>
            <td><img src="template/<?=$core['config']['template'] ?>/images/content.gif" alt="Content" width="572" height="72"></td>
          </tr>
          <tr>
            <td background="template/<?=$core['config']['template'] ?>/images/content_mid.gif" valign="top" width="100%" height="340" alt="Mid content">
			<table align="center" border="0" cellpadding="0" cellspacing="3" width="490" height="713">
              <tbody><tr>
                <td valign="top" height="707"><table border="0" cellpadding="4" cellspacing="1" width="450"><tbody><tr>
      <td><div id="load"><div class="text_news_content"><br /><div>

<script>
function slidedown() { 
if ($("#rules:first").is(":hidden")) {
$("#rules").slideDown(1600);
} else {
$("#rules").slideUp(1600);
};
}
</script>
<table width="100%">
<tr>
<td class="text_blak">
<?
		  if(CMS_NAVBAR == '1'){
		  	if(isset($_GET[LOAD_GET_PAGE])){
                  	$l_load = file("engine/cms_data/pag_d.cms");
                  	foreach ($l_load as $l_name){
                  		$l_name = explode(",",$l_name);
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
                  		$l2_name = explode(",",$l2_name);
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
		$ann = explode(",",$ann);
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
	$pages_loaded = explode(",",$pages_loaded);
	
	if($pages_loaded[3] == $page_check_id){
		$p_loaded_array = preg_split( "/\ /", $pages_loaded[5]); 
		$p_l = '1';
		break;
	}
}
if($p_l == '1'){
$load_mods = file('engine/cms_data/mods.cms');
foreach ($load_mods as $mods_loaded){
	$mods_loaded = explode(",",$mods_loaded);
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
			$give_me_out = explode(",",$give_me_out);
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
</td>
			</tr>
</table>
</div><br /><br /></div></div></td></tr><tr></tr></tbody><br /></td>
              </tr>
            </tbody></table>
              </td>
          </tr>
        </tbody></table></td></table>
        <td valign="top"><img src="template/<?=$core['config']['template'] ?>/images/mid2.png" width="9" height="445" alt="Second mid"></td>         
        <td valign="top"><table border="0" cellpadding="0" cellspacing="0" width="100">
          <tbody><tr>
            <td valign="top"><img src="template/<?=$core['config']['template'] ?>/images/level_top.gif" alt="level ranking" usemap="#Map2" border="0" width="214" height="142"></td>
          </tr>
          <tr>
            <td background="template/<?=$core['config']['template'] ?>/images/level_mid.gif"><table border="0" cellpadding="0" cellspacing="0" width="196">
              <tbody><tr>
                <td><table align="center" border="0" cellpadding="0" cellspacing="0" width="165">
                  <tbody><tr align="center">

<table width="160" border=0 align="center">
<tr> 
<td valign=top align=left  height=0 class="rank"><b><font color="#98794c">#</font></b></td>
<td valign=top align=left  class="rank"><center><b><font color="#98794c">Character</font></center></b></td>
<td valign=top align=right class="rank"><b><center><font color="#98794c">Lvl/Res</font></center></b></td>
<?
$query=mssql_query("select TOP 15 * from MuOnline.dbo.Character Where ctlcode !='32' and ctlcode !='8' order by Resets desc, cLevel desc");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$levelz=$row['cLevel'];
$resetsz=$row['Resets'];

?>
<tr bgcolor='' class='rank'><td><?=++$count1;?></td>
<td class='rank'><center><?=$namez;?></center></td>
<td align='center' class='rank' ><?=$levelz;?>[<font color='#c79d22'><?=$resetsz;?></font>]</td>
</tr>
<?

}
?>
</font>


                  </tr>
                </tbody></table></td>
              </tr>
            </tbody></table>
			</td>		
          </tr>  
          <tr>
            <td><img src="template/<?=$core['config']['template'] ?>/images/bot_.gif" alt="Bottom" width="214" height="51"></td>
          </tr>
        </tbody></table></td>  
		
      </tr>  
    </tbody></table>
	
  
  
  <tr>
    <td><div style="text-align: center; width: 1024px; height:106px;background: url(template/<?=$core['config']['template'] ?>/images/bot.gif);"><br /><br /><br /><br /><br />
      <?=build_footer(),$XX= base64_decode('VGVtcGxhdGUgYWRhcHRhZG8gcG9yIEthc3Bhcg==');?>
    </div></td>
  </tr>
</tbody></table>
<map name="Map2"><area shape="rect" coords="88,59,182,86" href="index.php?page_id=downloads"></map>
</body>

<!-- Mirrored from www.frozen-mu.com/ by HTTrack Website Copier/3.x [XR&CO'2010], Sun, 16 Oct 2011 12:31:05 GMT -->
</html>
<script  type="text/javascript">
d=document;
d.write('<a href="http://www.tyxo.bg/?88479" title="Tyxo.bg counter" target=" blank"><img width="1" height="1" border="0" alt="Tyxo.bg counter"');
d.write(' src="http://cnt.tyxo.bg/88479?rnd='+Math.round(Math.random()*2147483647));
d.write('&sp='+screen.width+'x'+screen.height+'&r='+escape(d.referrer)+'" /><\/a>');
</script>
<noscript><a href="http://www.tyxo.bg/?88479" title="Tyxo.bg counter" target="_blank"><img src="http://cnt.tyxo.bg/88479" width="1" height="1" border="0" alt="Tyxo.bg counter" /></a></noscript>