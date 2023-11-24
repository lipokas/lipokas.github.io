<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?=build_header_seo(); ?>
<title><?=build_header_title(); ?></title>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script src="js/core_global.js" language="javascript" type="text/javascript"></script>
        <link rel="icon" href="template/<?=$core['config']['template'] ?>/images/favicon.ico" type="image/gif">
        <link href="template/<?=$core['config']['template'] ?>/css/index3cbf.css?v2.3" type="text/css" rel="stylesheet" />
        <link href="template/<?=$core['config']['template'] ?>/css/index7ea3.css?1317321210" type="text/css" rel="stylesheet" />
        <script src="template/<?=$core['config']['template'] ?>/script/jquery.js" type="text/javascript"></script>
        <script src="template/<?=$core['config']['template'] ?>/script/jquery-ui56c2.js?v.01" type="text/javascript"></script>
        <script src="template/<?=$core['config']['template'] ?>/script/common56c2.js?v.01" type="text/javascript"></script>

        <style type="text/css">
<!--
.tmp_left_m {}
.tmp_left_title {background:url(template/<?=$core['config']['template'] ?>/imagesnew/left_title_bg.jpg); height:39px; width:228px; font: 13px/33px Tahoma, Helvetica, sans-serif; text-align:center; color:#fff }
.Estilo39 {font-family: Arial, Helvetica, sans-serif}
-->
        </style>
</head>
<body>

	<div id="container">
	<div id="topbar">
		<div class="tbleft">
	<h1>Bienvenidos a nuestro servidor Season6 24Horas Online! </h1>
</div>
<div class="tbright"><span class="general">
  <?
		  if($user_login == '1'){
		  	echo '';
		$m_uss_row_ = get_sort('engine/cms_data/mods_uss.cms',',');
 	 	$count_m_uss = 0;
		foreach ($m_uss_row_ as $tr){
			explode(",",$tr);
			$count_m_uss++;
			if($tr[6] == '1'){
				if($tr[3] != ACCOUNTSETTINGS_CMS_USER){
					echo '';
				}
				
			}
		}
		echo 'Bienvenido '.$_SESSION['user_auth_id'].', Disfruta del Juego...';
		  }else{
		  	echo '<form method="post" action="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOGIN_CMS_PAGE.'" name="uss_login_form">
<table cellpadding="0" cellspacing="0" width="277">
<tr>
<td style="padding-bottom:0px;">
<input type="text" name="uss_id" maxlength="10" value="Usuario"  style="background-color:#0c0c0c; border-color:#373737; color:#766b52; height:18px; font-size:12px; padding-top:3px; padding-left:3px;" OnClick="this.value=\'\'">
</td>
<td style="padding-bottom:0px;">
<input type="password" name="uss_password" class="login_field" value="Password" size="16" maxlength="10" style="background-color:#0c0c0c; border-color:#373737; color:#766b52; height:18px; font-size:12px; padding-top:3px; padding-left:3px;" OnClick="this.value=\'\'"><input type="hidden" name="process_login">
</td>
<td style="padding-bottom:0px;">
<input type="image" src="template/'.$core['config']['template'].'/images/login.jpg" style="height:23px;width:23px;padding:0px;border:0px;cursor:pointer;" onclick="uss_login_form.submit();"></td></tr></table></form>';
		  }
		  ?>
</span></div>	
	</div>
		<div id="wrapper">
			<div id="header">
				<a href="index.php" id="logo" title="PandoraMU Season 5"><img src="template/<?=$core['config']['template'] ?>/images/logo.png" alt="Pandora MU Online Server" width="1" height="1" /></a>
<div id="mainmenu" align="center">
	<div>
	<a href="index.php" class="home" title="Pandora MU Online"><span>home</span></a>
	<i></i>
	<a href="index.php?page_id=register" class="registration" title="Create a New Account"><span>register</span></a>
	<i></i>
	<a href="index.php?page_id=user_cp&panel=reset_character" class="my-account" title="Manage your account and characters"><span>my cuenta </span></a>
	<i></i>
	<a href="index.php?page_id=rankings" class="rankings" title="Check the recent tops"><span>rankings</span></a>
	<i></i>
	<a href="index.php?page_id=downloads" class="downloads" title="Download our Client or Patch"><span>downloads</span></a><br />
	</div>
</div>
			</div>
			<div id="content">
						<div class="homecenter">
<div class="homenews"><span style="background-image:url(template/<?=$core['config']['template'] ?>/Themes/SoulMu/img/bg_sub.gif); background-repeat:repeat-y; ">
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
					  <td rowspan="3" align="left" width="60"><img src="template/'.$core['config']['template'].'/Themes/SoulMu/img/announcement.gif" width="38" height="38"></td>
					  <td align="left" style="padding-top: 2px; padding-bottom: 2px;"><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.ANNOUNCEMENTS_CMS_PAGE.'#announcement-'.$ann_id.'">'.$ann_title.'</a></td>
					  <td align="right" class="ann_date">'.date('F j, Y | H:i',$ann_date).'</td>
					  </tr>
					  <tr>
					  <td colspan="2"  align="left" style="background-image:url(template/'.$core['config']['template'].'/Themes/SoulMu/img/inner_line.jpg); height: 2px;"></td>
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
</span>
  <div id="accordion">
    <div>
		    	<div class="ncont">
<table width="680" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td style="background-image:url(template/<?=$core['config']['template'] ?>/Battle/images/bg_sub.gif); background-repeat:repeat-y; "><div class="where_nav">
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
    </td>
  </tr>
  <tbody>
    <tr>
      <td style="background-image:url(template/<?=$core['config']['template'] ?>/Battle/images/bg_sub_bottom.gif); background-repeat:no-repeat; height:10px; ">&nbsp;</td>
    </tr>
  </tbody>
</table>
                </div>
	    	</div>
    	  </div>
</div>

<br />
		
</div>
<div class="homeright">
  <p><img style="margin-left: 4px; padding-top: 5px;" src="template/<?=$core['config']['template'] ?>/images/votepanel.png"><br/>
      <img style="margin-left: 4px; padding-top: 5px;" src="template/<?=$core['config']['template'] ?>/images/donate.png"><br/>
      <a href="tienda"><img src="template/<?=$core['config']['template'] ?>/images/webshop.png" border="0" style="margin-left: 4px; padding-top: 5px;"></a></p>
  <table width="228" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td  class="tmp_left_title"><?=text_member_area; ?></td>
    </tr>
    <tr>
      <td height="30" background="template/<?=$core['config']['template'] ?>/imagesnew/menuitem.jpg" valign="middle"><div class="tmp_left_m">
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
		  	echo '<div style="text-align: center; font-size: 11px; color: #ffcb05;">Debes Iniciar Sesi&oacute;n...</div>';
		  }
		  ?>
      </div></td>
    </tr>
    <?=$XX= base64_decode('PCEtLSBUZW1wbGF0ZSBBdmFudGFzaWEgQnkgcE9zSG9CZUxsb3hEIFBhcmEgSUcgLS0+IA==');?>
  </table>
  <div class="hbox">
    <h3>Server status</h3>
 		<div class="cont realminfo">
 		  <div class="top10-item">
 		    <div class="top10-name">
 		      <p>
 		        <?
//Estadisticas Usuarios

$statistics_accounts=mssql_query("SELECT count(*) memb___id FROM MuOnline.dbo.MEMB_INFO");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['accounts_reults']=$row['memb___id'];
?></p>
 		      </div>
 		    <div class="top10-level">Experiencia: 1000x</div>
 		    </div>
 		  <div class="top10-item">
            <div class="top10-name">Drop: <span class="top10-level">80%</span></div>
 		    <div class="top10-level"></div>
 		    </div>
 		  <div class="top10-item">
            <div class="top10-name">Cuentas Existentes: <span class="top10-level">
              <?=$core['accounts_reults'];?>
              </span>
                <?

}
?>
                <?
//Estadisticas Personajes

$statistics_accounts=mssql_query("SELECT count(*) AccountID FROM MuOnline.dbo.Character");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['character_reults']=$row['AccountID'];
?>
            </div>
 		    <div class="top10-level"></div>
 		    </div>
 		  <div class="top10-item">
            <div class="top10-name">Personajes Creados: <span class="top10-level">
              <?=$core['character_reults'];?>
              </span>
                <?

}
?>
                <?
//Estadisticas Clanes

$statistics_accounts=mssql_query("SELECT count(*) G_Name FROM MuOnline.dbo.Guild");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['guild_reults']=$row['G_Name'];
?>
            </div>
 		    <div class="top10-level"></div>
 		    </div>
 		  <div class="top10-item">
            <div class="top10-name">Clanes Creados: <span class="top10-level">
              <?=$core['guild_reults'];?>
              </span>
                <?

}
?>
            </div>
 		    <div class="top10-level"></div>
 		    </div>
 		  <div class="top10-item">
            <div class="top10-name"><?
//Estadisticas Usuarios Conectados

$statistics_players=mssql_query("SELECT count(*) ConnectStat FROM MuOnline.dbo.MEMB_STAT WHERE ConnectStat='1'");
while($row=mssql_fetch_assoc($statistics_players)){
$core['config']['statistics_results']=$row['ConnectStat'];
?>
            </div>
 		    <div class="top10-level"></div>
 		    </div>
 		  <div class="top10-item">
            <div class="top10-name">Usuarios Conectados:<span class="top10-level">
              <?=$core['config']['statistics_results'];?>
              </span>
                <?
}
?>
            </div>
 		    <div class="top10-level"></div>
 		    </div>
 		  <div class="top10-item">
            <div class="top10-name">Servidor: <span class="top10-level">
              <? include("status/statuspag.php"); ?>
            </span></div>
 		    </div>
 		</div>
	</div>

	<div class="hbox">
		<h3>MEN&Uacute;</h3>
 		<div class="cont realminfo">
 		  <div align="left"><span class="Estilo39">
 		    <?
					  $m_row_ = get_sort('engine/cms_data/pag_d.cms',',');
					#  echo $test[1][2][3];
					  foreach ($m_row_ as $li){
					 #  explode(",",$li);
					   switch ($li[7]){
					   	case '0':
					   		if($li[8] == '1'){
					   			if($li[6] != '0'){
					   				echo '<li class="d2_mnu"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$li[3].'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a></li>';
					   			}
					   	
					   		}
					   		break;
					   	case '1':
					   		switch ($li[11]){
					   			case '1': $target = "_blank"; break;
					   			case '0': $target = "_self"; break;
					   		}
					   		echo '<li class="d2_mnu"><a  href="'.$li[10].'"  target="'.$target.'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a></li>  ';
					   	
					   	break;
					   }


					  	
					  }
					  
		  ?>
 		  </span></div>
		
		</div>
	</div>
</div>
<br class="clear" />
<script type="text/javascript">

$(document).ready(function(){
	$(function() {
		var icons = {
			header: "ui-icon-circle-arrow-e",
			headerSelected: "ui-icon-circle-arrow-s"
		};
		$("#accordion").accordion({
			icons: icons,
			autoHeight: false
		});
	});
});

</script> 
			</div>
			<div id="footer">
				<div class="links"><br class="clear" />
</div>
<div class="rights">
  <div align="center">
    <?=build_footer(),$XX= base64_decode('VGVtcGxhdGUgYWRhcHRhZG8gcG9yIEthc3Bhcg==');?>
  </div>
</div>			
			</div>
		
		</div>
	</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11021809-2']);
  _gaq.push(['_setDomainName', '.pandoramu.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>

<!-- Mirrored from www.pandoramu.com/ by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 31 Oct 2011 08:01:30 GMT -->
</html>