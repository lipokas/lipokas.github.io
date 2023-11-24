<?PHP
if (eregi("server/servidor.php", $_SERVER['SCRIPT_NAME'])) { die ("Access Denied"); }
require 'engine/global_config.php';

$onlineoffline = "127.0.0.1";
if ($check=@fsockopen($onlineoffline,55901,$ERROR_NO,$ERROR_STR,(float)0.5)) 
	{ 
	fclose($check); 
	echo '<img src="template/'.$core['config']['template'].'/images/online11.gif" alt="Online">'; 
	}
else 
	{ 
	echo '<img src="template/'.$core['config']['template'].'/images/offline1.gif" alt="Offline">'; 
	} 
?>