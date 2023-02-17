<?php 
$cookie_name = 'pontikis_net_php_cookie';
if(isset($_COOKIE["pontikis_net_php_cookie"]))
{
	echo $_COOKIE["pontikis_net_php_cookie"];
}
else
{
	echo "cookie does not exist";
}
?>