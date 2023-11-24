<?
$get_config = simplexml_load_file('engine/config_mods/rankings_settings.xml');
if($get_config->active == '0'){
	echo msg('0',text_sorry_feature_disabled);
}else{
	$hide_stats = trim($get_config->hide_stats);
	
if(!isset($_GET['rank'])){
		$rank_type = 'characters';
}elseif (isset($_GET['rank'])){
	$rank_type = safe_input($_GET['rank'],'');
}
if(!isset($_GET['class'])){
	if($_GET['rank'] == 'guilds'){
		$rank_class_type = 'no_rank_type';
	}else{
		$rank_class_type = 'all';
	}
}elseif (isset($_GET['class'])){
	$rank_class_type = safe_input(set_limit($_GET['class'],'4',''),'');
}	
echo '
<script type="text/javascript">  
load_image= new Image(16,16); 
load_image.src="template/'.$core['config']['template'].'/images/load_page.gif";  
function get_data(div,id, page, form, append, data){
    document.getElementById(div).innerHTML = \'<img src="template/'.$core['config']['template'].'/images/load_page.gif" width="16" height="16">\';
	var veri;
	if( typeof(data) == "string")
		veri = data;
	else 
		veri = $(form).serialize();
	$.ajax({
   type: "POST",
   url: page,
   data: veri,
   error: function(html)
   {
   		alert("Falied to get data.");
   },
   success: function(html)
   {
    	if( typeof(append) == "boolean")
			$(id).append(html);
		else
			$(id).html(html);
   }
  });
  return false;
}
</script>';



echo '<ul class="nav nav-pills">';

switch ($rank_type){
	case 'rankings': 
	echo '<li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Personajes <span class="caret"></span></a>

                <ul class="dropdown-menu" role="menu">';

                if($rank_class_type == 'all'){
					echo '<li><a href="#" class="btn disabled">Todas las razas</a></li><li class="divider"></li>';
				}else{
					echo '<li><a href="#">Todas las razas</a></li><li class="divider"></li>';
				}

				foreach ($characters_class as $cls => $cls_n){
					if($rank_class_type == 'all'){
						echo '<li><a href="'.$core_run_script.'&rank=characters&class='.$cls.'" role="button">'.$cls_n[0].'</a></li>';
					}else{
						if($rank_class_type == $cls){
						echo '<li><a href="'.$core_run_script.'&rank=characters&class='.$cls.'"  class="btn disabled" role="button">'.$cls_n[0].'</a></li>';
					}else{
						echo '<li><a href="'.$core_run_script.'&rank=characters&class='.$cls.'" role="button">'.$cls_n[0].'</a></li>';
					}
					}
					
				}

                echo '

                </ul></li><li><a href="index.php?'.LOAD_GET_PAGE.'=rankings&rank=guilds">Clanes</a></li>';
	break;		

	case 'characters': 
	echo '<li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Personajes <span class="caret"></span></a>

                <ul class="dropdown-menu" role="menu">';

                if($rank_class_type == 'all'){
					echo '<li><a href="#" class="btn disabled">Todas las razas</a></li><li class="divider"></li>';
				}else{
					echo '<li><a href="index.php?'.LOAD_GET_PAGE.'=rankings&rank=characters&class=all">Todas las razas</a></li><li class="divider"></li>';
				}

				foreach ($characters_class as $cls => $cls_n){
					if($rank_class_type == 'all'){
						echo '<li><a href="'.$core_run_script.'&rank=characters&class='.$cls.'" role="button">'.$cls_n[0].'</a></li>';
					}else{
						if($rank_class_type == $cls){
						echo '<li><a href="'.$core_run_script.'&rank=characters&class='.$cls.'"  class="btn disabled" role="button">'.$cls_n[0].'</a></li>';
					}else{
						echo '<li><a href="'.$core_run_script.'&rank=characters&class='.$cls.'" role="button">'.$cls_n[0].'</a></li>';
					}
					}
					
				}

                echo '

                </ul></li><li><a href="index.php?'.LOAD_GET_PAGE.'=rankings&rank=guilds">Clanes</a></li>';
	break;

	case 'guilds': 
	echo '<li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Personajes <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                <li><a href="index.php?'.LOAD_GET_PAGE.'=rankings&rank=characters&class=all">Todas las razas</a></li><li class="divider"></li>';
                foreach ($characters_class as $cls => $cls_n){
                	echo '<li><a href="'.$core_run_script.'&rank=characters&class='.$cls.'" role="button">'.$cls_n[0].'</a></li>';
                }
                
            echo'</ul>
            </li>
            <li class="active"><a href="#" class="btn disabled">Clanes</a></li>
';
	break;
}

echo '</ul>';




switch ($rank_type){
	case 'characters':
		if($rank_class_type == 'all'){

		echo'<br />
			<h2>RANKING DE PERSONAJES</h2>
			<table class="table table-striped table-condensed">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Personaje</th>
                        <th>Resets</th>
                        <th>Nivel</th>
                        <th>Pais</th>
                        <th>VIP</th>
                        

                        
                      </tr>
                    </thead>
                    <tbody>';


			//Cron Job check
			$jq_cron = $core_db->Execute("Select next_cron from MUCore_Cron_Jobs where cron_id=?",array(trim($get_config->cron_job_1)));
			if(cron_check($jq_cron->fields[0]) == false){
				$jq_cron_up = $core_db->Execute("Update MUCore_Cron_Jobs set next_cron=(".time()."+cron_time_set) where cron_id=?",array(trim($get_config->cron_job_1)));
				$qry_r = $core_db->Execute("Select top ".$get_config->char_top." mu_id,name,class,clevel,resetcount,accountid,masterresetcount from character where ctlcode = 0 order by resetcount desc, clevel desc, name asc");
				while (!$qry_r->EOF) {
						$init_r .= "".$qry_r->fields[0]."|".base64_encode($qry_r->fields[1])."|".$qry_r->fields[2]."|".$qry_r->fields[3]."|".$qry_r->fields[4]."|".fix_negative($qry_r->fields[5])."|".fix_negative($qry_r->fields[6])."|".fix_negative($qry_r->fields[7])."|".fix_negative($qry_r->fields[8])."|".$qry_r->fields[9]."|".$qry_r->fields[10]."|".fix_negative($qry_r->fields[11])."|".$qry_r->fields[12]."|\n";
					$qry_r->MoveNext();
				}
				$ge_ra_0 = "engine/cache/ra_0/ra_0.cache";
				$o_ra_0 = fopen($ge_ra_0,'w');
				fputs($o_ra_0, $init_r);
				fclose($o_ra_0);
			}
			
			//Show All Rankings from cache
				$cache_ra_0 = file('engine/cache/ra_0/ra_0.cache');
				$_cache_count = 0;
				foreach ($cache_ra_0 as $r_cache){
					$r_cache = explode("|",$r_cache);
						if(in_array($r_cache[9],get_array_variables($characters_ctlcode))){

							$_cache_count++;
switch ($_cache_count) {
	case '1':
		$cache_count = '<img class="img-circle" title="'.htmlspecialchars(base64_decode($r_cache[1])).' es el primero en el ranking!" src="template/'.$core['config']['template'].'/images/medalla_oro.png" width="35" height="35">';
		break;
	
	case '2':
		$cache_count = '<img class="img-circle" title="'.htmlspecialchars(base64_decode($r_cache[1])).' es el segundo en el ranking!" src="template/'.$core['config']['template'].'/images/medalla_plata.png" width="35" height="35">';
		break;

	case '3':
		$cache_count = '<img class="img-circle" title="'.htmlspecialchars(base64_decode($r_cache[1])).' es el tercero en el ranking!" src="template/'.$core['config']['template'].'/images/medalla_bronce.png" width="35" height="35">';
		break;

	case '4':
		$cache_count = '4';
		break;
	default:
	$cache_count++;
	break;
}

$status = mssql_fetch_row(mssql_query("SELECT top 50 ConnectStat FROM MEMB_STAT WHERE memb___id='$r_cache[10]' "));
if ($status[0] == 1) {
  $statusq = mssql_fetch_row(mssql_query("SELECT top 50 GameIDC FROM AccountCharacter WHERE Id='$r_cache[10]' "));
if ($statusq[0] == htmlspecialchars(base64_decode($r_cache[1]))) {
$_status = 'class="arg-char-online img-circle" title="Conectado al servidor"';
  }else{
    $_status = 'class="arg-char-offline img-circle" title="Desconectado del servidor"';
  }

}else{
    $_status = 'class="arg-char-offline img-circle" title="Desconectado del servidor"';
}
                            /* Código implementado gracias a ObagNetwork */
$ObagVIP = mssql_fetch_row(mssql_query("Select Vip from MEMB_INFO where memb___id='$r_cache[10]'"));
			$VIP = $ObagVIP[0];
			if ($VIP == 0) {$VIP = '<img src="template/'.$core['config']['template'].'/images/class/novip.gif">';}
			if ($VIP == 1) {$VIP = '<img src="template/'.$core['config']['template'].'/images/class/vip.gif">';}
                            
$country_check = "Select country from MEMB_INFO where memb___id='$r_cache[10]'";
    $country_reults = mssql_query($country_check);
    $country = mssql_fetch_row($country_reults);
    for ($numpais = 1;$numpais < 240;$numpais++) {
        if ($country[0] == $numpais) {
            $country[0] = '<img src="template/'.$core['config']['template'].'/images/flags/' . $numpais . '.gif">';
        }
        break;
    }
    if ($country[0] == '') {
        $country[0] = '<img src="template/'.$core['config']['template'].'/images/flags/ve.gif"/>';
    }
    if ($country[0] == '0') {
        $country[0] = '<img src="template'.$core['config']['template'].'images/flags/desco.png"/>';
    }
					echo '
				   		<tr>
							<td>';
							if ($cache_count>=4) {
								echo '<span class="badge">'.$cache_count.'</span>';
							}else{
								echo $cache_count;
							}
                            
                            /* fin */

					echo '</td>
							<td><img '.$_status.' src="template/'.$core['config']['template'].'/images/class/'.decode_class($r_cache[2],'2').'" width="35" height="35"><spam>&#160;</spam> <strong>'.htmlspecialchars(base64_decode($r_cache[1])).'</strong></td>
                            <td style="font-weight:700">'.$r_cache[4].'</td>
                            <td>'.$r_cache[3].'</td>
                            <td>'.$country[0].'</td>
                            <td>'.$VIP.'</td>
                        </tr>
                        ';
						}
					
				}
				echo '</tbody></table>';
			
			echo '<div align="right" class="alert alert-info"><i class="fa fa-clock-o" aria-hidden="true"></i> '.str_replace("{date}",date('d/m/Y H:i A',$jq_cron->fields[0]),'La pr&oacute;xima actualizaci&oacute;n de &eacute;ste ranking ser&aacute; el {date}').'</div>';

		}elseif (is_numeric($rank_class_type)){
			//Cron Job Check
			$jq_cron = $core_db->Execute("Select next_cron from MUCore_Cron_Jobs where cron_id=?",array(trim($get_config->cron_job_2)));
			if(cron_check($jq_cron->fields[0]) == false){
				$jq_cron_up = $core_db->Execute("Update MUCore_Cron_Jobs set next_cron=(".time()."+cron_time_set) where cron_id=?",array(trim($get_config->cron_job_2)));
				$qry_c_dis = $core_db->Execute("Select DISTINCT class from character");
				while (!$qry_c_dis ->EOF) {
					$qry_c = $core_db->Execute("Select top ".$get_config->char_top." mu_id,name,class,clevel,resetcount,accountid,masterresetcount from character where class='".$qry_c_dis->fields[0]."' and ctlcode = 0 order by resetcount desc, clevel desc, name asc");
					while (!$qry_c->EOF){
							$init_cls .= "".$qry_c->fields[0]."|".base64_encode($qry_c->fields[1])."|".$qry_c->fields[2]."|".$qry_c->fields[3]."|".$qry_c->fields[4]."|".fix_negative($qry_c->fields[5])."|".fix_negative($qry_c->fields[6])."|".fix_negative($qry_c->fields[7])."|".fix_negative($qry_c->fields[8])."|".$qry_c->fields[9]."|".$qry_c->fields[10]."|".fix_negative($qry_c->fields[11])."|".$qry_c->fields[12]."|\n";
						$qry_c->MoveNext();
					}
					$qry_c_dis->MoveNext();
				}
				$ge_ra_1 = "engine/cache/ra_0/ra_1.cache";
				$o_ra_1 = fopen($ge_ra_1,'w');
				fputs($o_ra_1, $init_cls);
				fclose($o_ra_1);
			}
				//Show Class Rankings from cache
				echo'<br />
			<h2>RANKING DE PERSONAJES</h2>
			<table class="table table-striped table-condensed">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Personaje</th>
                        <th>Resets</th>
                        <th>Nivel</th>
                        <th>Pais</th>
                        <th>VIP</th>

                        
                      </tr>
                    </thead>
                    <tbody>';
				$cache_ra_1 = file('engine/cache/ra_0/ra_1.cache');
				$_cache_count = 0;
				foreach ($cache_ra_1 as $r_cache){
					$r_cache = explode("|",$r_cache);
					if($r_cache[2] == $rank_class_type){

							if(in_array($r_cache[9],get_array_variables($characters_ctlcode))){
								$_cache_count++;
switch ($_cache_count) {
	case '1':
		$cache_count = '<img class="img-circle" title="'.htmlspecialchars(base64_decode($r_cache[1])).' es el primero en el ranking!" src="template/'.$core['config']['template'].'/images/medalla_oro.png" width="35" height="35">';
		break;
	
	case '2':
		$cache_count = '<img class="img-circle" title="'.htmlspecialchars(base64_decode($r_cache[1])).' es el segundo en el ranking!" src="template/'.$core['config']['template'].'/images/medalla_plata.png" width="35" height="35">';
		break;

	case '3':
		$cache_count = '<img class="img-circle" title="'.htmlspecialchars(base64_decode($r_cache[1])).' es el tercero en el ranking!" src="template/'.$core['config']['template'].'/images/medalla_bronce.png" width="35" height="35">';
		break;

	case '4':
		$cache_count = '4';
		break;
	default:
	$cache_count++;
	break;
}

$status = mssql_fetch_row(mssql_query("SELECT top 50 ConnectStat FROM MEMB_STAT WHERE memb___id='$r_cache[10]' "));
if ($status[0] == 1) {
  $statusq = mssql_fetch_row(mssql_query("SELECT top 50 GameIDC FROM AccountCharacter WHERE Id='$r_cache[10]' "));
if ($statusq[0] == htmlspecialchars(base64_decode($r_cache[1]))) {
$_status = 'class="arg-char-online img-circle" title="Conectado al servidor"';
  }else{
    $_status = 'class="arg-char-offline img-circle" title="Desconectado del servidor"';
  }

}else{
    $_status = 'class="arg-char-offline img-circle" title="Desconectado del servidor"';
}
  /* Código implementado gracias a ObagNetwork */
$ObagVIP = mssql_fetch_row(mssql_query("Select Vip from MEMB_INFO where memb___id='$r_cache[10]'"));
			$VIP = $ObagVIP[0];
			if ($VIP == 0) {$VIP = '<img src="template/'.$core['config']['template'].'/images/class/novip.gif">';}
			if ($VIP == 1) {$VIP = '<img src="template/'.$core['config']['template'].'/images/class/vip.gif">';}
                            
$country_check = "Select country from MEMB_INFO where memb___id='$r_cache[10]'";
    $country_reults = mssql_query($country_check);
    $country = mssql_fetch_row($country_reults);
    for ($numpais = 1;$numpais <= 240;$numpais++) {
        if ($country[0] == $numpais) {
            $country[0] = '<img src="template/'.$core['config']['template'].'/images/flags/' . $numpais . '.gif">';
        }
        break;
    }

    if ($country[0] == '') {
        $country[0] = '<img src="template/'.$core['config']['template'].'/images/flags/desco.png"/>';
    }
    if ($country[0] == '0') {
        $country[0] = '<img src="template'.$core['config']['template'].'images/flags/desco.png"/>';
    }
					echo '
				   		<tr>
							<td>';
							if ($cache_count>=4) {
								echo '<span class="badge">'.$cache_count.'</span>';
							}else{
								echo $cache_count;
							}
                            
                            /* fin */

					echo '</td>
							<td><img '.$_status.' src="template/'.$core['config']['template'].'/images/class/'.decode_class($r_cache[2],'2').'" width="35" height="35"><spam>&#160;</spam> <strong>'.htmlspecialchars(base64_decode($r_cache[1])).'</strong></td>
                            <td style="font-weight:700">'.$r_cache[4].'</td>
                            <td>'.$r_cache[3].'</td>
                            <td>'.$country[0].'</td>
                            <td>'.$VIP.'</td>
                        </tr>
                        ';
							
						}
					}
				}

				echo '</tbody></table>';

			echo '<div align="right" class="alert alert-info"><i class="fa fa-clock-o" aria-hidden="true"></i> '.str_replace("{date}",date('d/m/Y H:i A',$jq_cron->fields[0]),'La pr&oacute;xima actualizaci&oacute;n de &eacute;ste ranking ser&aacute; el {date}').'</div>';
		}
		break;


	case 'guilds':
		$jq_cron = $core_db->Execute("Select next_cron from MUCore_Cron_Jobs where cron_id=?",array(trim($get_config->cron_job_3)));
		if(cron_check($jq_cron->fields[0]) == false){
			$jq_cron_up = $core_db->Execute("Update MUCore_Cron_Jobs set next_cron=(".time()."+cron_time_set) where cron_id=?",array(trim($get_config->cron_job_3)));
			$qry_g = $core_db->Execute("Select top ".$get_config->guilds_top." G_name,G_Mark,G_Score,G_Master from Guild order by G_Score desc, G_name asc");
			while (!$qry_g->EOF) {
				$qry_n_m = $core_db->Execute("Select name from GuildMember where G_name=?",array($qry_g->fields[0]));
				$ra_02 .= "".md5_encrypt($qry_g->fields[0])."|".urlencode(bin2hex($qry_g->fields[1]))."|".$qry_g->fields[2]."|".md5_encrypt($qry_g->fields[3])."|".$qry_n_m->RecordCount()."|\n";
				$qry_g->MoveNext();
			}
			$ge_ra_2 = "engine/cache/ra_0/ra_2.cache";
			$o_ra_2 = fopen($ge_ra_2,'w');
			fputs($o_ra_2, $ra_02);
			fclose($o_ra_2);
		}
			echo '<h2>RANKING DE CLANES</h2><table class="table table-striped table-condensed">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Clan</th>
                    <th>L&iacute;der</th>
                    <th>Miembros</th>
                    <th>Score</th>
                  </tr>
                </thead>
                <tbody>';
			$cache_ra_1 = file('engine/cache/ra_0/ra_2.cache');
			$_cache_count = 0;
			foreach ($cache_ra_1 as $r_cache){
				$r_cache = explode("|",$r_cache);
				$_cache_count++;
switch ($_cache_count) {
	case '1':
		$cache_count = '<img class="img-circle" title="'.htmlspecialchars(md5_decrypt($r_cache[0])).' es el primero en el ranking!" src="template/'.$core['config']['template'].'/images/medalla_oro.png" width="35" height="35">';
		break;
	
	case '2':
		$cache_count = '<img class="img-circle" title="'.htmlspecialchars(md5_decrypt($r_cache[0])).' es el segundo en el ranking!" src="template/'.$core['config']['template'].'/images/medalla_plata.png" width="35" height="35">';
		break;

	case '3':
		$cache_count = '<img class="img-circle" title="'.htmlspecialchars(md5_decrypt($r_cache[0])).' es el tercero en el ranking!" src="template/'.$core['config']['template'].'/images/medalla_bronce.png" width="35" height="35">';
		break;

	case '4':
		$cache_count = '4';
		break;
	default:
	$cache_count++;
	break;
}

				echo '
				<tr>
				<td>';
							if ($cache_count>=4) {
								echo '<span class="badge">'.$cache_count.'</span>';
							}else{
								echo $cache_count;
							}

					echo '</td>

                        <td style="color:#337AB7;"><img style="border:1px solid black;" src="get.php?aL='.$r_cache[1].'" width="35" height="35" valign="middle"<spam>&#160; &#160;</spam><strong>'.htmlspecialchars(md5_decrypt($r_cache[0])).'</strong></td>
                        <td><strong>'.htmlspecialchars(md5_decrypt($r_cache[3])).'</strong></td>
                        <td>'.$r_cache[4].'</font></td>
                        <td style="font-weight:700">'.$r_cache[2].'</font></td>
                    </tr>
				';
				
			}
        
					
			echo '</tbody></table>';
		
		echo '<div align="right" class="alert alert-info"><i class="fa fa-clock-o" aria-hidden="true"></i> '.str_replace("{date}",date('d/m/Y H:i A',$jq_cron->fields[0]),'La pr&oacute;xima actualizaci&oacute;n de &eacute;ste ranking ser&aacute; el {date}').'</div>';
	break;	
}
echo '';

	
	

}
		

?>
         <div align="center">
              <table width="0" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  
          <tr>
            <td id="InfoOnlines2">Usuarios Free <img src="template/<?=$core['config']['template'] ?>/images/class/novip.gif" alt="" width="7" height="14"></td>
                  </tr>
                <tr>
                  <td id="InfoOnlines2">Usuarios VIP <img src="template/<?=$core['config']['template'] ?>/images/class/vip.gif" alt="" width="7" height="14"></td>
                  </tr>
              </table>
            </div>