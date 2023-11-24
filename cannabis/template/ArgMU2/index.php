<?php
if (!isset($_SERVER["HTTP_X_REQUESTED_WITH"])) {
    header('HTTP/1.1 403 Forbidden');
}
$DvGamesX = 'engine';
require_once("config/ObagNetwork.php");
require_once("$DvGamesX/connect_core.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <style>
.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 13px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px
}
        #menu li{
       list-style:none;
       }
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?= build_header_seo(); ?>
<title><?= build_header_title(); ?></title>
<script src="template/<?= $core['config']['template'] ?>/js/jquery.js" type="text/javascript"></script>
<script src="template/<?= $core['config']['template'] ?>/js/jquery-1.11.3.min.js" type="text/javascript" language="javascript"></script>
<script src="template/<?= $core['config']['template'] ?>/js/bootstrap.min.js"></script>
<link href="template/<?= $core['config']['template'] ?>/images/favicon.ico" rel="shortcut icon"/>
<link href="template/<?= $core['config']['template'] ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="template/<?= $core['config']['template'] ?>/css/bootstrap.min.css" rel="stylesheet">
<link href="template/<?= $core['config']['template'] ?>/css/estilos.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/core_global.js" language="javascript" type="text/javascript"></script>
<script language=JavaScript type="text/javascript">
			function inhabilitar(){
			//alert ("Click derecho desactivado.")
			return false
			}
			document.oncontextmenu=inhabilitar
		</script>
<script type="text/javascript">
			var persistclose= 1 //set to 0 or 1. 1 means once the bar is manually closed, it will remain closed for browser session
			var startX = 0 //set x offset of bar in pixels
			var startY = 20 //set y offset of bar in pixels
			var verticalpos="frombottom" //enter "fromtop" or "frombottom"

			function iecompattest(){
			return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
			}

			function get_cookie(Name) {
			var search = Name + "="
			var returnvalue = "";
			if (document.cookie.length > 0) {
			offset = document.cookie.indexOf(search)
			if (offset != -1) {
			offset += search.length
			end = document.cookie.indexOf(";", offset);
			if (end == -1) end = document.cookie.length;
			returnvalue=unescape(document.cookie.substring(offset, end))
			}
			}
			return returnvalue;
			}

			function closebar(){
			if (persistclose)
			document.cookie="remainclosed=1"
			document.getElementById("topbar").style.visibility="hidden"
			}

			function staticbar(){
			   barheight=document.getElementById("topbar").offsetHeight
			   var ns = (navigator.appName.indexOf("Netscape") != -1) || window.opera;
			   var d = document;
			   function ml(id){
			      var el=d.getElementById(id);
			      if (!persistclose || persistclose && get_cookie("remainclosed")=="")
			      el.style.visibility="visible"
			      if(d.layers)el.style=el;
			      el.sP=function(x,y){this.style.left=x+"px";this.style.top=y+"px";};
			      el.x = startX;
			      if (verticalpos=="fromtop")
			      el.y = startY;
			      else{
			      el.y = ns ? pageYOffset + innerHeight : iecompattest().scrollTop + iecompattest().clientHeight;
			      el.y -= startY;
			      }
			      return el;
			   }
			   window.stayTopLeft=function(){
			      if (verticalpos=="fromtop"){
			      var pY = ns ? pageYOffset : iecompattest().scrollTop;
			      ftlObj.y += (pY + startY - ftlObj.y)/8;
			      }
			      else{
			      var pY = ns ? pageYOffset + innerHeight - barheight: iecompattest().scrollTop + iecompattest().clientHeight - barheight;
			      ftlObj.y += (pY - startY - ftlObj.y)/8;
			      }
			      ftlObj.sP(ftlObj.x, ftlObj.y);
			      setTimeout("stayTopLeft()", 10);
			   }
			   ftlObj = ml("topbar");
			   stayTopLeft();
			}

			if (window.addEventListener)
			window.addEventListener("load", staticbar, false)
			else if (window.attachEvent)
			window.attachEvent("onload", staticbar)
			else if (document.getElementById)
			window.onload=staticbar
		</script>
</head>
<body>
<?php
if ($core['config']['on_off'] == '0' || $core['debug'] == '1') {
    if (isset($_SESSION['admin_login_auth'])) {
        echo '<div align="center" style="color: red; background-color: white; padding:2px"><b>Warning: The website is currently turned off!</b></div>';
    }
    
}
echo '<script type="text/javascript">
<!--
var currentTime = new Date();
var c_hours = currentTime.getHours() ;
var c_minutes = currentTime.getMinutes();
time_c_d = c_hours;


function make_header_welcome(time,user,last_msg){
	if(time < \'1\'){
		welcome_start =  "Shouldn\'t you be going to bed soon";
		welcome_end = \'?\';
	}
	else if(time < \'2\'){
		welcome_start =  "Up late, aren\'t we";
		welcome_end = \'?\';
	}
	else if(time < \'4\'){
		welcome_start =  "Having trouble sleeping";
		welcome_end = \'?\';
	}
	else if(time < \'5\'){
		welcome_start =  "Still can\'t sleep";
		welcome_end = \'?\';
	}
	else if(time < \'7\'){
		welcome_start =  "Aren\'t you the early bird";
		welcome_end = \'?\';
	}
	else if(time <\'12\'){
		welcome_start =  "Good morning";
		welcome_end = \'.\';
	}
	else if(time < \'13\'){
		welcome_start =  "Enjoying your lunch break";
		welcome_end = \'?\';
	}
	else if(time < \'17\'){
		welcome_start =  "Good Afternoon";
		welcome_end = \'.\';
	}	
	else if(time < \'18\'){
		welcome_start =  "What\'s for dinner";
		welcome_end = \'?\';
	}
	else if(time < \'22\'){
		welcome_start =  "Good Evening";
		welcome_end =  \'.\';
	}
	else if(time < \'23\'){
		welcome_start =  "Where your children are";
		welcome_end = \'?\';
	}else{
		welcome_start =  "Shouldn\'t you be going to bed soon";
		welcome_end = \'?\';
	}
	document.getElementById(\'welcome_stats\').innerHTML = welcome_start+\', \'+user+welcome_end+last_msg;
}
//-->
</script>';
?>
<section id="argentinamu" data-type="xbackground" style="height: 100%" class="<?php
require_once("time.php");
?>">
<div id="argmu-header">
<div class="navbar navbar-inverse navbar-argmu navbar-static-top" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Navegaci&oacute;n</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php"><?php
echo server_name;
?></a>
</div>
<div class="navbar-collapse collapse">
<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Inicio <b class="caret"></b></a>
<ul class="dropdown-menu argmu-dropdown-menu">
<li><a href="index.php?page_id=noticias">Noticias</a></li>
<li><a href="index.php?page_id=informacion">Info del Servidor</a></li>
<li><a href="index.php?page_id=mercado">Mercado</a></li>
<li class="divider"></li>
<li><a href="<?php
echo url_forum;
?>" target="_blank">Foro</a></li>
<li class="divider"></li>
<li><a href="index.php?page_id=staff">Staff</a></li>
<li><a href="index.php?page_id=tyc">Terminos &amp; Condiciones</a></li>
<li><a href="index.php?page_id=contactanos">Contactanos</a></li>
<li><a href="#" target="_blank">Gu&iacute;as de Ayuda</a></li>
</ul>
</li>
    <?php
    if($user_login == '0'){
        echo '<li class="navbar-inverse"><a href="index.php?page_id=register">Crear Cuenta</a></li>';
    }
    ?>
<li><a href="index.php?page_id=downloads">Descargas</a></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Rankings <b class="caret"></b></a>
<ul class="dropdown-menu argmu-dropdown-menu">
<li><a href="index.php?page_id=rankings&amp;rank=characters">Personajes</a></li>
<li><a href="index.php?page_id=rankings&amp;rank=guilds">Clanes</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Eventos <b class="caret"></b></a>
<ul class="dropdown-menu argmu-dropdown-menu">
<li><a href="index.php?page_id=castlesiege">Castle Siege</a></li>
<li><a href="#" target="_blank">Otros</a></li>
</ul>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color: #F0AD4E">Donaciones <b class="caret"></b></a>
<ul class="dropdown-menu argmu-dropdown-menu">
<li><a href="index.php?page_id=donaciones">MU Coins</a></li>
<li><a href="index.php?page_id=panel_u&amp;panel=vip">VIP</a></li>
</ul>
</li>
<?php
if ($user_login == '1') {
    echo '<li class="dropdown">
<a href="#" class="dropdown-toggle navbar-inverse" data-toggle="dropdown">Mi Cuenta <b class="caret"></b></a>
<ul class="dropdown-menu argmu-dropdown-menu">';
    $m_uss_row_  = get_sort('engine/cms_data/mods_uss.cms', '¦');
    $count_m_uss = 0;
    foreach ($m_uss_row_ as $tr) {
        #explode("¦",$tr);
        $count_m_uss++;
        if ($tr[6] == '1') {
            if ($tr[3] != ACCOUNTSETTINGS_CMS_USER) {
                if ($tr[7] != '1') {
                    echo '<li><a href="' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=' . USER_CMS_PAGE . '&' . USER_GET_PAGE . '=' . $tr[3] . '">' . str_replace($menu_links_title, $menu_links_translated, $tr[2]) . '</a></li>';
                }
            }
            
        }
    }
    echo '
		<li class="divider"></li>
<!--<li><a href="index.php?pagina=panel_u&panel=mi_cuenta"><span style="font-weight:700;">Resumen de cuenta</span></a></li>-->
<li><a href="' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=' . USER_CMS_PAGE . '&' . USER_GET_PAGE . '=' . ACCOUNTSETTINGS_CMS_USER . '">' . link_account_settings . '</a></li>
<li class="divider"></li>
<li><a href="' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=logout"><span style="font-weight:700; color:#A51102;">' . link_log_out . '</span></a></li>
</ul>
		
</li>';
}
?>
<li class="dropdown" style="background-color: #A51102">
<?php
if (!$user_login == '1') {
    echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ingresar! <b class="caret"></b></a>';
}
?>
<div class="dropdown-menu argmu-dropdown-login" style="background-color: #FFFFFF">
<div class="col-sm-12">
<?php
if ($user_login == '1') {
    echo '<li style="background-color: #A51102"><a href="' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=logout">' . link_log_out . '</a></li>';
} else {
    echo '<form id="argmu-form-login" action="' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=' . LOGIN_CMS_PAGE . '" name="uss_login_form" method="POST">
<input name="uss_id" class="form-control-login input-sm" type="text" placeholder="Usuario" id="account" maxlength="10"/>
<input name="uss_password" type="password" placeholder="Contrase&ntilde;a" class="form-control-login input-sm" id="password" maxlength="10"/><input type="hidden" name="process_login">
<button type="submit" class="btn btn-danger btn-sm" onclick="uss_login_form.submit();">ENTRAR!</button><br/>
</form>
<br/>
<a href="' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=' . LOSTPASSWORD_CMS_PAGE . '"><span class="text-danger"><strong>' . link_lost_password . '</strong></span></a><br/>
<a href="' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=' . REGISTER_CMS_PAGE . '"><span class="text-success"><strong>' . link_sign_up . '</strong></span></a>';
}
?>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="hidden-xs arg-header-space"></div>
<div class="hidden-xs arg-carousel-container">
 
<div id="carousel-example-generic" class="arg-carousel carousel slide" data-ride="carousel">
<div class="carousel-inner" role="listbox">
<div class="item active">
<a href="<?php
echo url_forum;
?>" target="_blank"><img src="template/<?= $core['config']['template'] ?>/images/slider/001.jpg" alt="Foro" class="img-responsive" width="100%"></a>
</div> <div class="item">
<a href="#" target="_blank"><img src="template/<?= $core['config']['template'] ?>/images/slider/002.jpg" alt="Guias" class="img-responsive" width="100%"></a>
</div>
<div class="item">
<a href="index.php?page_id=panel_u&amp;panel=vip" target="_self"><img src="template/<?= $core['config']['template'] ?>/images/slider/003.jpg" alt="Vip" class="img-responsive" width="100%"></a>
</div>
<ol class="carousel-indicators">
<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
<li data-target="#carousel-example-generic" data-slide-to="1"></li>
<li data-target="#carousel-example-generic" data-slide-to="2"></li>
</ol> </div>
</div>
</div>
<div class="hidden-xs arg-carousel-container-sorteo">
<div id="carousel-example-generic" class="arg-carousel carousel slide" data-ride="carousel">
<div class="carousel-inner" role="listbox">
<a href="index4c39.html?pagina=sorteo" target="_self"><img src="template/<?= $core['config']['template'] ?>/images/slider/004.jpg" alt="Sorteo" class="img-responsive" width="100%"></a>
</div>
</div>
</div>
<div class="hidden-xs arg-carousel-container-don">
<div id="carousel-example-generic" class="arg-carousel carousel slide" data-ride="carousel">
<div class="carousel-inner" role="listbox">
<a href="indexf579.html?pagina=donaciones" target="_self"><img src="template/<?= $core['config']['template'] ?>/images/slider/005.jpg" alt="Promoci&oacute;n del momento!" class="img-responsive" width="100%"></a>
</div>
</div>
</div>
<div class="hidden-md hidden-lg hidden-sm">
<a href="<?php
echo url_forum;
?>" target="_blank"><img src="template/<?= $core['config']['template'] ?>/images/slider/001.jpg" alt="Foro" class="img-responsive" width="100%"></a>
<a href="#" target="_blank"><img src="template/<?= $core['config']['template'] ?>/images/slider/002.jpg" alt="Guias" class="img-responsive" width="100%"></a>
<a href="index.php?page_id=panel_u&amp;panel=vip" target="_self"><img src="template/<?= $core['config']['template'] ?>/images/slider/003.jpg" alt="Vip" class="img-responsive" width="100%"></a>
</div>

<div class="container argmu argmu-page-content clearfix">
<div class="row">
<div class="col-md-12">
<div id="argmu-noticias">
<div class="noticia">
<div class="row"> 
<?php
if (CMS_NAVBAR == '1') {
    if (isset($_GET[LOAD_GET_PAGE])) {
        $l_load = file("engine/cms_data/pag_d.cms");
        foreach ($l_load as $l_name) {
            $l_name = explode("¦", $l_name);
            if ($l_name[3] == $page_check_id) {
                $primary_l = $l_name[2];
                break;
            }
            
        }
    }
    
    if (isset($_GET[USER_GET_PAGE])) {
        $ti2_td  = xss_clean(safe_input($_GET[USER_GET_PAGE], "_"));
        $l2_load = file("engine/cms_data/mods_uss.cms");
        foreach ($l2_load as $l2_name) {
            $l2_name = explode("¦", $l2_name);
            if ($l2_name[3] == $ti2_td) {
                $secondary_l = $l2_name[2];
                break;
            }
        }
    }
    
    if (!isset($_GET[LOAD_GET_PAGE])) {
        #&gt;
        $title_p = '<a href="' . $core['config']['website_url'] . '">' . $core['config']['websitetitle'] . '</a>';
    } elseif (isset($_GET[LOAD_GET_PAGE])) {
        if (isset($_GET[USER_GET_PAGE])) {
            $usercp_module_title = str_replace($modules_text_tile, $modules_text_translate, $secondary_l);
            $title_p             = '<a href="' . $core['config']['website_url'] . '">' . $core['config']['websitetitle'] . '</a> &gt; <a href="' . $core['config']['website_url'] . '/' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=' . $l_name[3] . '">' . str_replace($menu_links_title, $menu_links_translated, $primary_l) . '</a> &gt; <a href="' . $core['config']['website_url'] . '/' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=' . $l_name[3] . '&panel=' . $l2_name[3] . '">' . $usercp_module_title . '</a>';
        } else {
            $title_p = '<a href="' . $core['config']['website_url'] . '">' . $core['config']['websitetitle'] . '</a> &gt; <a href="' . $core['config']['website_url'] . '/' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=' . $l_name[3] . '">' . str_replace($menu_links_title, $menu_links_translated, $primary_l) . '</a>';
        }
    }

    
}

if ($page_check_id != ANNOUNCEMENTS_CMS_PAGE) {
    require('engine/announcement_config.php');
    if ($core['ANNOUNCEMENT']['ACTIVE'] == '1') {
        $ann_file  = array_reverse(file('engine/variables_mods/announcements.tDB'));
        $count_ann = '0';
        foreach ($ann_file as $ann) {
            $ann = explode("¦", $ann);
            if ($ann[3] > time()) {
                $ann_found = '1';
                $ann_title = $ann[1];
                $ann_date  = $ann[2];
                $ann_id    = $ann[0];
                ;
                break;
            }
        }
    }
    if ($ann_found == '1') {
        echo '
		<div class="tmp_m_content"> 
					<div class="tmp_right_title">' . text_announcement . '</div>
					<div class="tmp_page_content">
								<table cellpadding="0" cellspacing="0" border="0" width="100%">
					  <tr>
					  <td rowspan="3" align="left" width="60"><img src="template/' . $core['config']['template'] . '/images/announcement.gif" width="38" height="38"></td>
					  <td align="left" style="padding-top: 2px; padding-bottom: 2px;"><a href="' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=' . ANNOUNCEMENTS_CMS_PAGE . '#announcement-' . $ann_id . '">' . $ann_title . '</a></td>
					  <td align="right" class="ann_date">' . date('F j, Y | H:i', $ann_date) . '</td>
					  </tr>
					  <tr>
					  <td colspan="2"  align="left" style="background-image:url(template/' . $core['config']['template'] . '/images/inner_line.jpg); height: 2px;"></td>
					  </tr>
					  
					  ';
        if ($core['ANNOUNCEMENT']['AUTHOR'] == '1') {
            echo '<tr>
			<td colspan="2" align="right"><b>' . $core['config']['admin_nick'] . '</b> (Administrator)</td>
			</tr>';
            
        }
        echo '</table></div>
							</div>
						';
    }
}



$load_pages = file('engine/cms_data/pag_d.cms');
foreach ($load_pages as $pages_loaded) {
    $pages_loaded = explode("¦", $pages_loaded);
    
    if ($pages_loaded[3] == $page_check_id) {
        $p_loaded_array = preg_split("/\ /", $pages_loaded[5]);
        $p_l            = '1';
        break;
    }
}
if ($p_l == '1') {
    $load_mods = file('engine/cms_data/mods.cms');
    foreach ($load_mods as $mods_loaded) {
        $mods_loaded = explode("¦", $mods_loaded);
        if (in_array($mods_loaded[0], $p_loaded_array)) {
            $_c_id_m[] = $mods_loaded[0];
        } else {
            $_c_id_m[] = 'NULL';
        }
    }
    $co = 0;
    foreach ($p_loaded_array as $give) {
        #echo $give;
        if (in_array($give, $_c_id_m)) {
            foreach ($load_mods as $give_me_out) {
                $give_me_out = explode("¦", $give_me_out);
                if ($give_me_out[0] == $give) {
                    if ($give_me_out[4] == '1') {
                        if ($_GET[LOAD_GET_PAGE] == USER_CMS_PAGE && isset($_GET[USER_GET_PAGE])) {
                            $construct_title = $secondary_l;
                        } else {
                            $construct_title = $give_me_out[3];
                        }
                        
                        echo '<div class="tipo">' . htmlspecialchars(str_replace($modules_text_tile, $modules_text_translate, $give_me_out[3])) . '</div><div class="col-md-9" style="border-right: 1px solid #EEEEEE;">  ';
                        if ($give_me_out[1] == '1') {
                            if (is_file("pages_modules/" . $give_me_out[2] . "")) {
                                include('pages_modules/' . $give_me_out[2] . '');
                            } else {
                                echo 'Unable to load module file, reason: not found.';
                            }
                        } elseif ($give_me_out[1] == '0') {
                            if (is_file('engine/cms_data/cms_co/' . $give_me_out[0] . '_cms.cms')) {
                                include('engine/cms_data/cms_co/' . $give_me_out[0] . '_cms.cms');
                            } else {
                                echo 'Unable to load module content, reason: not found.';
                            }
                        }
                        echo '</div>';
                    }
                }
            }
        }
    }
}
?>
<br/>

<div class="col-md-3">
     <?php if($user_login== '1'){
    echo '<div class="well wellargpaletteOBAG"><h2 align="center">PANEL DE USUARIO</h2></div>';
}
     else{echo'<div class="well wellargpaletteOBAG"><h2 align="center">LOGIN</h2></div>';}?>
<?php
    //editado By ObagNetwork
if ($user_login == '1') {
    $m_uss_row_  = get_sort('engine/cms_data/mods_uss.cms', '¦');
    $count_m_uss = 0;
    foreach ($m_uss_row_ as $tr) {
        #explode("¦",$tr);
        $count_m_uss++;
        if ($tr[6] == '1') {
            if ($tr[3] != ACCOUNTSETTINGS_CMS_USER) {
                if ($tr[7] != '1') {
                    echo '<div class="menu"<li><a href="' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=' . USER_CMS_PAGE . '&' . USER_GET_PAGE . '=' . $tr[3] . '">' . str_replace($menu_links_title, $menu_links_translated, $tr[2]) . '</a></li></div>';
                }
            }
            
        }
    }
    echo '
		
<!--<li><a href="index.php?pagina=panel_u&panel=mi_cuenta"><span style="font-weight:700;">Resumen de cuenta</span></a></li>-->
<li><a href="' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=' . USER_CMS_PAGE . '&' . USER_GET_PAGE . '=' . ACCOUNTSETTINGS_CMS_USER . '">' . link_account_settings . '</a></li>

<li><a href="' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=logout"><span style="font-weight:700; color:#A51102;">' . link_log_out . '</span></a></li>

		
</li>
<br />';
}
?>
<?php
if ($user_login == '1') {
    echo '';
} else {
    echo '<form id="argmu-form-login" action="' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=' . LOGIN_CMS_PAGE . '" name="uss_login_form" method="POST">
<div class="form-group">
			<input type="text" class="form-control-login input-md" placeholder="Usuario" name="uss_id" id="uss_id" maxlength="10" autocomplete="off">
		</div>
		<div class="form-group">
			<input type="password" class="form-control-login input-md" placeholder="Contrase&ntilde;a" name="uss_password" id="uss_password" maxlength="10" autocomplete="off">
		</div>
		<div class="form-group"> 
			<button type="submit" class="btn btn-primary btn-sm" onclick="return parse_inputs()">ENTRAR!</button><input type="hidden" name="process_login">&nbsp;<a href="index.php?page_id=lost_password"><span class="btn btn-danger btn-sm"><strong>&iexcl;Recuperar clave!</strong></span></a>
		</div>
        <p><a href="index.php?page_id=register" type="buttom" class="btn-block btn-lg btn btn-success">Crear cuenta</a></p>
';
}
?>

<p><a href="index.php?page_id=downloads" type="button" class=" btn-block btn-lg btn btn-info">DESCARGAR JUEGO</a></p>
<hr/>
<div class="well wellargpalette2">
<h3 align="center">SERVER INFO</h3>
<p align="center">  <table width="100%"><tbody><tr><td>
    
   
      <tbody>
          <tr>
          <td class='trhover' align='left'>Version:</td>		<td style='float: right;' ><span class='badge' style='font-size:13px;'><?php
echo url_version;
?></span></td>
</tr>
<tr>

<td class='trhover' align='left'>Exp:</td>	<td style='float: right;'><span class='badge' style='font-size:13px;'><?php
echo url_exp;
?></span></td>
</tr>
<tr>

<td class='trhover' align='left'>Drop:</td>		<td style='float: right;'><span class='badge' style='font-size:13px;'><?php
echo url_drop;
?></span></td>
          </tr>
<?php
//Dont Touch Bitch ^^!!
$characters = mssql_query("SELECT count(*) FROM Character");
$totalchars = mssql_fetch_row($characters);
$accounts = mssql_query("SELECT count(*) FROM MEMB_INFO");
$totalacc = mssql_fetch_row($accounts);
$guild = mssql_query("SELECT count(*) FROM Guild");
$totalguilds = mssql_fetch_row($guild);
$onlinepl = mssql_query("SELECT count(*) From MEMB_STAT where Connectstat='1'");
$online = mssql_result($onlinepl, 0, 0);
$bannedchar = mssql_query("SELECT count(*) FROM Character WHERE CtlCode='1'");
$bannchar = mssql_fetch_row($bannedchar);
$bannedacc = mssql_query("SELECT count(*) FROM MEMB_INFO where bloc_code ='1'");
$gm = mssql_query("SELECT * FROM Character WHERE CtlCode = 32");
$gms = mssql_num_rows($gm);
$gmon = mssql_fetch_array($gm);
$gmonline = mssql_query("SELECT * FROM MEMB_STAT WHERE memb___id='$gmon[AccountID]' AND ConnectStat=1");
$gmsonline = mssql_num_rows($gmonline);
$load = substr(100 * $online / 150, 0, 5);
//Dont Touch Again Bitch ^^!!
      
echo "<tr>

<td class='trhover' align='left'>Cuentas:</td>		<td style='float: right;'><span class='badge' style='font-size:13px;'>$totalacc[0]</span></td>
</tr>
<tr>

<td class='trhover' align='left'>Personajes:</td>	<td style='float: right;'><span class='badge' style='font-size:13px;'>$totalchars[0]</span></td>
</tr>
<tr>

<td class='trhover' align='left'>Guild:</td>		<td style='float: right;'><span class='badge' style='font-size:13px;'>$totalguilds[0]</span></td>
</tr>
<tr>

<td class='trhover' align='left'>Baneados:</td>	<td style='float: right;'><span class='badge' style='font-size:13px;'>$bannchar[0]</span></td>
</tr>
<tr>

<td class='trhover' align='left'>Staff Online:</td>		<td class='badge' style='float: right;'><span style='color:#0BDE17; font-size:13px;'>$gmsonline</span>/<span style='color:#F00; font-size:13px;'>$gms</span></td>
</tr>
<tr>

<td class='trhover' align='left'>Online:</td>	<td style='float: right;'><span class='badge' style='font-size:14px; color:#0BDE17;'>$online</span></td>
</tr>

";
?>



</table></p>
</div>
<hr/>
    <div class="well wellargpaletteOBAG"><h2 class="Facebook" align="center">Facebook</h2></div>
<p class="small text-center"><div class="fb-page" data-href="<?php echo FB; ?>" data-tabs="timeline" data-width="270" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php echo FB; ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo FB; ?>">ObagNetwork</a></blockquote></div>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</p>
</div> 

</div>  
</div>
</div>
</div>
</div>
<br/>
</div>
</div>
<?php
if (popup_notice == true) {
?>
<div id="topbar" class="topbar">
<nav class="navbar navbar-default navbar-fixed-bottom" id="topbar">
<div class="container-fluid">
<a href="#" onClick="closebar(); return false"><i class="fa fa-times" aria-hidden="true"></i> CERRAR!</a><br/>
<a href="<?php
    echo popup_link;
?>" title="<?php
    echo popup_title;
?>" target="_blank"><img src="<?php
    echo popup_image_link;
?>" alt="<?php
    echo popup_title;
?>" width="291" height="150" border="0" class="img-rounded img-thumbnail img-responsive"/></a>
<br/><br/>
</div>
</nav>
</div>
<?php
}
?>
<div id="argmu-footer" class="footer argmu-footer">
<div class="container">
<div class="row">
<div class="col-sm-12">
    <a href="<?php echo copyright?>"> Adaptation By Belcebu</a>
    <p>COPYRIGHT &#0169; <?php echo nameserver?>. TODOS LOS DERECHOS RESERVADOS.</p>

<p class="argmu-social-network">
<a href="<?php
echo FB;
?>" target="_blank" title="Seguinos en Facebook!"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>&nbsp;
<a href="<?php
echo TW;
?>" target="_blank" title="Seguinos en Twitter!"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>&nbsp;
<a href="<?php
echo YT;
?>" target="_blank" title="Seguinos en YouTube!"><i class="fa fa-youtube-square fa-2x" aria-hidden="true"></i></a>&nbsp;
<a href="<?php
echo IG;
?>" target="_blank" title="Seguinos en Instagram!"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
</p>
</div>
</div>
</div>
</div>
</section>
</body>
</html>