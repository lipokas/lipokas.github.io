<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?=build_header_seo(); ?>
<title><?=build_header_title(); ?></title>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script src="js/core_global.js" language="javascript" type="text/javascript"></script>
</head>
<link href="template/<?=$core['config']['template'] ?>/images/style.css" rel="stylesheet" type="text/css">
<link href="template/<?=$core['config']['template'] ?>/images/rank.css" rel="stylesheet" type="text/css">
		<style>
			#lightbox
				{
				position: absolute;
				left: 4px; 
				width: 100%;
				z-index: 100;
				text-align: center; 
				line-height: 0;
				}
			#lightbox img
				{ 
				width: auto; 
				height: auto;
				}
			#lightbox a img
				{
				border: none;
				}
			#outerImageContainer
				{ 
				position: relative;
				background-color: #100605;
				width: 250px; 
				height: 250px;
				margin: 0 auto; 
				}
			#imageContainer
				{ 
				padding: 10px;
				}
			#loading
				{ 
				position: absolute;
				top: 40%;
				left: 0%;
				height: 25%;
				width: 100%;
				text-align: center;
				line-height: 0; 
				}
			#hoverNav
				{
				position: absolute; 
				top: 0; 
				left: 0;
				height: 100%; 
				width: 100%;
				z-index: 10; 
				}
			#imageContainer>#hoverNav
				{ 
				left: 0;
				}
			#hoverNav a
				{ 
				outline: none;
				}
			#prevLink, #nextLink
				{ 
				width: 49%;
				height: 100%;
				background-image: url(data:image/gif;base64,AAAA); /* Trick IE into showing hover */ display: block;
				}
			#prevLink 
				{
				left: 0;
				float: left;
				}
			#nextLink 
				{ 
				right: 0;
				float: right;
				}
			#imageDataContainer
				{
				font: 10px Verdana, Helvetica, sans-serif;
				background-color: #100605;
				margin: 0 auto;
				line-height: 1.4em;
				overflow: auto; 
				width: 100%; 
				}
			#imageData
				{
				padding:0 10px; 
				color: #cc9933; 
				}
			#imageData #imageDetails
				{
				width: 70%;
				float: left;
				text-align: left;
				}
			#imageData #caption
				{ 
				font-weight: bold;
				}
			#imageData #numberDisplay
				{ 
				display: block;
				clear: left;
				padding-bottom: 1.0em;
				}
			#imageData #bottomNavClose
				{
				width: 66px; 
				float: right;
				padding-bottom: 0.7em;
				outline: none;
				}
			#overlay
				{
				position: absolute;
				top: 0;
				left: 0;
				z-index: 90; 
				width: 100%; 
				height: 500px;
				background-color: #000; 
				}
		.style1 {color: #CC6600}
		
		#rss_feed li a{
			    text-decoration: none;
			    }
			
		#rss_feed li a:hover{
                text-decoration: underline;
                }
        </style>
		<!-- /CSS -->
<body>
<script>
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
return false;
}
function mousehandler(e){
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script>
<html>
<head>
        <script type="text/javascript">
            Drag.init(document.getElementById("handle"), document.getElementById("root"));
            if (readCookie("hs_wow_vote") != 1) {
                document.getElementById('root').style.visibility = "visible";
            }
        </script>
		
		<link rel="shortcut icon" href="template/<?=$core['config']['template'] ?>/images/favicon.ico">
	<body onLoad='initLinkPreload(); updateClock(); setInterval("updateClock();",1000);'>
		<div class="announces">
<div align="right" style="width: 1050px;"  class="language_select">
                    <?
                    if($core['language_switch'] == '1'){
                        foreach ($languages as $language_id =>  $language_data){
                            echo '&nbsp;<img  src="template/'.$core['config']['template'].'/images/flags/'.$language_data[2].'">  <a  href="'.ROOT_INDEX.'?change_language='.$language_id.'">'.$language_data[0].'</a>';
                        }
                    }
                    ?></div></div>
		<center>
			<table id="main" cellpadding="0" cellspacing="0">
				<tr></tr>
				<tr>
					<!-- HEADER -->
					<td id="header">
					  <div id="loginbox">
						  
				        <div align="left">
				          <table width="150" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="21">&nbsp;</td>
                              <td width="129"><?
		  if($user_login == '1'){
		  	echo '';
		$m_uss_row_ = get_sort('engine/cms_data/mods_uss.cms','¦');
 	 	$count_m_uss = 0;
		foreach ($m_uss_row_ as $tr){
			explode("¦",$tr);
			$count_m_uss++;
			if($tr[6] == '1'){
				if($tr[3] != ACCOUNTSETTINGS_CMS_USER){
					echo '';
				}
				
			}
		}
		echo '<table width="150" border="0" cellspacing="0" cellpadding="5">
                                <tr>
                                  <td width="5">&nbsp;</td>
                                  <td width="125">     
<table width="300" height="47" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="149">
      <table width="300" border="0">
        <tr valign="middle"><br><br><br>Bienvenido '.$_SESSION['user_auth_id'].', Disfruta del Juego...</tr>
      </table></td>
  </tr>
</table>
</td>
                                </tr>
                              </table>';
		  }else{
		  	echo '<table width="150" border="0" cellspacing="0" cellpadding="5">
                                <tr>
                                  <td width="5">&nbsp;</td>
                                  <td width="125">     
<table width="300" height="47" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="149"><form method="post" action="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOGIN_CMS_PAGE.'" name="uss_login_form">
      <table width="300" border="0">
        <tr>
          <td><img src="template/'.$core['config']['template'].'/images/template/account.png" title="Account"> </td>
        </tr>
        <tr>
          <td><input class="l" name="uss_id" type="text" id="user" OnClick="this.value=\'\'">
          </td>
        </tr>
        <tr>
          <td><img src="template/'.$core['config']['template'].'/images/template/password.png" title="Password"> </td>
        </tr>
        <tr>
          <td><input class="l" name="uss_password" type="password" id="pwd" OnClick="this.value=\'\'"><input type="hidden" name="process_login">
          </td>
        </tr>
        <tr>
          <td><div class="floatleft">
              <table width="150" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><img src="template/'.$core['config']['template'].'/images/template/account_panel.png" style="margin-top: 10px;"></td>
                  <td><span class="floatright" style="margin-right: -3px;">
                    <input name="Submit2" value="Submit" type="image" src="template/'.$core['config']['template'].'/images/template/login_button.png" onclick="uss_login_form.submit();">
                  </span></td>
                </tr>
              </table>
          </div>
              <div class="floatright" style="margin-right: -3px;"></div></td>
          <!--
											<td>
												Logged in!
											</td>
										-->
        </tr>
      </table>
    </form></td>
  </tr>
</table>
</td>
                                </tr>
                              </table>';
		  }
		  ?></td>
                            </tr>
                          </table>
				        </div>
					      </div>					</td>
					<!-- /HEADER -->
				</tr>
				<tr>
					<!-- NAVBAR -->
					<td id="navbar">
						<div class="floatleft">
							<center>
								<a href="<?=ROOT_INDEX?>"><img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/home.png" border="0"></a>
								<img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/spacer.png">
								<a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'=';?>register"><img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/register.png" border="0"></a>
								<img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/spacer.png">
								<a  href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOSTPASSWORD_CMS_PAGE;?>"><img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/lost_password.png" border="0"></a>
								<img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/spacer.png">
								<a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'=';?>downloads"><img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/downloads.png"></a>
								<img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/spacer.png">
								<a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'=';?>rankings"><img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/pranking.png"></a>
								<img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/spacer.png">
								<a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'=';?>rankings&rank=guilds"><img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/granking.png"></a>
								<img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/spacer.png">
								<a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'=';?>topvotes"><img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/gallery.png"></a>
								<img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/spacer.png">
								<a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>webshop"><img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/mushop.png"></a>
								<img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/spacer.png">
								<a href="<?
					  $m_row_ = get_sort('engine/cms_data/pag_d.cms','¦');
					#  echo $test[1][2][3];
					  foreach ($m_row_ as $li){
					 #  explode("¦",$li);
					   switch ($li[7]){
					   	case '0':
					   		if($li[8] == '1'){
					   			if($li[6] != '0'){
					   				echo '';
					   			}
					   	
					   		}
					   		break;
					   	case '1':
					   		switch ($li[11]){
					   			case '1': $target = "_blank"; break;
					   			case '0': $target = "_self"; break;
					   		}
					   		echo ''.$li[10].'"  target="'.$target.'';
					   	
					   	break;
					   }


					  	
					  }
					  
		  ?>"><img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/forum.png" border="0"></a>
								<img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/spacer.png">
								<a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'=';?>contact"><img src="template/<?=$core['config']['template'] ?>/images/navbarTexts/contact.png"></a>
							</center>
						</div>
						<div class="floatright"><span class="title"><?=date('F j, Y | H:i')?></span></div>					</td>
					<!-- /NAVBAR -->
				</tr>
				<tr>
					<!-- DECORATION -->
					<td id="decoration">					</td>
					<!-- /DECORATION -->
				</tr>
				<tr>
					<!-- CONTENT -->
					<td id="content">
						<center>
							<table>
								<tr>
									<td id="smallContent">
										<div style="height: 5px;"></div>
										<div class="title"><?=text_member_area; ?></div>
<?
		  if($user_login == '1'){
		  	echo '<div class="tmp_left_menu">
		  	<ul>';
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
		  	echo '<div style="text-align: center; font-size: 11px; color: rgb(102, 102, 102);">Debes Iniciar Sesión...</div>';
		  }
		  ?>
										<div style="height: 5px;"></div>
										<div class="title"><?=text_menu?></div>
										<ul><?
					  $m_row_ = get_sort('engine/cms_data/pag_d.cms','¦');
					#  echo $test[1][2][3];
					  foreach ($m_row_ as $li){
					 #  explode("¦",$li);
					   switch ($li[7]){
					   	case '0':
					   		if($li[8] == '1'){
					   			if($li[6] != '0'){
					   				echo '<li class="list_menu"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$li[3].'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a></li>';
					   			}
					   	
					   		}
					   		break;
					   	case '1':
					   		switch ($li[11]){
					   			case '1': $target = "_blank"; break;
					   			case '0': $target = "_self"; break;
					   		}
					   		echo '<li class="list_menu"><a  href="'.$li[10].'"  target="'.$target.'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a></li>  ';
					   	
					   	break;
					   }


					  	
					  }
					  
		  ?></ul>	
                                                       <a href="<?
					  $m_row_ = get_sort('engine/cms_data/pag_d.cms','¦');
					#  echo $test[1][2][3];
					  foreach ($m_row_ as $li){
					 #  explode("¦",$li);
					   switch ($li[7]){
					   	case '0':
					   		if($li[8] == '1'){
					   			if($li[6] != '0'){
					   				echo '';
					   			}
					   	
					   		}
					   		break;
					   	case '1':
					   		switch ($li[11]){
					   			case '1': $target = "_blank"; break;
					   			case '0': $target = "_self"; break;
					   		}
					   		echo ''.$li[10].'"  target="'.$target.'';
					   	
					   	break;
					   }


					  	
					  }
					  
		  ?>"><img src="template/<?=$core['config']['template'] ?>/images/voting.png" border="0">	</a>
<br/>
                                                       <a href="vote"><img src="template/<?=$core['config']['template'] ?>/images/forum.png" border="0">	</a>
<br/>
                                                       <a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>webshop"><img src="template/<?=$core['config']['template'] ?>/images/shop.png" border="0">	</a>
<br/>

</td>
									<td>									</td>
									<td id="bigContent">
										<div style="height: 5px;"></div>
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
                  
                  <div class="title">
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
                                        <br/>
									<div style="height: 15px;"></div>									</td>
								</tr>
							</table>
						</center>					</td>
					<!-- /CONTENT -->
				</tr>
				<tr>
					<td>
					</td>
				</tr>
			</table>
		</center>
</body>
</html>
<td><div align="center"><?=build_footer(),$XX= base64_decode('PGRpdiBhbGlnbj0iY2VudGVyIj5UZW1wbGF0ZSBieSBwT3NIb0JlTGxveEQ8L2Rpdj4=');?><!-- <img src="template/<?=$core['config']['template'] ?>/images/template/footer.jpg" width="954" height="117" alt=""> --></div><br></td>
