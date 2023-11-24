<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?=build_header_seo(); ?>
<title><?=build_header_title(); ?></title>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script src="js/core_global.js" language="javascript" type="text/javascript"></script>
<script type="text/javascript" src="functions_engine/login.js"></script>
<script type="text/javascript" src="functions_engine/iepngfix_tilebg.js"></script>
<style>
download { position:absolute; top:-142px; left:336px; }
</style>
<link href="template/<?=$core['config']['template'] ?>/css/sub.css" type="text/css" rel="stylesheet" />
<style type="text/css">
<!--
.download {
	position:absolute;
	z-index:100;
top:241px; left:266px;
}
textarea {border:1px solid #53462C; background:#2D2212; color:#9B8966; font:bold 10px/14px Verdana; color:#9b8966;
}
html, body, form, fieldset, input, h1, h2, h3, h4, h5, ul, ol, p, li, dl, dt, dd, th, td{margin:0; padding:0; font:normal 11px Arial, Helvetica, sans-serif; color:#cd6a0a; font-weight:normal;}
.login_field{
width:111px; height:18px;
	color: #635E4A;
	border:solid 1px #352B22 ;
	font: bold 11px "Tahoma", Arial, Helvetica, sans-serif;
	background-color: #0F0705;
}
list_menu {
font-size:10px; color:#CC3300;}
#download34 {	position:absolute;
	z-index:100;
top:6px; left:115px;
}
-->
</style>
<script type="text/JavaScript">
<!--



function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
</head>
 <body>


<div id="wrap">
<!-- header S -->
<div id="header">
	<div class="visual"><table width="200" border="0" cellpadding="0" cellspacing="0" class="download">
              <tr>
                <td ><div onclick="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>register'"><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="481" height="130">
                  <param name="movie" value="anime_engine/start.swf" />
                  <param name="quality" value="high" />
				        <param name="wmode" value="transparent" />
                  <embed src="template/<?=$core['config']['template'] ?>/anime_engine/start.swf" wmode="transparent" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="481" height="130"></embed>
                </object></div></td>
              </tr>
          </table>
    </div>
</div>
<!-- header E -->
<!-- container S -->
<div id="container">
	<!-- snb S -->
	<div id="snb">
		<div class="bgSnb">
			
		<!-- login S -->
		
		<!-- login S -->
          <table width="214" height="34" border="0" align="center" cellpadding="0" cellspacing="0">
                           <tr>
                <td height="45">&nbsp;</td>
              </tr> <tr>
                <td height="16"><img src="template/<?=$core['config']['template'] ?>/images/login/h_login.gif" alt="Member's Login" /></td>
              </tr>
              <tr>
                <td height="16"><table width="200" height="196" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td valign="top"><ul>
                    <li>
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
		  	echo '<form method="post" action="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOGIN_CMS_PAGE.'" name="uss_login_form">
			 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="4">
  <tr>
    <td style="height: 25px; padding-left: 2px;  " width="130"><input type="text" name="uss_id" maxlength="10" class="login_field" value="USER ID"></td>
    <td rowspan="2"><input type="image" src="template/'.$core['config']['template'].'/images/login_button.gif" width="52" height="36" onclick="uss_login_form.submit();"></td>
  </tr>
  <tr>
    <td style="height: 25px; padding-left: 2px;"><input type="password" name="uss_password" class="login_field" value="PASSWORD" maxlength="12"><input type="hidden" name="process_login"></td>
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
		  ?></li></ul>
          
		  	</td>
                  </tr>
                </table></td>
              </tr>
          </table>
	      <div class="menu">
			<h2><img SRC="template/<?=$core['config']['template'] ?>/images/common/snb/h2_info.png" alt="GAME INFO" /></h2>
			
			<ul>
			  <li><?
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
					  
		  ?></li>
		  </ul>
		  </div>		
		
		<!-- menu E -->
		
			    
				<div align="center"></div>
	  </div>
		<div class="bgBottom"></div>
	</div>
	<!-- snb E --><!-- content S -->
<div id="content">
		<h2><img SRC="template/<?=$core['config']['template'] ?>/images/info/h2_info.gif" alt="GAME INFO" /></h2>
		<p class="path"><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>rules">Please Read Rules </a><strong></strong></p>
		<h3><img SRC="template/<?=$core['config']['template'] ?>/images/info/h3_skills.gif" alt="Skills (Fighting Techniques)" /></h3>
		<div class="section">
			<ul class="tabMenu">
				<li><a HREF="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>downloads" class="on"><strong>Game Download</strong></a></li>
				<li><a href="http://tienda.muguatire.com.ve"><strong>MUONLINE GAME SHOP</strong></a></li>
								<li><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>donations"><strong>DONATION</strong></a></li>
			</ul>
	  <ul class="tabMenuSub">
				<li><a HREF="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>rankings" class="on">Rankings</a></li>
				<li><a HREF="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>statistics" >Server Info</a></li>
				<li><a HREF="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>gmasters" >Game Masters</a></li>
				<li><a HREF="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>banned" >Exiled Members</a></li>
				<li><a HREF="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>married" >Married People</a></li>
				<li><a HREF="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>chat" >Chat Server</a></li>
				<li><a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>contact" >Contact</a></li>
			</ul>
			
	  <table >
				
				
				<tbody>
				<tr>

					<td width="656" class="scope="col"	><div align="left">
                  
                  <div class="where_nav">
                  <table cellpadding="0" cellspacing="0" border="0" >
                  <tr>
                  <td></td>
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
		</tr>

		</table>
                  </div></td>
				  </tr>
				</tbody>
		<p class="btnContentTop"></p>
  </div>
	<div class="bgContentBottom"></div>
</div><div id="footer">
	<ul>
		<li class="BackgroundNone">
		  <?=build_footer(),$XX= base64_decode('PGRpdiBhbGlnbj0iY2VudGVyIiBjbGFzcz0iZm9vdGVyX2ZvbnQiPlRlbXBsYXRlIGFkYXB0YWRvIHBvciBEQVJZb2kgLSBUb2RhIGxhIGdsb3JpYSBzZWEgcGFyYSBEaW9zLjwvYT48L2Rpdj4=');?>
		</li>
	</ul>
  </div>
<!-- footer E -->
</div>
