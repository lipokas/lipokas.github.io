<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?=build_header_seo(); ?>
<title><?=build_header_title(); ?></title>
<link rel="shortcut icon" href="template/<?=$core['config']['template'] ?>/img.mucheat.com/icon.ico" type="image/x-icon">
<link type="text/css" rel="stylesheet" href="template/<?=$core['config']['template'] ?>/style.css">
<link type="text/css" rel="stylesheet" href="template/<?=$core['config']['template'] ?>/jquery.qtip.css">
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script src="js/core_global.js" language="javascript" type="text/javascript"></script>
<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/js/jquery-1.5.1.js"></script>
<script type="text/javascript">
var clock = {
	weekDays : ["DOMINGO","LUNES","MARTES","MIERCOLES","JUEVES","VIERNES","SABADO"],
	monthNames : ["ENE","FEB","MAR","ABR","MAY","JUN","JUL","AGO","SEP","OCT","NOV","DIC"],
	serverDate : {}, // server date obj
	localDate : {}, // local date obj
	dateOffset: {}, // offset ammount
	nowDate : {}, // adjusted date
	dateString : {}, // formated
	el : {}, // element to update
	timeout : {}, // timeout handle
	init : function (date,id,interval) {
		this.calculateOffset(date);
		this.el = document.getElementById(id);
		this.updateClock(interval);
	},
	calculateOffset : function (serverDate) {
		this.serverDate = new Date(serverDate);
		this.localDate = new Date();
		this.dateOffset = this.serverDate - this.localDate;
	},
	updateClock : function (interval) {
		this.nowDate = new Date();
		this.nowDate.setTime(this.nowDate.getTime() + this.dateOffset);
		this.dateFormat(this.nowDate);
		this.el.innerHTML = this.dateString;
		var me = this; this.timeout = setTimeout(function(){me.updateClock(interval)},interval);
	},
	stopClock : function () {
		clearTimeout(this.timeout);
	},
	dateFormat : function (dateObj) {
		this.dateString = '<span  class="remark2">' + this.digit(dateObj.getHours()) + ':' + this.digit(dateObj.getMinutes()) + ':' + this.digit(dateObj.getSeconds()) + '</span>';
		this.dateString += ' ';
		this.dateString += this.monthNames[dateObj.getMonth()] + ' ';
		this.dateString += this.digit(dateObj.getDate()) + ', ';
		this.dateString += dateObj.getFullYear();
	},
	digit : function (str) {
		str = String(str);
		str = str.length == 1 ? "0" + str : str;
		return str;
	}
};	
</script>
<style type="text/css">
fieldset{
border: 1px solid #cccccc;
}

legend{
background: #ECECFF;
border: 1px solid #cccccc;
font: bold 11px Arial, Helvetica, sans-serif;
margin-left: 5px;
}

.ann_date { font:normal 11px/24px Arial, Helvetica, sans-serif; color:#555555; }

.login_field{
background: #4A5952;
border: 0px;
height: 20px;
width: 120px;
color: #222222;
font: bold 11px "Tahoma", Arial, Helvetica, sans-serif;
}

.iN_title{
font-size:17px;
font-weight:bold;

}

.iN_title_mirror{

font-size:17px;
font-weight:bold;
color:#990000;
}

.iN_description{
font:11px/14px Arial, Verdana, sans-serif;
color:#777;

}

.iN_download_title{
font:bold 14px/18px arial; color:#898989;
}

.iN_download_cat{
font-size:17px;
font-weight:bold;
color:#990000;
}


.iN_title a{
font-size:17px;
font-weight:bold;
text-decoration: none;
}



.iN_title a:hover{
font-size:17px;
font-weight:bold;
text-decoration: none;
color:#990000;
}


.iN_date{
font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:10px;
color:#666666;
}

.iN_news_table tr:hover{
background: #ffffff;
}

.iN_news_content{
font-family:Georgia, "Times New Roman", Times, serif;
font-size:13px;
color:#333333;
margin:0px;
padding-top: 6px;
}

.iN_news_content a{
font-family:Georgia, "Times New Roman", Times, serif;
font-size:13px;
margin:0px;
text-decoration: underline;
}

.iN_news_content a:hover{
font-family:Georgia, "Times New Roman", Times, serif;
font-size:13px;
margin:0px;
text-decoration: none;
}

.iN_new_read_more{
color:#ffffff; 
font: 10px Arial, Helvetica, sans-serif; 
background: #8b0e0e;

padding: 1px;
}

.iN_new_read_more a{
color: #ffffff;
font-size: 10px;
}
.iRg_text{
font: bold 13px Arial, sans-serif; color: #555555;
}


.iRg_inf{
font: 11px fantasy;  #555555;
}

.iRg_line{
background:url(template/<?=$core['config']['template']; ?>/images/inner_line.jpg); background-position:bottom; background-repeat:repeat-x;
font: 11px fantasy; color: #555555;
padding-bottom: 4px

}

.iRg_line_top{
background:url(template/<?=$core['config']['template']; ?>/images/inner_line.jpg); background-position:top; background-repeat:repeat-x;
font: 11px fantasy; color: #555555;

}

.iR_func_status{
border: 1px solid #cccccc; 
background: #ffffff; 
padding-left: 4px;
font-size: 11px;
}

.iR_func_status_lacking{
background: #CC3300;
padding: 1px; 
padding-left: 3px; 
padding-right: 3px; 
color: #ffffff;
}


.iR_func_status_free{
background: #00FF00; 
padding: 1px; 
padding-left: 3px; 
padding-right: 3px; 
color: #000000;
}

.iR_func_status_free a{
font-size: 11px;
color: #000000;
}



.iRg_inf a{
font: 11px fantasy; 
text-decoration: underline;
}

.iRg_inf a:hover{
font: 11px fantasy;
text-decoration: none;
}


.iRg_input{

font-size: 10pt;
font-family: verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
background-color: #ffffff;
border: 1px solid #cccccc;
height: 18px;
}



.iRg_terms_agree{
font:  12px Arial, Verdana, sans-serif; 
}

.iRg_terms_agree a{
font:  12px Arial, Verdana, sans-serif; 
text-decoration: underline;
}

.iR_rank{
background-color: #181C18;
font: bold 11px Georgia, "Times New Roman", Times, serif; color: #ffffff;
}

.iR_stats{
font: 11px Georgia, "Times New Roman", Times, serif; color: #ffffff;
background-color: #5F6D5F;
padding: 1px;
}

.iR_stats_2{
font: 11px Georgia, "Times New Roman", Times, serif; color: #ffffff;
background-color: #CCCCFF;
padding: 1px;
color: #555555;
}




.iR_stats_bg{
background-color: #996600;

}



.iR_stats_level{
border: 1px solid #cccccc;
font: 11px Georgia, "Times New Roman", Times, serif; color: #555555;
background: #ECECFF;
padding: 1px;
}

.iR_stats_reset{
border: 1px solid #cccccc;
font: 11px Georgia, "Times New Roman", Times, serif; color: #555555;
background: #CECEFF;
padding: 1px;
}



.iR_name{
font: bold 13px Arial, sans-serif; color: #FF3300;
}

.iR_class{
font: 12px Impact, fantasy; color: #666666;
}

.iR_status{
font-size: 11px;
}

.iR_task{
font:  11px Georgia, "Times New Roman", Times, serif; 
}

.iR_rank_type{
font: bold 16px Arial, sans-serif; 
}

.iR_rank_type a{
font: bold 16px Arial, sans-serif; 
text-decoration: none;
}

.iR_rank_type a:hover{
font: bold 16px Arial, sans-serif;
text-decoration: none;
color: #990000;
}



.iR_rank_type_sub{
font: 10px fantasy; 
}

.iR_rank_type_sub a{
font: 10px fantasy; 
text-decoration: none;
}

.iR_rank_type_sub a:hover{
font: 10px fantasy; color:#990000;
text-decoration: none;
}




.msg_success{
background: #c2ffaf;
border: 1px solid #cccccc; 
padding: 4px;
padding-left: 33px;
margin-bottom: 6px;
margin-top: 6px;
background-image:url(template/<?=$core['config']['template'] ?>/images/success.gif);
background-repeat:no-repeat;
background-position: 10px;
font-size: 11px;
font-weight: bold;
color: #444444;
}

.msg_error{
background: #F9F2B9;
border: 1px solid #cccccc; 
padding: 4px;

padding-left: 33px;
margin-bottom: 6px;
margin-top: 6px;
background-image:url(template/<?=$core['config']['template'] ?>/images/warning.gif);
background-repeat:no-repeat;
background-position: 10px;
font-size: 11px;
font-weight: bold;
color: #444444;
}


.chat_bg{
border: 1px solid #cccccc; 
background: #ffffff; 
padding: 4px;
font-size: 11px;
}

.chat_even{
background: #D7D7FF;
padding: 2px; 
}

.chat_odd{
padding: 2px; 
}


.iD_dashed{
border-top: #ffffff dashed 1px;
}

.downloads tr:hover{
background: #ffffff;
}


.curent_step{
background: #FFEF73; border: 1px solid #cccccc; 
padding: 2px;
font:bold 11px Arial;
color:#555555;
}

.step{
background: #ECECEC; 
border: 1px solid #cccccc; 
padding: 2px;
font:bold 11px Arial;
color: #D4D4D4;
}

.hidden_password{
border: 1px solid #cccccc; 
background: #ECECEC; 
padding: 2px;
width: 200px;
color: #ECECEC;
}

.table_list{
background: #ffffff;
color: #000000;
border: outset 1px #DEE0E2;
}

.table_list .title{
background: #DFDFFF;
font: bold 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
padding: 2px;
padding-left: 4px;
color: #595959;
border: outset 1px #555555;
}

.table_list .even{
background: #ECECFF;
}

.table_list .content{
font: 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
padding: 2px;
padding-left: 4px;
}


#rss_feed{
margin-left: 0;
padding-left: 0;
list-style: none;
}

#rss_feed li
{
padding-left: 17px;
background-image: url(template/<?=$core['config']['template'] ?>/images/rss_icon.gif);
background-repeat: no-repeat;
background-position: 0;
}

#rss_feed li a{
text-decoration: none;
}

#rss_feed li a:hover{
text-decoration: underline;
}
.language_select{
margin-top: 4px;
 }

.language_select a{
 font: 11px Arial, Helvetica, sans-serif;
color: #ffffff;
 text-decoration: none;
 }

.language_select a:hover{
font: 11px Arial, Helvetica, sans-serif;
color: #ffffff;
text-decoration: underline;
 }
 
.usercp_module{
font-weight:bold;
background-color:#FF0000;
color: #ffffff;
padding: 2px;
padding-left: 4px;
width: 140px;
}
</style>
</head>
<body>
	<div id="contentJs"></div>
	<div id="content">
		<div id="topBar">
			
<div id="topBarLeft">
<div id="langDiv" class="left">
&nbsp;<?
                    if($core['language_switch'] == '1'){
                        foreach ($languages as $language_id =>  $language_data){
                            echo '&nbsp;<a  href="'.ROOT_INDEX.'?change_language='.$language_id.'"><img  src="template/'.$core['config']['template'].'/images/flags/'.$language_data[2].'"></a>';
                        }
                    }
                    ?></div> 			<div id="langLoader" class="left l5 hidden"><img class="imgMiddle" src="template/<?=$core['config']['template'] ?>/img.mucheat.com/ajax-loader.gif"></img></div>
		</div>
		</div>
<div id="topBarRight">
	<span><strong>Hora del servidor:</strong>&nbsp;</span> <span id="ServerTime"></span><script type="text/javascript" language="javascript">
                                                                <!--
                                                                clock.init('<?php echo date("H:i:s m d, Y");?>','ServerTime',1000);
                                                                -->
                                                                </script></div>		</div>
		<div id="contentFrame">
			<div id="contentWrapper">
				<div id="leftField">
					<div id="leftFieldTop" class="frame1"></div>
					<div id="leftContentOutter">
						<div id="leftContent">
							
<div id='memberAreaJs'></div>
<div id="memberArea">
			<div class="leftBgHeader"></div>
		<div class="leftBgContentWrap">
			<div class="l12">
				<p id="boxTitle"><?=text_member_area; ?></p>
				<?
		  if($user_login == '1'){
		  	echo '<ul id="menuList">';
		$m_uss_row_ = get_sort('engine/cms_data/mods_uss.cms','¦');
 	 	$count_m_uss = 0;
		foreach ($m_uss_row_ as $tr){
			explode("¦",$tr);
			$count_m_uss++;
			if($tr[6] == '1'){
				if($tr[3] != ACCOUNTSETTINGS_CMS_USER){
					echo '<li><img src="template/'.$core['config']['template'].'/img.mucheat.com/bullet1.gif" class="imgMiddle"></img>&nbsp;&nbsp;<span class="txtLink midContent"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.$tr[3].'">'.str_replace($menu_links_title,$menu_links_translated,$tr[2]).'</a></span></li>';
				}
				
			}
		}
		echo ' </ul>
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
    <td style="height: 25px; padding-left: 2px;  " width="130"><input type="text" id="loginUserId" name="uss_id" maxlength="10" style="width:107px" value="USER ID" OnClick="this.value=\'\'"></td>
    <td rowspan="2"><div id="loginButton">
					<p id="loginButtonImg" class="goDefault clickable" onclick="uss_login_form.submit();"></p></td>
  </tr>
  <tr>
    <td style="height: 25px; padding-left: 2px;"><input type="password" id="loginPassword" name="uss_password" maxlength="10" style="width:107px" value="PASSWORD" maxlength="12" OnClick="this.value=\'\'"><input type="hidden" name="process_login"></td>
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
				<p id="loginBttnResult" class="hidden medium"></p>
			</div>
		</div>
		<div class="leftBgBottom"></div>
		</div>
<div id="leftMenu">
	<div class="leftBgHeader"></div>
	<div class="leftBgContentWrap">
		<p id="boxTitle" class="l12"><?=text_menu?></p>
		<ul id="menuList">
			<?
					  $m_row_ = get_sort('engine/cms_data/pag_d.cms','¦');
					#  echo $test[1][2][3];
					  foreach ($m_row_ as $li){
					 #  explode("¦",$li);
					   switch ($li[7]){
					   	case '0':
					   		if($li[8] == '1'){
					   			if($li[6] != '0'){
					   				echo '<li><img src="template/'.$core['config']['template'].'/img.mucheat.com/bullet1.gif" class="imgMiddle"></img>&nbsp;&nbsp;<span class="txtLink midContent"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$li[3].'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a></span></li>';
					   			}
					   	
					   		}
					   		break;
					   	case '1':
					   		switch ($li[11]){
					   			case '1': $target = "_blank"; break;
					   			case '0': $target = "_self"; break;
					   		}
					   		echo '<li><img src="template/'.$core['config']['template'].'/img.mucheat.com/bullet1.gif" class="imgMiddle"></img>&nbsp;&nbsp;<span class="txtLink midContent"><a  href="'.$li[10].'"  target="'.$target.'">'.str_replace($menu_links_title,$menu_links_translated,$li[2]).'</a></span></li>  ';
					   	
					   	break;
					   }


					  	
					  }
					  
		  ?>
		</ul>
	</div>
	<div class="leftBgBottom"></div>
</div>
<div id="leftRanks" class="hidden"></div>
						</div>
					</div>
					<div id="leftFieldBottom" class="frame1"></div>
				</div>
				<div id="middleField">
					<div id="middleFieldTop" class="frame2"></div>
					<div id="middleContentOutter">
						<div id="middleContent">
							<div id="midSpacer">
								<div id="midAlerts" class="hidden"></div>
								<div id="midContent">
									
<script language="javascript1.2" src="template/<?=$core['config']['template'] ?>/js/banner_rotator.js"></script>
<div id="homeContent"></div>
<div id="slidensmain" width=&{slidewidth}; height=&{slideheight}; bgColor=&{slidebgcolor}; visibility=hide><layer id="slidenssub" width=&{slidewidth}; left=0 top=0></layer></div>
<div>
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
                                        $title_p =  '';
                                    }elseif  (isset($_GET[LOAD_GET_PAGE])){
                                        if(isset($_GET[USER_GET_PAGE])){
                                            $usercp_module_title =  str_replace($modules_text_tile,$modules_text_translate,$secondary_l);
$title_p =  '';
                                        }else{ $title_p =  '';}
                                    }
                  echo '<td>&nbsp;</td>';
		  	
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
		echo '<div id="newsB0" class="newsBody ">'.text_announcement.'</div>
					<div>
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
		echo '<br></table></div>
							</div><br>
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
				
					echo '<div id="newsB0" class="newsBody ">'.htmlspecialchars(str_replace($modules_text_tile,$modules_text_translate,$give_me_out[3])).'</div>
					<div><br>';
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
					echo '</div><br>';
				}
			}
		}
	}
}
}
?>	  
		  </div></div></div></div>
					<div id="middleFieldBottom" class="frame2"></div>
					<div id="copyright"><div style="margin-top: 20px; margin-bottom: 20px;">
<?=build_footer();?>
  </div></div>
					<a href="<?=ROOT_INDEX?>"><div id="voteTab" class="voteTabes"></div></a></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>