<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?=build_header_seo(); ?>
<title><?=build_header_title(); ?></title>
		<link rel="shortcut icon" href="favicon.ico" type="image/ico">
        <link rel="stylesheet" type="text/css" href="template/<?=$core['config']['template'] ?>/Files/reset.css">
		<link href="template/<?=$core['config']['template'] ?>/Files/css.css" rel="stylesheet" type="text/css">
	

        <link rel="stylesheet" type="text/css" href="template/<?=$core['config']['template'] ?>/Files/style.css">
        <link rel="stylesheet" type="text/css" href="template/<?=$core['config']['template'] ?>/Files/additional.css">
        <link rel="stylesheet" type="text/css" href="template/<?=$core['config']['template'] ?>/Files/lightbox.css">
		
        <script type="text/javascript" src="template/<?=$core['config']['template'] ?>/Files/jquery-1.js"></script>
		<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/Files/functions.js"></script>
		<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/Files/lightbox.js"></script>
		     <script type="text/javascript" src="template/<?=$core['config']['template'] ?>/Files/news_1.js"></script>
        <script type="text/javascript">
            jQuery(function() {
                jQuery(".slider").jCarouselLite({
                    vertical: false,
                    hoverPause: true,
                    btnPrev: ".previousImage",
                    btnNext: ".nextImage",
                    visible: 1,
                    start: 0,
                    scroll: 1,
                    circular: true,
                    auto: 5000,
                    speed: 200,
                    btnGo: [".1", ".2"],
                    afterEnd: function(a, to, btnGo) {
                        if(btnGo.length <= to){to = 0;}
                        jQuery(".thumbActive").removeClass("thumbActive");
                        jQuery(btnGo[to]).addClass("thumbActive");
                    }
                });
            });
        </script>
        <script type="text/javascript">
            ddaccordion.init({
                headerclass: "newsTitle", //Shared CSS class name of headers group
                contentclass: "newsContent", //Shared CSS class name of contents group
                revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click" or "mouseover"
                mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
                collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
                defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc]. [] denotes no content.
                onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
                animatedefault: false, //Should contents open by default be animated into view?
                persiststate: false, //persist state of opened contents within browser session?
                toggleclass: ["", "newsOpened"], //Two CSS classes to be applied to the header when its collapsed and expanded, respectively ["class1", "class2"]
                togglehtml: ["none", "", ""], //Additional HTML added to the header when its collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
                animatespeed: "slow", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
                oninit:function(expandedindices){ //custom code to run when headers have initalized
                    //do nothing
                },
                onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
                    //do nothing
                }
            });
        </script><style type="text/css">
.newsContent{display: none}
a.hiddenajaxlink{display: none}
</style>	
        <link rel="stylesheet" type="text/css" href="template/<?=$core['config']['template'] ?>/Files/slider.css">
        <script type="text/javascript" src="template/<?=$core['config']['template'] ?>/Files/jcarousellite_1.js"></script>
        
	</head>
	<body>		<div class="wrapper">
            
<p class="navigation">
	<a href="index.php?EDIT_IT" title="Go to our homepage">Home</a>
	<a href="index.php?EDIT_IT" title="Visit our forums">Forums</a>
	<a href="index.php?EDIT_IT" title="Start your adventure today!">Download</a>
	<a href="index.php?EDIT_IT" title="Register now!">Registration</a>
	<a href="index.php?EDIT_IT" title="Here you find the individual rankings">Ranking</a>
	<a href="index.php?EDIT_IT" title="We need your support!">Donate</a>
	<a href="index.php?EDIT_IT" title="Trade your fxpoints and vps here!">Shop</a>
	<a href="index.php?EDIT_IT" title="Read the rules carefully">Rules</a>
	<a href="index.php?EDIT_IT" title="Frequently Asked Questions by the community">FAQs</a>
	<a href="index.php?EDIT_IT" title="Got a question?">Support</a>
</p>
            
            <div class="socialNetworks"><a href="index.php?EDIT_IT" title="Facebook" class="fb" target="_blank"></a><a href="index.php?EDIT_IT" title="Twitter" class="tw" target="_blank"></a><a href="index.php?EDIT_IT" title="YouTube" class="yt" target="_blank"></a>
                <div class="clear"></div>
            </div>            <div class="header">
                <object data="template/<?=$core['config']['template'] ?>/Files/header.swf" type="application/x-shockwave-flash">
                    <param name="movie" value="template/<?=$core['config']['template'] ?>/Files/header.swf">
                    <param name="quality" value="high">
                    <param name="wmode" value="transparent">
                </object>
            </div>
                    <div class="col">
                <div class="box login">
	

		  <?
		  if($user_login == '1'){
		  	echo '
            <ul> 
		';
		$m_uss_row_ = get_sort('engine/cms_data/mods_uss.cms','¦');
 	 	$count_m_uss = 0;
		foreach ($m_uss_row_ as $tr){
			explode("¦",$tr);
			$count_m_uss++;
			if($tr[6] == '1'){
				if($tr[3] != ACCOUNTSETTINGS_CMS_USER){
					echo '   <p class="tx"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.$tr[3].'"><span>'.str_replace($menu_links_title,$menu_links_translated,$tr[2]).'</span></a></p>';
				}
				
			}
		}
		echo ' </ul>
		 <table width="100%" border="0" align="center" cellpadding="0" cellspacing="4">
		 <tr>
		 <br>
		  <td align="left" class="yellow1"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.ACCOUNTSETTINGS_CMS_USER.'">'.link_account_settings.'</a></td>
		  <td align="right" class="yellow1"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'=logout">'.link_log_out.'</a></td>
		 </tr>
		 </table>
		 
		 ';
		  }else{
		  	echo '
<form method="post" action="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOGIN_CMS_PAGE.'" name="uss_login_form">
<input type="text" name="uss_id" style="width: 214px;" maxlength="10" class="login_field" value="USER ID" OnClick="this.value=\'\'">
	<input type="password" style="width: 214px;" name="uss_password" class="login_field" value="PASSWORD" maxlength="12" OnClick="this.value=\'\'"><input type="hidden" name="process_login"><br>
	<input name="loginSend" value="Login" style="float:right;" type="submit">
	
	
	<div style="margin-top:3px;">

    <td style="height: 25px; padding-left: 2px;" colspan="2" align="left" class="yellow"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOSTPASSWORD_CMS_PAGE.'">'.link_lost_password.'</a></td>

    <td style="height: 25px; padding-left: 2px;"  colspan="2" align="left"  class="yellow2"><font color="#888888">Welcome guest :</font></span> <a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.REGISTER_CMS_PAGE.'">'.link_sign_up.'</a></td>
	</div>
	<div class="clear"></div>
</form>

';
		  } 
		  ?>	
	




</div>

<!--
<div class="box">
    <div class="boxContainer" style="margin-bottom: 0; margin-top: 0;">
            </div>
    
<div class="boxContainer" style="margin-top: 0;">
	<iframe src="template/<?=$core['config']['template'] ?>/Files/likebox.htm" style="border:none; overflow:hidden; width:262px; height:395px;" allowtransparency="true" frameborder="0" scrolling="no">
    </iframe>
</div>
    </div>
	-->
	
					<?
include("engine/connect_core.php"); 

$igcn_acc = $core_db2->Execute("Select memb___id from MEMB_INFO");
$igcn_g = $core_db->Execute("Select G_Name from Guild");
$igcn_o = $core_db2->Execute("Select ConnectStat from MEMB_STAT where ConnectStat = 1");
echo'	
<div class="box information">
    <p class="list"><span class="span">Server Version</span>ex800</p>
    <p class="list highlight"><span class="span">Server Exp</span>500x</p>
    <p class="list"><span class="span">Server Drop</span>50x</p>
    <p class="list highlight"><span class="span">Total Accounts</span>'.$igcn_acc->RecordCount().'</p>
    <p class="list"><span class="span">Total Guilds</span>'.$igcn_g->RecordCount().'</p>
	<p class="list highlight"><span class="span">Users online</span><span style="color:green;">'.$igcn_o->RecordCount().'</span></p>
    <p class="clear"></p></div>           


';


?>	</div>
            <div class="main-col" id="mainAnchor">
                <div style="visibility: visible; overflow: hidden; position: relative; z-index: 2; left: 0px; width: 619px;" class="slider" id="slider">
    <div>
        <div class="nextImage"></div>
        <div class="previousImage"></div>
        <ul style="margin: 0px; padding: 0px; position: relative; list-style-type: none; z-index: 1; width: 3714px; left: -3095px;">
            <li style="overflow: hidden; float: left; width: 619px; height: 250px;"><img data-transition="fade" src="template/<?=$core['config']['template'] ?>/Files/slider1.jpg" alt="" title=""></li>
            <li style="overflow: hidden; float: left; width: 619px; height: 250px;"><img data-transition="fade" src="template/<?=$core['config']['template'] ?>/Files/slider2.jpg" alt="" title=""></li>
            <li style="overflow: hidden; float: left; width: 619px; height: 250px;"><img data-transition="fade" src="template/<?=$core['config']['template'] ?>/Files/slider3.jpg" alt="" title=""></li>
            <li style="overflow: hidden; float: left; width: 619px; height: 250px;"><img data-transition="fade" src="template/<?=$core['config']['template'] ?>/Files/slider4.jpg" alt="" title=""></li>
            <li style="overflow: hidden; float: left; width: 619px; height: 250px;"><img data-transition="fade" src="template/<?=$core['config']['template'] ?>/Files/slider5.jpg" alt="" title=""></li>
        <li style="overflow: hidden; float: left; width: 619px; height: 250px;"><img data-transition="fade" src="template/<?=$core['config']['template'] ?>/Files/slider1.jpg" alt="" title=""></li></ul>
    </div>
</div>
                <div class="contentTop"></div>
                <div class="contentContainer">
                    <div class="content">

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
                                            $usercp_module_title =  str_replace($modules_text2_tile,$modules_text_translate,$secondary_l);
$title_p =  '<a  href="'.$core['config']['website_url'].'">'.$core['config']['websitetitle'].'</a>  &gt; <a  href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$l_name[3].'">'.str_replace($menu_links_title,$menu_links_translated,$primary_l).'</a>  &gt; <a  href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$l_name[3].'&panel='.$l2_name[3].'">'.$usercp_module_title.'</a>';
                                        }else{ $title_p =  '<a  href="'.$core['config']['website_url'].'">'.$core['config']['websitetitle'].'</a>  &gt; <a  href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.$l_name[3].'">'.str_replace($menu_links_title,$menu_links_translated,$primary_l).'</a>';}
                                    }
                  echo '
                  
                  <div class="where_nav">
                  <table cellpadding="0" cellspacing="0" border="0" >
                  <tr>
                  <td align="left"><img src="template/'.$core['config']['template'].'/images/bullet.gifOFF" border="0"></td>
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
					  <td rowspan="3" align="left" width="60"><img src="template/'.$core['config']['template'].'/images/announcement.png" width="16" height="16"></td>
					  <td align="left" style="padding-top: 2px; padding-bottom: 2px;"><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.ANNOUNCEMENTS_CMS_PAGE.'#announcement-'.$ann_id.'">'.$ann_title.'</a></td>
					  <td align="right" class="ann_date">'.date('F j, Y | H:i',$ann_date).'</td>
					  </tr>
					  <tr>
					  <td colspan="0"  align="left" style="background-image:url(template/'.$core['config']['template'].'/ssimages/inner_line.jpg); height: 0px;"></td>
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
				
					echo '<div style="margin-top:50px; margin-left:auto;"class="tmp_m_content"> 
					
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
					
                    </div>
                </div>
                <div class="contentSubnav">

                </div>
            </div>
            <div class="clear"></div>

                </div>
		<div class="footer1">
    <div class="subnav">


    </div>
	<div class="copyrights">
		<?=build_footer();?>
   <br>
    </div>
</div>
	
</body></html>