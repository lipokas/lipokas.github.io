<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?=build_header_seo(); ?>
<title><?=build_header_title(); ?></title>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script src="js/core_global.js" language="javascript" type="text/javascript"></script>

<style type="text/css">

#Azul12 {color: #69C;}

#Azul123 {color: #69C; text-align: center;}
#Rojo {color: #F00; text-align: center;}
#Gris {color: #CCC;}

#Gris2 {color:#CCC; text-align: center;}

#Verde {color:#25a82e; text-align: center;}

#Verde2 {color:#25a82e;}

#Crema {color:#c49a71;}

#Naranja123 {color:#F60;}

#Blanco {color:#FFF; text-align: center;}

#Blanco2 {color:#FFF;}

</style>
<script>var _wau = _wau || []; _wau.push(["tab", "si8zx1fqpgeu", "zft", "left-middle"]);(function() { var s=document.createElement("script"); s.async=true; s.src="http://widgets.amung.us/tab.js";document.getElementsByTagName("head")[0].appendChild(s);})();</script>

<!-- Facebook -->

<a target="_blank" style="display:scroll;position:fixed;top:130px;right:0px;" href="http://www.facebook.com/profile.php?id=100002203377418">

<img style="border:0;" src="Battle/template/<?=$core['config']['template'] ?>/images/fb.png" alt="Siguenos En FaceBook"/>

</a>

<!-- Alkon -->

<a target="_blank" style="display:scroll;position:fixed;top:185px;right:0px;" href="http://www.alkon.org/foro/servidores-de-mu-online.140/829916-mu-existen-season-6-ep2-9999x-80-a.html" rel="nofollow">

<img style="border:0;" src="Battle/template/<?=$core['config']['template'] ?>/images/tw.png" alt="Siguenos En Twitter"/>

</a>

<!-- PortalxD -->

<a target="_blank" style="display:scroll;position:fixed;top:240px;right:0px;" href="http://www.portalxd.com/tema/mu-existen-season-6-ep2-9999x-100-a-1466620/" rel="nofollow">

<img style="border:0;" src="Battle/template/<?=$core['config']['template'] ?>/images/ex.png" alt="Siguenos desde nuestro canal de YouTube!"/>

</a>


<!-- YouTube -->

<a target="_blank" style="display:scroll;position:fixed;top:295px;right:0px;" href="http://www.youtube.com/watch?v=3uWWWdjV4Yw" rel="nofollow">

<img style="border:0;" src="Battle/template/<?=$core['config']['template'] ?>/images/you.png" alt="Siguenos desde nuestro canal de YouTube!"/>

</a>

<script type="text/javascript">

function OnLoad ()

{

	

		

	startClock();

}



LightboxOptions = Object.extend({

    fileLoadingImage:        'http://nebo.ariethmu.com/source/template/<?=$core['config']['template'] ?>/images/lightbox/loading.gif',     

    fileBottomNavCloseImage: 'http://nebo.ariethmu.com/source/template/<?=$core['config']['template'] ?>/images/lightbox/closelabel.gif',



    overlayOpacity: 0.8,   // controls transparency of shadow overlay



    animate: true,         // toggles resizing animations

    resizeSpeed: 7,        // controls the speed of the image resizing animations (1=slowest and 10=fastest)



    borderSize: 10,         //if you adjust the padding in the CSS, you will need to update this variable



	// When grouping images this is used to write: Image # of #.

	// Change it for non-english localization

	labelImage: "Photo",

	labelOf: "of"

}, window.LightboxOptions || {});



var gClockHours;

var gClockMinutes;

var gClockSeconds;

var gClockTimer=null;



function startClock()

{

  gClockHours=<?=date('H')?>;

  gClockMinutes=<?=date('i')?>;

  gClockSeconds=<?=date('s')?>;

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

  var dn = "";

  var shours = gClockHours;

  var sminutes = gClockMinutes;

  var sseconds = gClockSeconds;

  if (shours >= 24)

  {

    dn = "PM";

    shours-=24;

  }

  if (!shours) shours = 24;

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



</script>

<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>

<script src="js/core_global.js" language="javascript" type="text/javascript"></script>

<script type="text/javascript">

//http://javascript.tunait.com/

//tunait@yahoo.com

function hora(){

	var fecha = new Date()

	var hora = fecha.getHours()

	var minuto = fecha.getMinutes()

	var segundo = fecha.getSeconds()

	if (hora < 10) {hora = "0" + hora}

	if (minuto < 10) {minuto = "0" + minuto}

	if (segundo < 10) {segundo = "0" + segundo}

	var horita = hora + ":" + minuto + ":" + segundo

	document.getElementById('hora').firstChild.nodeValue = horita

	tiempo = setTimeout('hora()',1000)

}

function inicio(){

	document.write('<span id="hora">')

	document.write ('000000</span>')

	hora()

}

</script>
<link href="template/<?=$core['config']['template'] ?>/css/estilo.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
#Azul12 {color: #69C;}
#Gris {color: #CCC;}
#Verde {color:#25a82e; text-align: center;}
#Azul123 {color: #69C; text-align: center;}
#Gris2 {color:#CCC; text-align: center;}
-->
</style>
</head>
<BODY class="body" ondragstart="return false;" onselectstart="return false;" oncontextmenu="return false;"> 
<center><table border="1" width="873" id="table1" style="border-width: 0px" class="tabla_footer">
	<tr>
		<td colspan="3" style="border-style: none; border-width: medium">
		<center>
		<table border="0" width="454" id="table11" cellspacing="0" cellpadding="0">
			<tr>
				<td><img border="0" src="template/<?=$core['config']['template'] ?>/images/1.png" width="293" height="104"></td>
				<td><a href="index.php?page_id=news">
				<img src="template/<?=$core['config']['template'] ?>/images/noticias.png" width="64" height="104" onMouseOver="this.src='template/<?=$core['config']['template'] ?>/images/noticias2.png';" onMouseOut="this.src='template/<?=$core['config']['template'] ?>/images/noticias.png';" /></a></td>
				<td>
				<a href="index.php?page_id=register"><img src="template/<?=$core['config']['template'] ?>/images/register.png" width="91" height="104" onMouseOver="this.src='template/<?=$core['config']['template'] ?>/images/register2.png';" onMouseOut="this.src='template/<?=$core['config']['template'] ?>/images/register.png';" /></a></td>
				<td>
				<a href="index.php?page_id=downloads"><img src="template/<?=$core['config']['template'] ?>/images/download.png" width="102" height="104" onMouseOver="this.src='template/<?=$core['config']['template'] ?>/images/download2.png';" onMouseOut="this.src='template/<?=$core['config']['template'] ?>/images/download.png';" /></a></td>
				<td>
				<a href="index.php?page_id=rankings"><img src="template/<?=$core['config']['template'] ?>/images/ranking.png" width="95" height="104" onMouseOver="this.src='template/<?=$core['config']['template'] ?>/images/ranking2.png';" onMouseOut="this.src='template/<?=$core['config']['template'] ?>/images/ranking.png';" /></a></td>
				<td>
				<a href="index.php?page_id=castlesiege"><img src="template/<?=$core['config']['template'] ?>/images/castle.png" width="100" height="104" onMouseOver="this.src='template/<?=$core['config']['template'] ?>/images/castle2.png';" onMouseOut="this.src='template/<?=$core['config']['template'] ?>/images/castle.png';" /></a></td>
				<td>
				<a hred="index.php?page_id=banned"><img src="template/<?=$core['config']['template'] ?>/images/baned.png" width="95" height="104" onMouseOver="this.src='template/<?=$core['config']['template'] ?>/images/baned2.png';" onMouseOut="this.src='template/<?=$core['config']['template'] ?>/images/baned.png';" /></a></td>
		  </td>
				<td><a href="index.php?page_id=staff"><img src="template/<?=$core['config']['template'] ?>/images/gm.png" width="79" height="104" onMouseOver="this.src='template/<?=$core['config']['template'] ?>/images/gm2.png';" onMouseOut="this.src='template/<?=$core['config']['template'] ?>/images/gm.png';" /></a></td>
				</td>
				<td><img border="0" src="template/<?=$core['config']['template'] ?>/images/2.png" width="52" height="104"></td>
			</tr>
		</table></center>
		</td>
	</tr>
	<tr>
		<td colspan="3" style="border-style: none; border-width: medium" height="306">&nbsp;</td>
	</tr>
	<tr>
	  <td style="border-style: none; border-width: medium" valign="top" width="282">
		<table border="1" width="140" id="table2" style="border-width: 0px" cellspacing="0" cellpadding="0">
			<tr>
				<td style="border-style: none; border-width: medium">
				<img border="0" src="template/<?=$core['config']['template'] ?>/images/usercp.png" width="282" height="99"></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium" background="template/<?=$core['config']['template'] ?>/images/cont.png" valign="top">
				<table border="1" width="100%" id="table3" style="border-width: 0px">
					<tr>
						<td style="border-style: none; border-width: medium" width="48">&nbsp;</td>
						<td style="border-style: none; border-width: medium" width="0" valign="top">
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
    <td style="height: 25px; padding-left: 2px;  " width="130"><input type="text" name="uss_id" maxlength="10" class="FlareMU_LoginForm" value="USER ID" OnClick="this.value=\'\'"
></td>
  </tr>
  <tr>
    <td style="height: 25px; padding-left: 2px;"><input type="password" name="uss_password" class="FlareMU_LoginForm" value="PASSWORD" OnClick="this.value=\'\'"
 maxlength="12"></td>
  
    <td rowspan="2"><span style="height: 25px; padding-left: 2px;">
      <input type="hidden" name="process_login">
    </span></td></tr>
    <table width="159" border="0" align="center" cellpadding="0" cellspacing="0">
			   <tr>
			     <td align="right"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			       <tr>
			         <td><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
			           <tr>
			             <td ><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.LOSTPASSWORD_CMS_PAGE.'">¿Lost Pass?</a></td>
		               </tr>
			           <tr>
			             <td ><a href="'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.REGISTER_CMS_PAGE.'">Register</a></td>
		               </tr>
		             </table></td>
			         <td><input name="image" type="image"  onclick="uss_login_form.submit();" src="template/'.$core['config']['template'].'/images/in.png" align="right"></td>
		           </tr>
		         </table></td>
		       </tr>
		      </table>
		  	</form>
		  	</form></td>
                      </tr>';
		  }
		  ?></td>
						<td style="border-style: none; border-width: medium" width="16">&nbsp;</td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">
				<img border="0" src="template/<?=$core['config']['template'] ?>/images/cont2.png" width="282" height="45"></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">
				<img border="0" src="template/<?=$core['config']['template'] ?>/images/menu.png" width="282" height="99"></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium" background="template/<?=$core['config']['template'] ?>/images/cont.png" valign="top">
				<table border="1" width="100%" id="table4" style="border-width: 0px">
					<tr>
						<td style="border-style: none; border-width: medium" width="48">&nbsp;</td>
						<td style="border-style: none; border-width: medium" width="0" valign="top"><?
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
					  
		  ?></td>
						<td style="border-style: none; border-width: medium" width="16">&nbsp;</td>
					</tr>
				</table>
				</td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">
				<img border="0" src="template/<?=$core['config']['template'] ?>/images/cont2.png" width="282" height="45"></td>
			</tr>
		</table>
		<p>&nbsp;</p></td>
		<td style="border-style: none; border-width: medium" valign="top" width="304">
		<table border="1" width="440" id="table12" style="border-width: 0px" cellspacing="0" cellpadding="0">
			<tr>
				<td style="border-style: none; border-width: medium">
				<img border="0" src="template/<?=$core['config']['template'] ?>/images/contenido1.png" width="633" height="81"></td>
			    <td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium" valign="top" background="template/<?=$core['config']['template'] ?>/images/contenido.png">
				<table border="1" width="97%" id="table13" style="border-width: 0px" height="700">
					<tr>
						<td width="17" valign="top" style="border-style: none; border-width: medium">&nbsp;</td>
					    <td width="581" valign="top" style="border-style: none; border-width: medium"><p class="marco_contenido">
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
                  echo '
                  
                  <div class="where_nav">
                  <table cellpadding="0" cellspacing="0" border="0" >
                  <tr>
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
					    </p>
					      <p class="marco_contenido">&nbsp; </p></td>
					</tr>
				</table>				</td>
			    <td style="border-style: none; border-width: medium" valign="top" background="template/<?=$core['config']['template'] ?>/images/contenido.png">&nbsp;</td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">
				<img border="0" src="template/<?=$core['config']['template'] ?>/images/contenido2.png" width="633" height="147"></td>
			    <td style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
			<tr>
				<td align="center" style="border-style: none; border-width: medium">&nbsp;</td>
			    <td align="center" style="border-style: none; border-width: medium">&nbsp;</td>
			</tr>
		</table>
		</td>
	  <td style="border-style: none; border-width: medium" valign="top" width="229">
		<table border="1" width="140" id="table8" style="border-width: 0px" cellspacing="0" cellpadding="0">
			<tr>
				<td style="border-style: none; border-width: medium"><table border="1" width="140" id="table2" style="border-width: 0px" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="border-style: none; border-width: medium"><img border="0" src="template/<?=$core['config']['template'] ?>/images/reset.png" width="282" height="99"></td>
                    </tr>
                    <tr>
                      <td style="border-style: none; border-width: medium" background="template/<?=$core['config']['template'] ?>/images/cont.png" valign="top"><table border="1" width="100%" id="table3" style="border-width: 0px">
                          <tr>
                            <td style="border-style: none; border-width: medium" width="48">&nbsp;</td>
                            <td style="border-style: none; border-width: medium" width="0" valign="top"><table width="160" align="center">
                              <tr>
                                <td width="23"><div align="center"><strong>#</strong></div></td>
                                <td width="78"><div align="center"><strong>Nombre</strong></div></td>
                                <td width="43"><div align="center"><strong>Resets</strong></div></td>
                              </tr>
                              <tr>
                                <?
$query=mssql_query("select TOP 10 * from MuOnline.dbo.Character Where ctlcode !='32' and ctlcode !='8' order by Resets desc, cLevel desc");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$levelz=$row['cLevel'];
$resetsz=$row['Resets'];

?>
                                <td style="color: rgb(196, 37, 0); font-weight: bold;"><div align="center"> <strong>
                                    <?=++$count2;?>
                                </strong></div></td>
                                <td><div align="center">
                                    <?=$namez;?>
                                </div></td>
                                <td><div align="center"> <strong>
                                    <?=$resetsz;?>
                                </strong></div></td>
                              </tr>
                              <?

}
?>
                            </table></td>
                            <td style="border-style: none; border-width: medium" width="16">&nbsp;</td>
                          </tr>
                      </table></td>
                    </tr>
                    <tr>
                      <td style="border-style: none; border-width: medium"><img border="0" src="template/<?=$core['config']['template'] ?>/images/cont2.png" width="282" height="45"></td>
                    </tr>
                    <tr>
                      <td style="border-style: none; border-width: medium">&nbsp;</td>
                    </tr>
                  </table>
			    </td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">
				<img border="0" src="template/<?=$core['config']['template'] ?>/images/guild.png" width="282" height="99"></td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium" background="template/<?=$core['config']['template'] ?>/images/cont.png" valign="top">
				<table border="1" width="100%" id="table10" style="border-width: 0px">
					<tr>
						<td style="border-style: none; border-width: medium" width="48">&nbsp;</td>
						<td style="border-style: none; border-width: medium" width="0" valign="top"><table width="160" align="center">
						  <tr>
						    <td><div align="center"><strong>#</strong></div></td>
						    <td><div align="center"><strong>Nombre</strong></div></td>
						    <td><div align="center"><strong>Score</strong></div></td>
						    <td><div align="center"><strong>Logo</strong></div></td>
					      </tr>
						  <?
$Guild=mssql_query("select TOP 10 * from MuOnline.dbo.guild order by G_Score desc");
while($row=mssql_fetch_assoc($Guild)){
$G_Namez=$row['G_Name'];
$G_Markz=$row['G_Mark'];
$G_Scorez=$row['G_Score'];
$Resetsz=$row['Resets'];
$logo=urlencode(bin2hex($G_Markz));
?>
  <td style="color: rgb(196, 37, 0); font-weight: bold;"><div align="center"> <strong>
    <?=++$count1;?>
  </strong></div></td>
    <td><div align="center">
      <?=$G_Namez;?>
    </div></td>
    <td><div align="center"> <strong>
      <?=$G_Scorez;?>
    </strong></div></td>
    <td><div align="center"><img src="get.php?aL=<?=$logo;?>.png" alt="" width="20" height="20"></div></td>
  </tr>
  <?

}
?>
					    </table></td>
						<td style="border-style: none; border-width: medium" width="16">&nbsp;</td>
					</tr>
				</table>				</td>
			</tr>
			<tr>
				<td style="border-style: none; border-width: medium">
				<img border="0" src="template/<?=$core['config']['template'] ?>/images/cont2.png" width="282" height="45"></td>
			</tr>
		</table>
		<p>&nbsp;</p></td>
	</tr>
	<tr>
		<td height="180" colspan="3" align="center" valign="top" style="border-style: none; border-width: medium"><span class="footer_font" style="border-style: none; border-width: medium">
		  <?=build_footer(),$XX= base64_decode('d3d3Lk1VT05MSU5FREVWLmNvbS5hcg==');?>
		</span></td>
	</tr>
</table></center>
</body>
</html>