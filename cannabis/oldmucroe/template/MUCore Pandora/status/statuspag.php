<?PHP
if (eregi("status/statuspag.php", $_SERVER['SCRIPT_NAME'])) { die ("Access Denied"); }
require 'engine/global_config.php';

$onlineoffline = "127.0.0.1";
if ($check=@fsockopen($onlineoffline,55901,$ERROR_NO,$ERROR_STR,(float)0.5)) 
	{ 
	fclose($check); 
	echo '<span style="color:Green"><b>Online</b></span>'; 
	}
else 
	{ 
	echo '<span style="color:Red"><b>Offline</b></span>'; 
	} 
?>