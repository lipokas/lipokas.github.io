<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?=build_header_seo(); ?>
<title><?=build_header_title(); ?></title>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script src="js/core_global.js" language="javascript" type="text/javascript"></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="follow" />
<meta name="description" content="" />
<meta name="keywords" content="">
<link rel="stylesheet" type="text/css" href="template/<?=$core['config']['template'] ?>/css/estilos.css" />
<link rel="stylesheet" type="text/css" href="template/<?=$core['config']['template'] ?>/css/ranking.css" />
<link rel="icon" href="http://aionmithos.com.br/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="_inc/linguas.html" title="bog standard" />
<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/js/jquery.js"></script>
<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/js/jquery-block.js"></script>
<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/js/jquery-pngfix.js"></script>
<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/js/slide.js"></script>
<script type="text/javascript" src="template/<?=$core['config']['template'] ?>/js/functions.js"></script>
<script src="../../translate.google.com/translate_a/elementa0d8.html?cb=googleTranslateElementInit">

</script>
<script>



function googleTranslateElementInit() {

  new google.translate.TranslateElement({

    pageLanguage: 'pt',

    layout: google.translate.TranslateElement.InlineLayout.SIMPLE

  }, 'google_translate_element');

}



</script>
<script type="text/javascript"> 
    function my_blockUI() {
		$.blockUI({ css: { 
            border: 'none', 
            padding: '15px', 
            backgroundColor: '#EFEFEF', 
            '-webkit-border-radius': '5px', 
            '-moz-border-radius': '5px', 
            opacity: .8, 
            color: '#333333' ,
			font: '12px Verdana'
        } }); 
}
</script>
<script type="text/javascript"> 
    $(document).ready(function(){ 
        $(document).pngFix(); 
    }); 
</script>
<!--[if IE 5.5]>
<script>
  location.href="http://mithosgames.com.br/ie.php";
</script>
<![endif]-->

<!--[if IE 6]>
<script>
  location.href="http://mithosgames.com.br/ie.php";
</script>
<![endif]-->

<!--[if IE 7]>
<script>
  location.href="http://mithosgames.com.br/ie.php";
</script>
<![endif]-->
<style type="text/css">
<!--
.Estilo72 {color: #FFFFFF}
.style1 {color: #999999}
.Estilo50 {font-weight: bold}
.Estilo73 {color: #FFFFFF; font-size: 12; }
.style2 {color: #00FF00}
.language_select {margin-top: 4px;
}
.tmp_left_side {background-color:#1E2628;   padding-bottom:15px; padding-right: 10px; padding-left: 10px; }
.Estilo64 {color: #FF3300; font-weight: bold; }
.style7 {	font-family: Arial, Helvetica, sans-serif;
	font-size: 18px;
	color: #FFFFFF;
}
-->
</style>
</head>
<body>
<div id="centralizador">
<div id="cima">
  <div id="logo-site"> <a href="index7159.html?i=abrirsite" onClick="my_blockUI()">
    <object width="985" height="168" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
      <param value="template/<?=$core['config']['template'] ?>/intro.swf" name="movie">
      <param value="high" name="quality">
      <param value="transparent" name="wmode">
      <embed width="985" height="168" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" quality="high" src="template/<?=$core['config']['template'] ?>/intro.swf" wmode="transparent">
      </object>
  </a></div>
</div>
<div id="menusuperior">
   <ul>
    <li> <a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>index" onClick="my_blockUI()" >Inicio</a> </li>
    <li> <a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>register" onClick="my_blockUI()" class="">Registro</a> </li>
      <li> <a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>statistics" onClick="my_blockUI()">Estadisticas</a></li>
      <li> <a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>downloads"onClick="my_blockUI()" class="">Descargas</a></li>
    <li> <a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>rankings" onClick="my_blockUI()">Ranking</a></li>
    <li> <a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>news" onClick="my_blockUI()">Noticias</a></li>
    <li> <a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>shop"onClick="my_blockUI()" class="">Tienda</a> </li>
    <li> <a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>foro" onClick="my_blockUI()" class="">Foro</a></li>
    <li> <a href="<?=ROOT_INDEX.'?'.LOAD_GET_PAGE.'='?>contact" onClick="my_blockUI()">Soporte</a></li>
  </ul>
</div>
<div id="separador"></div>
<div id="conteudo">
<div id="lateral">
<div id="box">
    <div id="box-titulo">
      <p><span class="language_select" style="width: 990px;">
        <?
                    if($core['language_switch'] == '1'){
                        foreach ($languages as $language_id =>  $language_data){
                            echo '&nbsp;<img  src="template/'.$core['config']['template'].'/images/flags/'.$language_data[2].'">  <a  href="'.ROOT_INDEX.'?change_language='.$language_id.'">'.$language_data[0].'</a>';
                        }
                    }
                    ?>
      </span></p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
    <div id="box-conteudo">
 <div id="google_translate_element"></div>
</div>
  </div>
  <div id="separador"></div>
<div id="box">
    <div id="box-titulo">Panel de control</div>
<div id="box-conteudo"><span style="padding-top:15px;">
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
					echo '<li class="meniu">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.$tr[3].'">'.str_replace($menu_links_title,$menu_links_translated,$tr[2]).'</a></li>';
				}
				
			}
		}
		echo ' </ul>
		 </div>
		  <table width="159" border="0" align="center" cellpadding="0" cellspacing="1">
		 <tr>
		  <td align="left" class="yellow"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.USER_CMS_PAGE.'&'.USER_GET_PAGE.'='.ACCOUNTSETTINGS_CMS_USER.'">'.link_account_settings.'</a></td>
		  <td align="right" class="yellow"><a  href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'=logout">'.link_log_out.'</a></td>
		 </tr>
		 </table>
		 
		 ';
		  }else{
		  	echo '<form method="post" action="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOGIN_CMS_PAGE.'" name="uss_login_form">
			  <table width="159" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr>
    <td style="height: 25px; padding-left: 2px;  " width="130"><input type="text" name="uss_id" maxlength="10" class="FlareMU_LoginForm" value="USER ID"></td>
  </tr>
  <tr>
    <td style="height: 25px; padding-left: 2px;"><input type="password" name="uss_password" class="FlareMU_LoginForm" value="PASSWORD" maxlength="12"></td>
  
    <td rowspan="2"><span style="height: 25px; padding-left: 2px;">
      <input type="hidden" name="process_login">
    </span></td></tr>
    <table width="159" border="0" align="center" cellpadding="0" cellspacing="0">
			   <tr>
			     <td align="right"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			       <tr>
			         <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			           <tr>
			             <td ><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOSTPASSWORD_CMS_PAGE.'">Forgot Password </a></td>
		               </tr>
			           <tr>
			             <td ><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.REGISTER_CMS_PAGE.'">Register</a></td>
		               </tr>
		             </table></td>
			         <td><input name="image" type="image"  onclick="uss_login_form.submit();" src="template/'.$core['config']['template'].'/template/default/images/in.png" align="right"></td>
		           </tr>
		         </table></td>
		       </tr>
		      </table>
		  	</form>
		  	</form></td>
                      </tr>';
		  }
		  ?>
</span>
  <p style="text-align:center;">&nbsp;</p>     
           
</div>  </div>
  <div id="separador"></div>
  <div id="box">
    <div id="box-titulo">Menu</div>
    <div id="box-conteudo">
  <ul class="barralateral"></li><p class="style2">
    <?
					  $m_row_ = get_sort('engine/cms_data/pag_d.cms',',');
					#  echo $test[1][2][3];
					  foreach ($m_row_ as $li){
					 #  explode(",",$li);
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
  </p>
          </ul>
</div>
  </div>
  
  <div id="separador"></div>
  <div id="box">
    <div id="box-titulo">Informacion Del Servidor </div>
    <div id="box-conteudo">
    <ul class="barralateral">
      <table width="178" border="0">
        <tr>
          <td width="5" align="left" valign="top">&nbsp;</td>
          <td height="21" align="left" valign="top"><span class="servers lionnaS">Server Free: </span></td>
          <td><?PHP
if (eregi("status/servidor.php", $_SERVER['SCRIPT_NAME'])) { die ("Access Denied"); }
require 'engine/global_config.php';

$onlineoffline = "178.33.117.56";
if ($check=@fsockopen($onlineoffline,55901,$ERROR_NO,$ERROR_STR,(float)0.5)) 
	{ 
	fclose($check); 
	echo '<img src="template/'.$core['config']['template'].'/images/on.png" alt="Online">'; 
	}
else 
	{ 
	echo '<img src="template/'.$core['config']['template'].'/images/off.png" alt="Offline">'; 
	} 
?></td>
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td height="21" align="left" valign="top" class="servers cerielS"><span class="servers lionnaS">Castle Siegue:</td>
          <td><?PHP
if (eregi("status/statusgscs.php", $_SERVER['SCRIPT_NAME'])) { die ("Access Denied"); }
require 'engine/global_config.php';

$onlineoffline = "178.33.117.56";
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
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td height="21" align="left" valign="top" class="servers cerielS"><span class="servers lionnaS">Server Vip: </td>
          <td><span class="Estilo60">
            <?PHP
if (eregi("status/servidorvip.php", $_SERVER['SCRIPT_NAME'])) { die ("Access Denied"); }
require 'engine/global_config.php';

$onlineoffline = "178.33.117.56";
if ($check=@fsockopen($onlineoffline,55921,$ERROR_NO,$ERROR_STR,(float)0.5)) 
	{ 
	fclose($check); 
	echo '<img src="template/'.$core['config']['template'].'/images/on.png" alt="Online">'; 
	}
else 
	{ 
	echo '<img src="template/'.$core['config']['template'].'/images/off.png" alt="Offline">'; 
	} 
?>
          </span></td>
        </tr>
      </table>
            <table width="227" border="0">
        <tr>
          <td width="5" align="left" valign="top">&nbsp;</td>
          <td width="112" height="21" align="left" valign="top"><span class="servers lionnaS">Player Online </span></td>
          <td width="96" class="style2"><b>
            <? $onlinepl = mssql_query("SELECT count(*) From MEMB_STAT where Connectstat='1'");
$online = mssql_result($onlinepl, 0, 0); echo "$online";
?>
          </b></td>
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td height="21" align="left" valign="top" class="servers cerielS">Cuentas:</td>
          <td class="style2"><b>
            <? $accounts = mssql_query("SELECT count(*) FROM MEMB_INFO");
$totalacc = mssql_fetch_row($accounts); echo"$totalacc[0]"; ?>
          </b></td>
        </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td height="21" align="left" valign="top" class="servers cerielS"><span class="statsText">
            <?
//Estadisticas Personajes

$statistics_accounts=mssql_query("SELECT count(*) AccountID FROM MuOnline.dbo.Character");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['character_reults']=$row['AccountID'];
?>
            Personajes:</span></td>
          <td class="style2"><strong>
            <?=$core['character_reults'];?>
            </strong><strong>
            <?
}
?>
          </strong></td>
        </tr>
      </table>
            <table width="227" border="0">
              <tr>
                <td width="5" align="left" valign="top">&nbsp;</td>
                <td width="112" height="21" align="left" valign="top"><span class="servers lionnaS"><span class="statsText">
                  <?
//Estadisticas Clanes

$statistics_accounts=mssql_query("SELECT count(*) G_Name FROM MuOnline.dbo.Guild");
while($row=mssql_fetch_assoc($statistics_accounts)){
$core['guild_reults']=$row['G_Name'];
?>
                </span>Guilds:</span></td>
                <td width="96" class="style2"><strong>
                  <?=$core['guild_reults'];?>
                  </strong><strong>
                  <?
}
?>
                </strong></td>
              </tr>
            </table>
            <p>&nbsp;</p>
    </ul>
</div>  </div>
  <div id="separador"></div>
  <div id="box">
   <div id="box-titulo">Vota Por el Servidor </div>
   <div id="box-conteudo">
<table width="180" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td align="center">
     <a href="votar" target="_blank" title="Vote Reward AION Mithos"><img src="template/<?=$core['config']['template'] ?>/images/reward.jpg" width="180" height="135" border="0" class='img' onMouseOver=this.className='img_hover' onMouseOut=this.className='img_out'></a>
  </div>
    </td>
  </tr>
</table>
</div>
   </div>
   <div id="separador"></div>
  <div id="box">
    <div id="box-titulo">Siguenos</div>
    <div id="box-conteudo">
<table width="121" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td width="40" align="center"><a href="facebook" target="_blank" title="Curta-nos no Facebook"><img src="template/<?=$core['config']['template'] ?>/images/icone_facebook.png" width="40" height="40" border="0" class='img' onMouseOver=this.className='img_hover' onMouseOut=this.className='img_out'></a></td>
    <td width="40" align="center"><a href="twitter" target="_blank" title="Siga-nos no Twitter"><img src="template/<?=$core['config']['template'] ?>/images/icone_twitter.png" width="40" height="40" border="0" class='img' onMouseOver=this.className='img_hover' onMouseOut=this.className='img_out'></a></td>
    <td width="40" align="center"><a href="http://www.orkut.com.br/Main#Community?cmm=110973912" target="_blank" title="Participe da nossa comunidade no Orkut"></a></td>
    <td width="40" align="center"><a href="youtube" target="_blank" title="Inscreva no nosso canal no YouTube"><img src="template/<?=$core['config']['template'] ?>/images/icone_youtube.png" width="40" height="40" border="0" class='img' onMouseOver=this.className='img_hover' onMouseOut=this.className='img_out'></a></td>
  </tr>
</table>
</div>
  </div></div>
<div id="meio">
<div id="slideshow">
  <div id="box-titulo">Novedades</div>
  <div id="slideshow-images">
<img alt="" title="" src="template/<?=$core['config']['template'] ?>/images/slideshow/03.jpg" />	
<img alt="" title="" src="template/<?=$core['config']['template'] ?>/images/slideshow/02.jpg" />		
<img alt="" title="" src="template/<?=$core['config']['template'] ?>/images/slideshow/01.jpg" />								
</div></div>
<div id="separador"></div>
<div id="megabox">
  <table width="770" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top"><div id="noticiasbox">
          <div id="noticiasbox-titulo">Ultimaas noticias del foro </div>
          <div id="noticiasbox-conteudo">
            <table width="770" style="background:#171717; padding: 5px; margin:0; overflow:auto;" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="759" valign="top">

                <div id='noticias'>
                    <ul>
                          <li>
                            <?
$config = simplexml_load_file('engine/config_mods/rss_feed_settings.xml');
if($config->active == '0'){
	echo msg('0','Sorry, this feature is temporarily unavailable at the moment.');
}else{
	include('engine/rss_feed.php'); 
	$rss = new lastRSS; 
	$rss->cache_dir = './engine/cache/rss';
	$rss->cache_time = trim($config->rss_time)*60; 
	$count_rss = 0;
	

	if ($rs = $rss->get($config->rss_url)) {
		echo '<ul id="rss_feed">';
		foreach ($rs['items'] as $item){
			$count_rss++;
			$item['title'] = str_replace("<![CDATA[","",$item['title']);
			$item['title'] = str_replace("]]>","",$item['title']);
			echo '<li><a href="'.$item['link'].'" target="_blank">'.set_limit($item['title'],trim($config->rss_length),'...').'</a><br></li>';
			
			if($count_rss >= trim($config->rss_count)){
				break;
			}
		}
		echo '</ul>';
		
	}else{
		echo msg('0',''.rss_feed.'');
	}
	
}
?>
                          </li> 
                    </ul>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
                  </td>
              </tr>
            </table>
          </div>
        </div></td>
      <td valign="top">&nbsp;</td>
    </tr>
  </table>
  <p><span class="where_nav">
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
  </span></p>
  <p>&nbsp;</p>
</div>
<div id="separador"></div>
<div id="mega-box">
  <table width="770" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td valign="top" align="center"><div id="topsbox">
          <div id="topsbox-titulo">Mejor Guild </div>
          <div id="topsbox-conteudo">
            <table width="250" border="0" align="center" cellspacing="0" cellpadding="0" height="215" style="background:#171717; padding: 5px;">
              <tr>
                <td><div align="center">
                  <table width="147" align="center">
                    <?
$Guild=mssql_query("select TOP 1 * from MuOnline.dbo.guild order by G_Score desc");
while($row=mssql_fetch_assoc($Guild)){
$G_Namez=$row['G_Name'];
$G_Markz=$row['G_Mark'];
$G_Scorez=$row['G_Score'];
$Resetsz=$row['Resets'];
$logo=urlencode(bin2hex($G_Markz));
?>
                    <tr>
                      <td width="10" bgcolor="#000000" style="color: rgb(196, 37, 0); font-weight: bold;">&nbsp;</td>
                      <td width="125" bgcolor="#000000"><div align="center" class="style7">
                          <?=$G_Namez;?>
                      </div></td>
                    </tr>
                    <?

}
?>
                  </table>
                  <p class="Estilo36"><img src="get.php?aL=<?=$logo;?>.png" alt="" width="149" height="106" /></p>
                </div></td>
              </tr>
              <tr>
                <td valign="top"><p>&nbsp;</p>                </tr>
            </table>
          </div>
        </div></td>
      <td valign="top"><div id="topsbox">
          <div id="topsbox-titulo">Top Reset </div>
          <div id="topsbox-conteudo">
            <table width="250" border="0" align="center" cellspacing="0" cellpadding="0" height="215" style="background:#171717; padding: 5px;">
              <tr>
                <td valign="top"><table width="179" height="27" border="0" align="center" cellpadding="0" cellspacing="6" background="template/<?=$core['config']['template'] ?>/images/3.png" style="background-repeat: repeat-y;">
                  <tr bgcolor="#999999">
                    <td><div align="center"><span class="style1"><span class="Estilo72"></span></span></div></td>
                    <td><div align="center" class="Estilo72">N.</div></td>
                    <td><div align="center" class="Estilo72">Nombre</div></td>
                    <td><div align="center" class="Estilo72">Reset</div></td>
                  </tr>
                  <tr>
                    <?
$query=mssql_query("select TOP 9 * from MuOnline.dbo.Character Where ctlcode !='32' and ctlcode !='8' order by Resets desc, cLevel desc");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$levelz=$row['cLevel'];
$resetsz=$row['Resets'];

?>
                    <td style="color: #FFFFFF; font-weight: bold;"><div align="center" class="Estilo73"></div></td>
                    <td class="Estilo50"><div align="center" class="Estilo73">
                      <?=++$count1;?>
                    </div></td>
                    <td><div align="center"><span class="Estilo73">
                      <?=$namez;?>
                    </span></div></td>
                    <td class="Estilo50"><div align="center" class="Estilo73">
                        <?=$resetsz;?>
                    </div></td>
                  </tr>
                  <?

}
?>
                </table>
                </tr>
            </table>
          </div>
        </div></td>
      <td valign="top"><div id="topsbox2">
          <div id="topsbox2-titulo">Top Asesinos</div>
          <div id="topsbox2-conteudo">
            <table width="260" border="0" align="center" cellspacing="0" cellpadding="0" height="215" style="background:#171717; padding: 5px;">
              <tr>
                <td valign="top"><table width="160" align="center">
                  <tr>
                    <td bgcolor="#999999"><div align="center" class="Estilo72">N.</div></td>
                    <td bgcolor="#999999"><div align="center" class="Estilo72">Name</div></td>
                    <td bgcolor="#999999"><div align="center" class="Estilo72">Kills</div></td>
                  </tr>
                  <tr>
                    <?
$query=mssql_query("select TOP 9 * from MuOnline.dbo.Character Where ctlcode !='32' and ctlcode !='8' order by PkCount desc");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$levelz=$row['cLevel'];
$killedsz=$row['PkCount'];

?>
                    <td style="color: rgb(196, 37, 0); font-weight: bold;"><div align="center">
                        <?=++$count1;?>
                    </div></td>
                    <td><div align="center" class="Estilo36">
                        <?=$namez;?>
                    </div></td>
                    <td><div align="center" class="Estilo36">
                        <?=$killedsz;?>
                    </div></td>
                  </tr>
                  <?

}
?>
                </table>
                </tr>
            </table>
          </div>
        </div></td>
    </tr>
  </table>
</div>
  </div>
</div>
<div id="rodape">
  <div id="pesquisar"></div>
  <div id="copy"></div>
</div>  </div>
<div align="center"><span class="Estilo64">
  <?=build_footer(),$XX= base64_decode('PGRpdiBhbGlnbj0iY2VudGVyIiBjbGFzcz0iZm9vdGVyX2ZvbnQiPiA8cD5EaXNl8W8gJiBBZGFw
dGFjaW9uIE11Y29yZTogWWFzYW1hcnVTfFlkZXNpbmcgVG9kb3MgbG9zIGRlcmVjaG9zIHJlc2Vy
dmFkb3MgMjAxMS48L3A+CjxwPjwvYT48L3A+PC9kaXY+');?>
  </span>
</div>
</body>

<!-- Mirrored from www.aionmithos.com.br/site/index by HTTrack Website Copier/3.x [XR&CO'2010], Sun, 11 Sep 2011 16:17:12 GMT -->
</html>