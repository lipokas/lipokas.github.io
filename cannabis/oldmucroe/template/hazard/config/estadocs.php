<!--
///         Cambiar Ip en caso de que la web no este en el servidor local!          \\\
///=================================================================================\\\ 
-->


<?PHP
if (eregi("status/statusgscs.php", $_SERVER['SCRIPT_NAME'])) { die ("Access Denied"); }
require 'engine/global_config.php';

$onlineoffline = "hzbr.sytes.net";
if ($check=@fsockopen($onlineoffline,44405,$ERROR_NO,$ERROR_STR,(float)0.5)) 
	{ 
	fclose($check); 
	echo '<span style="color:#0F0"><b>Online</b></span>'; 
	}
else 
	{ 
	echo '<span style="color:Red"><b>Offline</b></span>';
	} 
?>