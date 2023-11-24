<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?=build_header_seo(); ?>
<title><?=build_header_title(); ?></title>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script src="js/core_global.js" language="javascript" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="template/<?=$core['config']['template'] ?>/style.css" />
<!--SlideShow Files -->
<link rel="stylesheet" type="text/css" href="template/<?=$core['config']['template'] ?>/slideshow.css" />
<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/js/jq_1.4.4.js"></script>
<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/js/jq_slideshow.js"></script>
<style type="text/css">
<!--
.tmp_left_m {
	padding: 0px;
	font: 12px arial, verdana, sans-serif;
}
-->
</style>
</head>

<body>
<div class="con1">
	<div class="top_bar_con">
    	<div class="top_bar_con2">
            <div class="top_bar_text">
                Bienvenido a Mu SephiroT
            </div>
        </div>
    </div>
    <div class="header_bar_con1">
    	<div class="header_bar_con2">
        	<p align="left"><div class="logo_con">
            	<a href="#"><img src="template/<?=$core['config']['template'] ?>/images/logo.png" alt="Mu SephiroT" /></a>
            </div></p>
            <div class="twitter_update_con">
            	<div class="twitter_title">Mu Sephirot</div>
                <div class="twitter_text_con">
                	<div class="twitter_text">
                    	Preparate para vivir la experiencia mas asombrosa de tu vida junto a nosotros, que esperas!<a href="#"></a>
                    </div>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
    <div class="con2">
    	<div class="con3">
        	<div class="menu_bar_con">
            	<ul class="top_menu">
                	<li><a href="/index.php" id="on">Principal</a></li>
                    <li><a href="/index.php?page_id=downloads">Descargas</a></li>
                    <li><a href="index.php?page_id=rankings">Ranking</a></li>
                    <li><a href="#">Foro</a></li>
                    <li><a href="#">Castle Siege</a></li>
                    <li><a href="#">WebShop</a></li>
                    <li><a href="/index.php?page_id=banned">Baneados</a></li>
                    <li><a href="/index.php?page_id=contact">Cont&aacute;ctanos</a></li>
                </ul>
          </div>
            <div class="menu_bar_border_bottom"></div>
            <div class="main_con">
            	<div class="left_col">
                	<div class="slideshow_con">
                        <div class="wrapper">
                            <div id="slidewrap">
                                <ul class="slideshow">
                                    <li class="show"><a href="#"><img src="template/<?=$core['config']['template'] ?>/images/slideshow_1.jpg" title="Slide 1" alt="Short Description"/></a></li>
                                    <li><a href="#"><img src="template/<?=$core['config']['template'] ?>/images/slideshow_2.jpg" title="Slide 2" alt="Short Description"/></a></li>
                                    <li><a href="#"><img src="template/<?=$core['config']['template'] ?>/images/slideshow_3.jpg" title="Slide 3" alt="Short Description"/></a></li>
                                </ul>
                            </div>    
                            <div class="clr" ></div>
                        </div>
                    </div>
                    <div class="main_news_con">
                    	<div class="main_news_post"><?
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
                  <td align="left"></td>
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

                    	  <div class="clr"></div>
                        </div>
                    	<div class="main_news_post">
                          <div class="clr"></div>
                        </div>
</div>
                                                    	  <center><a href="www.hostingroup.com" target="_blank"><img src="http://i272.photobucket.com/albums/jj178/balrockxd/publi.jpg" border="0" alt="HostinGroup"></a></center>
                </div>
                <div class="right_col">
                	<div class="right_col_latest_matches">
                    	<div class="right_col_header">
                        	<span>+ Panel de <span>Usuarios</span></span></div>
                    	<div class="right_col_latest_matches_box">
                    	  <table width="200" border="0" align="center" cellpadding="0" cellspacing="0">
                    	    <tr>
                    	      <td width="0"><center>
                    	        <p>
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
		 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
		 <tr>
		  <td align="left" class="yellow"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.ACCOUNTSETTINGS_CMS_USER.'">'.link_account_settings.'</a></td>
		  <td align="right" class="yellow"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'=logout">'.link_log_out.'</a></td>
		 </tr>
		 </table>
		 
		 ';
		  }else{
		  	echo '<form method="post" action="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOGIN_CMS_PAGE.'" name="uss_login_form">
										
										<table width="176" cellpadding="0" cellspacing="0">
											<tr>
												<td><input type="text" name="uss_id" value="Username" size="30" class="bTN_CMS_USER" OnClick="this.value=\'\'" /></td>
											</tr>
											<tr>
												<td>
													<table width="176" border="0" cellspacing="0" cellpadding="0">
														<tr>
															<td width="107"><input type="password" name="uss_password" value="" size="30"  class="bTN_CMS_PASSWORD" /><input type="hidden" name="process_login"></td>
															<td width="69"><input name="image" type="image" src="template/'.$core['config']['template'].'/images/in.gif" onClick="uss_login_form.submit();">
															<br>
								</td>
														</tr>
													</table><br>															                    	        <a href="/index.php?page_id=register">Reg&iacute;strate</a><br>
                    	        <a href="/index.php?page_id=lost_password">Recuperar Clave</a>
												</td>
											</tr>
										</table>
									</form>	';
		  }
		  ?>
                  	          </p>
                    	      </center></td>
                  	      </tr>
                  	    </table>
                    	</div>
                    </div>
                    <div class="right_col_latest_threads">
                    	<div class="right_col_header">
                        	<span>+<span>Stats</span></span></div>
<div class="right_col_latest_matches_box"><table width="182" border="0" align="center" cellpadding="1" cellspacing="1" class="fields">						
															<tr>
															  <td width="136">Mu SephiroT:</td><td width="48"><span style="color:green;"><? 
if (eregi("status/servidor.php", $_SERVER['SCRIPT_NAME'])) { die ("Access Denied"); }
require 'engine/global_config.php';

$hostingroup = "46.105.241.51";
if ($check=@fsockopen($hostingroup,55901,$ERROR_NO,$ERROR_STR,(float)0.5)) 
	{ 
	fclose($check); 
	echo 'Online'; 
	}
else 
	{ 
	echo 'Offline'; 
	} 
?></span></td></tr>
															<tr>
<td width="136">Mu SephiroT CS:</td><td width="48"><span style="color:green;"><? 
if (eregi("status/servidor.php", $_SERVER['SCRIPT_NAME'])) { die ("Access Denied"); }
require 'engine/global_config.php';

$hostingroup = "46.105.241.51";
if ($check=@fsockopen($hostingroup,55919,$ERROR_NO,$ERROR_STR,(float)0.5)) 
	{ 
	fclose($check); 
	echo 'Online'; 
	}
else 
	{ 
	echo 'Offline'; 
	} 
?></span></td></tr>
														<tr><td colspan="2">&nbsp;</td></tr>
							<tr>
								<td width="136">Total Online:</td>
								<td width="55"><a href="index.php?page_id=online"><span id="online_users"><script>refresh_online();</script></span><? $onlinepl = mssql_query("SELECT count(*) From MEMB_STAT where Connectstat='1'");
$online = mssql_result($onlinepl, 0, 0); echo "$online";
?> / 100</a></td>
							</tr>
							<tr>
								<td>Cuentas:</td>
								<td><a href="#"><? $accounts = mssql_query("SELECT count(*) FROM MEMB_INFO");
$totalacc = mssql_fetch_row($accounts); echo"$totalacc[0]"; ?></a></td>
							</tr>
							<tr>
								<td>Personajes:</td>
								<td><a href="#"><?
$sql = mssql_query("SELECT count(*) FROM Character");
echo mssql_result($sql, 0, 0); ?></a></td>
							</tr>
						</table>
					</td>
				</tr>
</table> </div>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
            <div class="footer_con">
            	<div class="footer_left">
               	  <div class="footer_my_accout"><style type="text/css">
<!--
body,td,th {
	color: #CCCCCC;
}
-->
</style><table width="67%" border="0" align="center" cellpadding="2" cellspacing="0" bordercolor="#999999" class="tops">
      <tr>
        <td align="left"><div align="center"><span style="font-size: 13px;"><img src="http://img696.imageshack.us/img696/5634/t5r.png" width="115" height="17"></span></div></td>
        <td align="left"><div align="center"><span style="font-size: 13px;"><img src="http://img820.imageshack.us/img820/8953/t5l.png" width="115" height="17"></span></div></td>
        <td align="left"><div align="center"><span style="font-size: 13px;"><img src="http://img192.imageshack.us/img192/6954/t5k.png" width="115" height="17"></span></div></td>
        <td align="left"><div align="center"><span style="font-size: 13px;"><img src="http://img34.imageshack.us/img34/4488/t5g.png" width="115" height="17"></span></div></td>
      </tr>
      <tr>
        <td align="left" valign="middle"><div align="center">
          <? 
			  $Top = mssql_query("select top 5 name,resets from character where ctlcode<2 order by resets desc");
			  for($i=0;$i<mssql_num_rows($Top);$i++) {
			  $DadosTop = mssql_fetch_row($Top);
			  $rank = $i+1;
			  echo '
			  '.$rank.' - <font color=#CCCCCC><strong>'.$DadosTop[0].'</strong> -<strong>'.$DadosTop[1].'</strong><br>
				'; } ?>
        </div></td>
        <td align="left" valign="middle"><div align="center">
          <? 
			  $Top = mssql_query("select top 5 name,cLevel from character where ctlcode<2 order by cLevel desc");
			  for($i=0;$i<mssql_num_rows($Top);$i++) {
			  $DadosTop = mssql_fetch_row($Top);
			  $rank = $i+1;
			  echo '
			  '.$rank.' - <font color=#CCCCCC><strong>'.$DadosTop[0].'</strong> - <strong>'.$DadosTop[1].'</strong> <br>
				'; } 
				?>
        </div></td>
        <td align="left" valign="middle"><div align="center">
          <? 
			  $Top = mssql_query("select top 5 name,PkCount from character where ctlcode<2 order by PkCount desc");
			  for($i=0;$i<mssql_num_rows($Top);$i++) {
			  $DadosTop = mssql_fetch_row($Top);
			  $rank = $i+1;
			  echo '
			  '.$rank.' - <font color=#CCCCCC><strong>'.$DadosTop[0].'</strong> - <strong>'.$DadosTop[1].'</strong> <br>
				'; } 
				?>
        </div></td>
        <td align="left" valign="middle"><div align="center">
          <? 
			  $Top = mssql_query("select top 5 G_Name,G_Score from guild order by G_Score desc");
			  for($i=0;$i<mssql_num_rows($Top);$i++) {
			  $DadosTop = mssql_fetch_row($Top);
			  $rank = $i+1;
			  echo '
			  '.$rank.' - <font color=#CCCCCC><strong>'.$DadosTop[0].'</strong> - <strong>'.$DadosTop[1].'</strong><font color=#66FF00> <br><font color=#66FF00>
				'; } 
				?>
        </div>
      </tr>
    </table>

</div>
                    <div class="footer_social"></div>
                  <div class="footer_team_members"></div>
                </div>
                <div class="footer_right">
                	<div class="footer_right_content">
                    	<div class="fooer_right_copyright">
                        	<p>Copyright &copy; 2010 Theme adaptada por M4NU31</p>
                        	<p>www.sephirot-games.net<a href="#"></a></p>
                        </div>
                        <div class="footer_sitemap"> </div>
                    </div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
    </div>
</div>
</body>
</html>