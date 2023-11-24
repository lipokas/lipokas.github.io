<style type="text/css">

#boton {
text-align: center;
font-size: 11px;
color: black;
border: #1E2D20 1px dashed; 
width: 120px; 
height: 25px;
background-color: #DEDEDE; 
font-weight: normal
}

</style>
<?
$config = simplexml_load_file('engine/config_mods/unstuck_character_settings.xml');
$active = trim($config->active);
if ($active == '0') {
    echo msg('0', text_sorry_feature_disabled);
} else {
    $mapnumber = trim($config->map_number);
    $map_pos_y = trim($config->map_pos_y);
    $map_pos_x = trim($config->map_pos_x);
    if (isset($_GET['uid'])) {
        $id = safe_input($_GET['uid'], '');
        if (empty($id) || !is_numeric($id)) {
            header('Location: ' . $core_run_script . '');
            exit();
        } else {
            if (character_and_account($id, $user_auth_id) === false) {
                header('Location: ' . $core_run_script . '');
                exit();
            } else {
                if (account_online($user_auth_id) === true) {
                    echo msg('0', '<h3>La cuenta está conectada en el juego, por favor desconectate del juego.</h3>');
                } else {
                    $unstuck = $core_db->Execute("Update character set [mapnumber]=?,[mapposx]=?,[mapposy]=? where mu_id=?", array(
                        $mapnumber,
                        $map_pos_x,
                        $map_pos_y,
                        $id
                    ));
                    if ($unstuck) {
                        echo msg('1', '<h3>Personaje destrabado exitosamente.</h3>');
                    } else {
                        echo msg('0', '<h3>No se pudo destrabar el personaje. Por favor contacte al Administrador.</h3>');
                    }
                }
            }
        }
    }
    
    $t4 = str_replace("{map}", decode_map($mapnumber));
    $t4 = str_replace("{coord_x}", $map_pos_x, $t4);
    $t4 = str_replace("{coord_y}", $map_pos_y, $t4);
    
    echo '
	<div style="margin-top: 20px;">
<fieldset>

<h1><i class="fa fa-refresh" aria-hidden="true"></i>&nbsp;Destrabar Personaje</h1>

<table border="0" cellspacing="4" cellpadding="0" width="100%" style="padding-left: 10px;">
<tr>
<td align="left">Luego de utilizar esta funcion, el personaje sera teletransportado a <b>Lorencia</b>.</td>
</tr>
</table>
</fieldset>
</div>';
    
    $characters = $core_db->Execute("Select mu_id,name,class,mapnumber,mapposx,mapposy from character where accountid=? order by clevel desc ", array(
        $user_auth_id
    ));
    
    echo '<table border="0" cellspacing="4" cellpadding="0" width="100%" style="margin-top: 10px; margin-bottom: 10px;">';
    while (!$characters->EOF) {
        echo '<tr>
     <td width="66" rowspan="2"><img src="template/' . $core['config']['template'] . '/images/class/' . decode_class($characters->fields[2], '2') . '" width="66" height="66" title="Class"></td>
     <td align="left" style="color:red"  width="100">&nbsp; ' . htmlentities($characters->fields[1]) . '</td>
     <td align="left" >&nbsp; <b>Ubicacion:</b> ' . decode_map($characters->fields[3]) . '</td>
  </tr>
  <tr>
   <td algin="left" style="color:green" width="100">&nbsp; ' . decode_class($characters->fields[2]) . '</td>
    <td>&nbsp;<input name="submit" type="submit" class="btn btn-success btn-lg" value="Destrabar Personaje" onclick="location.href=\'' . $core_run_script . '&uid=' . $characters->fields[0] . '\'"></td>
 
 </tr>
    </tr>
    <tr>
    <td colspan="3" >&nbsp;</td>
  </tr>
  ';
        $characters->MoveNext();
    }
    echo '</table>';
    
}

?>