<?
$get_config = simplexml_load_file('engine/config_mods/register_settings.xml');
if ($get_config->active == '0') {
    echo msg('0', text_sorry_feature_disabled);
} 
if($user_login=='1'){
    echo '<h2>Usted ya esta logeado...</h2>
        <a href="https://www.facebook.com/ObagNetwork/"><h4 align="center">Adaptation By ObagNetwork</h4></a>';
}
else {
    $register_method = $get_config->method;
    
    $verification_config = simplexml_load_file('engine/config_mods/human_verification.xml');
    if ($verification_config->human_verification_type == 'reCAPTCHA') {
        $is_reCAPTCHA = '1';
        require_once('engine/recaptchalib.php');
        $privatekey = $verification_config->reCAPTCHA_private_key;
        $resp       = recaptcha_check_answer($privatekey, $_SERVER["REMOTE_ADDR"], $_POST["recaptcha_challenge_field"], $_POST["recaptcha_response_field"]);
    }
    
    
    
    echo '
<script type="text/javascript">    
load_image= new Image(16,16); 
load_image.src="template/' . $core['config']['template'] . '/images/load.gif"; 

function Ajax(div,id, page, form, append, data){

    document.getElementById(div).innerHTML = \'<img src="template/' . $core['config']['template'] . '/images/load.gif" width="16" height="16"> Please wait...\';
    var veri = \'\';
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
           alert("falied");
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
</script>

<script type="text/javascript">
function cs_ua_a(){
    if (document.sign_up_frm.userid.value.length < 4){
        alert(\'El ID de Usuario debe contener de 4 a 10 caracteres\n(unicamente numeros y letras)\');
    }else{
        uss = document.getElementById(\'userid\').value;
        url_p = "get.php?aA="+uss;
        Ajax(\'c_uss\',\'#c_uss\',url_p, null, \'data=c_uss\');
    }

}

function csm_uam_am(){
    if (document.sign_up_frm.email_address.value.length < 2){
        alert(\'Por favor, introduce un email valido \n(ej: ejemplo@ejemplo.com)\');
    }else{
        uss = document.getElementById(\'email_address\').value;
        url_p = "get.php?aMl="+uss;
        Ajax(\'c_mss\',\'#c_mss\',url_p, null, \'data=c_mss\');
    }

}

function parse_inputs(){
    if (document.sign_up_frm.userid.value.length < 4){
        alert(\'El ID de Usuario debe contener de 4 a 10 caracteres\n(unicamente numeros y letras)\');
        return false;
    }
    
    if (document.sign_up_frm.password.value.length < 6){
        alert(\'La clave debe contener de 6 a 10 caracteres\n(unicamente numeros y letras, con mayusculas y minusculas)\');
        return false;
    }
    
    if (document.sign_up_frm.confirm_password.value.length < 6){
        alert(\'Confirma la clave, debe contener de 6 a 10 caracteres\n(unicamente numeros y letras, con mayusculas y minusculas)\');
        return false;
    }
    if (document.sign_up_frm.password.value != document.sign_up_frm.confirm_password.value){
        alert(\'Las claves no coinciden.\');
        return false;
    }
    ';
    if ($get_config->pers_id_active == '1') {
        echo 'if (document.sign_up_frm.pers_id.value.length < ' . $get_config->pers_id_length . '){
        alert(\'Por favor introduzca un ID Personal válido \n (sólo 12 dígitos, números.)\');
        return false;
    }';
    }
    
    echo '
    if (document.sign_up_frm.email_address.value.length < 2){
        alert(\'Por favor, ingresa un Email valido \n(ej: ejemplo@ejemplo.com)\');
        return false;
    }
    if (document.sign_up_frm.country.value ==  \'x\'){
        alert(\'Por favor, selecciona tu pais.\');
        return false;
    }
    if ((document.sign_up_frm.gender[0].checked==false)&&(document.sign_up_frm.gender[1].checked==false)){
        alert(\'Por favor, selecciona tu genero.\');
        return false;
    }
    if (document.sign_up_frm.question.value ==  \'x\'){
        alert(\'Por favor, selecciona una pregunta.\');
        return false;
    }
    if (document.sign_up_frm.answer.value.length < 4){
        alert(\'Por favor, responde a la pregunta seleccionada.\n(numeros y letras unicamente)\');
        return false;
    }';
    if ($is_reCAPTCHA != '1') {
        echo '    if (document.sign_up_frm.verify_int.value.length < 6){
        alert(\'Por favor, ingresa el codigo de verificacion de imagen.\');
        return false;
    }';
        
    }
    
    
    echo '
    if ((document.sign_up_frm.terms.checked==false)){
        alert(\'Por favor, lee los Terminos y Condiciones de Baires MU antes de finalizar tu registro.\');
        return false;
    }
		if ((document.sign_up_frm.terms2.checked==false)){
        alert(\'Debes tildar la casilla de verificacion (2) aceptando las condiciones.\');
        return false;
    }
	if ((document.sign_up_frm.terms3.checked==false)){
        alert(\'Debes tildar la casilla de verificacion (3) aceptando las condiciones.\');
        return false;
    }
    
    document.sign_up_frm.submit();
}

</script>';
    
    
    if (isset($_POST['create_account'])) {
        require("engine/validate.php");
        $elems[] = array(
            'name' => 'userid',
            'label' => text_register_error1,
            'type' => 'text',
            'uname' => 'true',
            'required' => true,
            'len_min' => 4,
            'len_max' => 10,
            'cont' => 'alpha'
        );
        
        
        $elems[] = array(
            'name' => 'password',
            'label' => text_register_error2,
            'type' => 'text',
            'required' => true,
            'len_min' => 6,
            'len_max' => 12,
            'cont' => 'alpha'
        );
        $elems[] = array(
            'name' => 'confirm_password',
            'label' => text_register_error3,
            'type' => 'text',
            'required' => true,
            'len_min' => 6,
            'len_max' => 12,
            'cont' => 'alpha',
            'equal' => array(
                'password'
            )
        );
        
        if ($get_config->pers_id_active == '1') {
            $elems[] = array(
                'name' => 'pers_id',
                'label' => str_replace("{pers_id_length}", $get_config->pers_id_length, text_register_error4),
                'type' => 'text',
                'required' => true,
                'len_min' => $get_config->pers_id_length,
                'len_max' => $get_config->pers_id_length,
                'cont' => 'digit'
            );
        }
        
        $elems[] = array(
            'name' => 'email_address',
            'label' => text_register_error5,
            'type' => 'text',
            'required' => true,
            'len_max' => 50,
            'cont' => 'email'
        );
        
        $elems[] = array(
            'name' => 'country',
            'label' => text_register_error6,
            'type' => 'text',
            'required' => true,
            'len_max' => 3,
            'cont' => 'digit'
        );
        $elems[] = array(
            'name' => 'gender',
            'label' => text_register_error7,
            'type' => 'text',
            'required' => true,
            'len_max' => 1,
            'cont' => 'digit'
        );
        $elems[] = array(
            'name' => 'question',
            'label' => text_register_error8,
            'type' => 'text',
            'required' => true,
            'len_max' => 2,
            'cont' => 'digit'
        );
        
        $elems[] = array(
            'name' => 'answer',
            'label' => text_register_error9,
            'type' => 'text',
            'required' => true,
            'len_min' => 4,
            'len_max' => 20,
            'cont' => 'alpha'
        );
        $f       = new FormValidator($elems);
        $err     = $f->validate($_POST);
        if ($err === true) {
            $valid = $f->getValidElems();
            foreach ($valid as $k => $v) {
                if ($valid[$k][0][1] == false) {
                    if (empty($valid[$k][0][2])) {
                        $msg_error = msg('0', $valid[$k][0][2]);
                    } else {
                        $msg_error = msg('0', $valid[$k][0][2]);
                    }
                }
            }
        } else {
            $userid   = safe_input($_POST['userid'], '');
            $password = safe_input($_POST['password'], '');
            $email    = safe_input($_POST['email_address'], '\_\@\.\-');
            $country  = safe_input($_POST['country'], '');
            $gender   = safe_input($_POST['gender'], '');
            $question = safe_input($_POST['question'], '');
            $anaswer  = safe_input($_POST['answer'], '');
            if ($get_config->pers_id_active == '1') {
                $pid = safe_input($_POST['pers_id'], '');
            } else {
                $pid = trim($get_config->pers_id);
            }
            
            
            if ($is_reCAPTCHA == '1') {
                if (!$resp->is_valid) {
                    $bot_check = '1';
                }
            } else {
                if ($_SESSION['SID_code'] != md5($_POST['verify_int'])) {
                    $bot_check = '1';
                }
            }
            
            
            if ($bot_check == '1') {
                $msg_error = msg('0', text_register_error10);
                
            } else {
                if (check_account($userid) === true) {
                    $msg_error = msg('0', text_register_error11);
                } else {
                    if (check_mail($email) === true) {
                        $msg_error = msg('0', text_register_error12);
                    } else {
                        if ($register_method == '1') {
                            $confirmed       = '1';
                            $blocked         = '0';
                            $activation_need = '0';
                            $activation_id   = md5($userid);
                        } elseif ($register_method == '2') {
                            $confirmed       = '0';
                            $blocked         = '1';
                            $activation_need = '1';
                            $activation_id   = md5($userid);
                        }
                        
                        if ($core['config']['md5'] == '1') {
                            $make_me_acc = $core_db2->Execute("INSERT INTO MEMB_INFO (memb___id,memb__pwd,memb_name,sno__numb,bloc_code,ctl1_code,mail_chek,mail_addr,appl_days,modi_days,out__days,true_days,SecretQuestion,SecretAnswer,Country,Gender,confirmed,activation_id) VALUES (?,[dbo].[fn_md5](?,?),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array(
                                $userid,
                                $password,
                                $userid,
                                'test',
                                $pid,
                                $blocked,
                                '0',
                                '1',
                                $email,
                                date('m/d/Y'),
                                date('m/d/Y'),
                                '2005-01-03',
                                '2005-01-03',
                                $question,
                                $anaswer,
                                $country,
                                $gender,
                                $confirmed,
                                $activation_id
                            ));
                        } elseif ($core['config']['md5'] == '0') {
                            $make_me_acc  = $core_db2->Execute("INSERT INTO MEMB_INFO (memb___id,memb__pwd,memb_name,sno__numb,bloc_code,ctl1_code,mail_chek,mail_addr,appl_days,modi_days,out__days,true_days,SecretQuestion,SecretAnswer,Country,Gender,Confirmed,activation_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", array(
                                $userid,
                                $password,
                                'test',
                                $pid,
                                $blocked,
                                '0',
                                '1',
                                $email,
                                date('m/d/Y'),
                                date('m/d/Y'),
                                '2005-01-03',
                                '2005-01-03',
                                $question,
                                $anaswer,
                                $country,
                                $gender,
                                $confirmed,
                                $activation_id
                            ));
                            $make_me_acc_ = 1;
                            /*
                            $make_me_acc_ = $core_db2->Execute("INSERT INTO VI_CURR_INFO (ends_days,chek_code,used_time,memb___id,memb_name,memb_guid,sno__numb,Bill_Section,Bill_value,Bill_Hour,Surplus_Point,Surplus_Minute,Increase_Days ) VALUES ('2005','1',1234,?,?,1,'7','6','3','6','6',".date('m/d/Y').",'0' )", array($userid,'test'));
                            */
                        }
                        if ($make_me_acc) {
                            if ($activation_need == '0') {
                                $msg_error = msg('1', str_replace("{userid}", $userid, text_register_success1));
                                $complete  = 1;
                            } elseif ($activation_need == '1') {
                                /*
                                require("engine/smtp.php");
                                $smtp_config = simplexml_load_file('engine/config_mods/smtp_settings.xml');
                                $mail = new SMTP($smtp_config->smtp_server,$smtp_config->smtp_username,$smtp_config->smtp_password);
                                $header = $mail->make_header($core['config']['master_mail'],$email,'Account Activation for '.$core['config']['websitetitle'].'');
                                $header .= "Content-Type: text/html; charset=\"iso-8859-1\" \r\n";
                                $header .= "Content-Transfer-Encoding: 8bit \r\n";
                                $header .= "MIME-Version: 1.0 \r\n";
                                */
                                
                                
                                $body = str_replace("{user_id}", $userid, mail_register_t1);
                                $body = str_replace("{website_title}", $core['config']['websitetitle'], $body);
                                $body = str_replace("{activation_url}", $core['config']['website_url'] . '/' . ROOT_INDEX . '?' . LOAD_GET_PAGE . '=' . REGISTER_CMS_PAGE . '&activation_id=' . $activation_id, $body);
                                /*
                                
                                $body = 'Dear '.$userid.',<br><br>
                                Thank you for registering at the '.$core['config']['websitetitle'].'. Before we can activate your account one last step must be taken to complete your registration.<br><br>
                                Please note - you must complete this last step to become a registered member. You will only need to visit this URL once to activate your account.<br>
                                <br>
                                To complete your registration, please visit this URL:<br>
                                <a href="'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.REGISTER_CMS_PAGE.'&activation_id='.$activation_id.'">'.$core['config']['website_url'].'/'.ROOT_INDEX.'?'.LOAD_GET_PAGE.'='.REGISTER_CMS_PAGE.'&activation_id='.$activation_id.'</a>
                                <br><br><br>
                                All the best,<br>
                                '.$core['config']['websitetitle'].' Team.';
                                */
                                
                                
                                if ($core['debug'] == '1') {
                                    define('DISPLAY_XPM4_ERRORS', true);
                                } else {
                                    define('DISPLAY_XPM4_ERRORS', false);
                                }
                                
                                $get_config = simplexml_load_file('engine/config_mods/smtp_settings.xml');
                                
                                require("engine/mail.php");
                                $m = new MAIL;
                                $m->From($core['config']['master_mail']);
                                $m->AddTo(trim($email));
                                $m->Subject('Contact Us - ' . $subject_set . '');
                                $m->Html($body);
                                
                                if ($get_config->smtp_connection == 'none') {
                                    $c = $m->Connect(trim($get_config->smtp_server), intval($get_config->smtp_port), trim($get_config->smtp_username), trim($get_config->smtp_password)) or $smtp_connect_fail = '1';
                                } else {
                                    $c = $m->Connect(trim($get_config->smtp_server), intval($get_config->smtp_port), trim($get_config->smtp_username), trim($get_config->smtp_password), trim($get_config->smtp_connection), 10, 'localhost', null, 'plain') or $smtp_connect_fail = '1';
                                }
                                if ($smtp_connect_fail != '1') {
                                    if ($m->Send($c)) {
                                        $msg_error = msg('1', str_replace("{userid}", $userid, text_register_success2));
                                    } else {
                                        echo msg('0', text_register_error13);
                                    }
                                } else {
                                    echo msg('0', text_register_error14);
                                }
                                
                                
                            }
                        } else {
                            $msg_error = msg('0', text_register_error15);
                        }
                    }
                }
            }
        }
    }
    
    if ($register_method == '2') {
        if (isset($_GET['activation_id'])) {
            $activate_md5 = '1';
            if (empty($_GET['activation_id'])) {
                header('Location: ' . ROOT_INDEX . '');
            } else {
                $md5_link   = safe_input($_GET['activation_id'], '');
                $check_link = $core_db2->Execute("Select confirmed,memb___id from MEMB_INFO where activation_id=?", array(
                    $md5_link
                ));
                if ($check_link->EOF) {
                    $msg_error = msg('0', text_register_error16);
                } else {
                    if ($check_link->fields[0] == '1') {
                        $msg_error = msg('0', text_register_error17);
                    } elseif ($check_link->fields[0] == '0') {
                        $active_id = $core_db2->Execute("Update MEMB_INFO set bloc_code='0',confirmed='1' where activation_id=?", array(
                            $md5_link
                        ));
                        if ($active_id) {
                            $msg_error = msg('1', str_replace("{userid}", $check_link->fields[1], text_register_success3));
                        } else {
                            $msg_error = msg('0', text_register_error18);
                        }
                        
                    }
                }
            }
        }
        
        echo '    <table  border="0" cellspacing="4" cellpadding="0"  align="center" width="100%" >
            <tr>';
        if ($activate_md5 != 1) {
            echo '<td align="left" class="curent_step" width="33%">1. ' . text_register_complete_form . '</td>';
        } else {
            echo '<td align="left" class="step" width="33%">1. ' . text_register_complete_form . '</td>';
        }
        if ($activate_md5 == '1') {
            echo '<td align="left" class="curent_step"  width="33%">2. ' . text_register_activate_account . '</td>';
        } else {
            echo '<td align="left" class="step"  width="33%">2. ' . text_register_activate_account . '</td>';
        }
        echo '
    </tr>
    </table>';
        
        
        
    }
    if ($msg_error) {
        echo $msg_error;
    }
    if ($activate_md5 != '1') {
        if ($complete != '1') {
            $userid_post   = htmlspecialchars($_POST['userid']);
            $p_id_post     = htmlspecialchars($_POST['pers_id']);
            $email_post    = htmlspecialchars($_POST['email_address']);
            $country_post  = htmlspecialchars($_POST['country']);
            $question_post = htmlspecialchars($_POST['question']);
            $anaswer_post  = htmlspecialchars($_POST['answer']);
        }
        echo '
<form name="sign_up_frm" method="post" action="" id="sign_up_frm">
<div id="a"></div>
 <div class="alert alert-info"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;&nbsp; Antes de crear tu cuenta, te recomendamos los siguientes consejos sobre seguridad: <a href="https://www.facebook.com/ObagNetwork" target="_blank" class="alert-link"><b>C&oacute;mo proteger nuestra cuenta</b></a></div>

<div class="form-group">
      <label for="userid"><span class="badge"><i class="fa fa-user" aria-hidden="true"></i></span>&nbsp;Nombre de Usuario:</label>

<td align="left" class="iRg_inf"><input class="form-control" type="text" name="userid" id="userid" maxlength="10" autocomplete="off" placeholder="Nombre de la cuenta"  onclick="document.getElementById(\'c_uss\').innerHTML=\'' . text_register_req1 . '\'" value="' . $userid_post . '"> <a href="javascript:void(0)" onclick="cs_ua_a();">Check Disponibilidad</a></td>
 <p class="help-block" id="c_uss">4-10 caracteres, letras y n&uacute;meros unicamente</p>

</div>
</tr>
<tr>
<label for="password"><span class="badge"><i class="fa fa-key" aria-hidden="true"></i></span>&nbsp;Contrase&ntilde;a:</label>
<input class="form-control" type="password" name="password" id="password" maxlength="10" autocomplete="off" onclick="cs_ua_a();" placeholder="Ingresar contrase&ntilde;a"

<p class="help-block">6-10 caracteres, letras y n&uacute;meros unicamente</p>
</tr>

  <label for="confirm_password"><span class="badge"><i class="fa fa-key" aria-hidden="true"></i></span>&nbsp;Contrase&ntilde;a (repetir):</label>


<input class="form-control" type="password" name="confirm_password" id="confirm_password" maxlength="10" autocomplete="off" onpaste="return false" placeholder="Confirmar contrase&ntilde;a"

 <p class="help-block">Se distinguen may&uacute;sculas y min&uacute;sculas. Asegurate de que ambas sean id&eacute;nticas.</p>

</tr>';
        if ($get_config->pers_id_active == '1') {
            echo '
<td colspan="3" align="left"><span style="background-color: #911714; padding: 3px; font-size: 11px; display:block; color:#DDBE49;">Antes de crear tu cuenta, te recomendamos los siguientes consejos sobre seguridad: <a href="https://www.facebook.com/Briian.Roldann" target="_blank"><b>[GUIA] Cuenta Segura</b></a></span></td>
<tr>
<td colspan="3" align="left" class="iRg_line">Ingresa un numero de ID Personal:</td>
</tr>
<tr>
<td align="left" class="iRg_text"  style="padding-left: 24px;">ID Personal</td>
<td align="left"><input class="iRg_input" type="text" name="pers_id" id="pers_id" maxlength="' . $get_config->pers_id_length . '" value="' . $p_id_post . '"> <span class="iRg_inf"></span></td>
<td align="left"><span class="iRg_inf"><span class="iRg_inf">12 dígitos, números unicamente</span></td>
</tr>
</tr>
';
        }
        
        echo '

 <label for="email_address"><span class="badge"><i class="fa fa-envelope" aria-hidden="true"></i></span>&nbsp;E-Mail:</label>

<td align="left" class="iRg_inf"><input class= "form-control"maxlength="50" type="text" name="email_address" id="email_address"placeholder="correo@ejemplo.com"onclick="document.getElementById(\'c_mss\').innerHTML=\'' . text_register_req5 . '\'" value="' . $email_post . '"> <a href="javascript:void(0)" onclick="csm_uam_am();">Check Disponibilidad</a></td>

<p class="help-block" id="c_mss">Asegurate de ingresar una dirección de correo a la que tengas acceso. Será requerida en un futuro para recuperar tu cuenta en caso de robo o extravío, recuperar/cambiar contraseña, modificar tu n&uacute;mero de ID Personal, etc.</p>


<label for="country"><span class="badge"><i class="fa fa-flag" aria-hidden="true"></i></span>&nbsp;Pa&iacute;s:</label>

<td align="left"><select name="country" class="form-control" id="country"><option value="x">--' . text_select . '</option>';
        
        $c = getcountry('list');
        foreach ($c as $cc => $v) {
            if ($country_post == $cc) {
                echo '<option value="' . $cc . '" selected="selected">' . $v . '</option>';
            } else {
                echo '<option value="' . $cc . '">' . $v . '</option>';
            }
            
        }
        
        echo '</select></td>
<td align="left"></td>
</tr>
<tr>
<label for="gender"><span class="badge"><i class="fa fa-venus-mars" aria-hidden="true"></i></span>&nbsp;G&eacute;nero:</label>

<label class="radio-inline">&nbsp;&nbsp;&nbsp;<input name="gender" id="gender" type="radio" value="1">Masculino&nbsp;<span style="color:lightblue;"><i class="fa fa-male" aria-hidden="true"></i></span></label>&nbsp;&nbsp;&nbsp;<label class="radio-inline"><input name="gender" type="radio" value="2" id="gender">Femenino&nbsp;<span style="color:pink;"><i class="fa fa-female" aria-hidden="true"></i></span></label>

<td align="left"></td>
</tr>
</tr>
<tr>
<p class="help-block" id="c_mss">Para ayudar a identificar tu cuenta, por favor selecciona una pregunta de la lista y respondela:.</p>

<label for="question"><span class="badge"><i class="fa fa-question-circle" aria-hidden="true"></i></span>&nbsp;Pregunta secreta:</label>


<td align="left" colspan="2"><select name="question" id="question"  class="form-control"><option value="x">--Seleccionar</option>
<option value="1">Cual es el nombre de tu madre?</option><option value="2">Cual es el nombre de tu primer colegio?</option><option value="3">Quien es tu super heroe favorito?</option><option value="4">Cual es el nombre de tu primer mascota?</option><option value="5">Cual era el lugar favorito para visitar cuando eras chico?</option><option value="6">Quien es tu personaje favorito de dibujos animados?</option><option value="7">Cual fue el primer video juego que jugaste?</option><option value="8">Cual era el nombre de tu primer maestro/a?</option><option value="9">Cual es tu programa de TV favorito?</option><option value="10">En que ciudad nacio tu madre?</option></select></td>

<td align="left"></td>
</tr>
<tr>
 <label for="answer"><span class="badge"><i class="fa fa-envelope" aria-hidden="true"></i></span>&nbsp;Respuesta secreta:</label>

<td align="left" colspan="2"><input class="form-control" type="text" name="answer" id="answer" maxlength="20" placeholder="Respuesta para la pregunta secreta" value="' . $anaswer_post . '">
<p class="help-block">4-20 caracteres, letras y n&uacute;meros unicamente</p>

</td>
</tr>
</tr>
<tr>
<label><span class="badge"><i class="fa fa-shield" aria-hidden="true"></i></span>&nbsp;Verificaci&oacute;n anti-spam:</label><br />

</tr>
<tr>
<td align="center" colspan="3"> ';
        if ($is_reCAPTCHA == '1') {
            $publickey = $verification_config->reCAPTCHA_public_key;
            echo '';
            echo recaptcha_get_html($publickey);
            
        } else {
            echo '
<table border="0" cellspacing="0" cellpadding="0" width="100%">
<tr>
<td align="left"><img src="get.php?aI" border="0"></td>
<td align="left" class="iRg_inf"><div align="left" style="padding-bottom: 4px; ">	</div><input class="form-control"  maxlength="20" type="text" name="verify_int" placeholder="Ingresa el c&oacute;digo que ves en la imagen" id="verify_int"></td>
</tr>
</table>';
        }
        echo '
</td>
</tr>
</table>

<table border="0" cellspacing="10" cellpadding="0" width="100%"  align="center">
 <div class="form-group alert alert-warning">
        <label><span class="badge"><i class="fa fa-check" aria-hidden="true"></i></span>&nbsp;Confirmaci&oacute;n de registro:</label><br />
        <label><input type="checkbox" name="terms" value="1"> He le&iacute;do y acepto los</label> <a href="index.php?pagina=tyc" target="_blank" class="alert-link">T&eacute;rminos y Condiciones</a>.<input type="hidden" name="create_account"><br />
        <label><input type="checkbox" name="terms2" value="1"> Acepto toda responsabilidad por la conducta de los personajes de &eacute;sta cuenta.</label><input type="hidden" name="create_account"><br />
        <label><input type="checkbox" name="terms3" value="1"> Entiendo que si en alg&uacute;n momento pierdo el acceso a la direcci&oacute;n de correo usada para registrar &eacute;sta cuenta, perder&eacute; el derecho a solicitar o modificar sus datos.</label><input type="hidden" name="create_account">
    </div>

 <button type="submit" class="btn btn-success btn-lg" onclick="return parse_inputs()">CREAR CUENTA!</button>&nbsp;<a href="#" class="btn btn-default btn-lg" role="button">CANCELAR</a>
</table>
</form>';
    }
}
?>