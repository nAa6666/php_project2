<?php
function sess($name)
{
	if(!isset($_COOKIE['name']))
	{
		setcookie("name", $name, time() + 60*60*24, "/", "", 0);
		setcookie("volume", "1", time() + 60*60*24,"/", "", 0);
	}
	else
	{
		$_COOKIE['volume'] = $_COOKIE['volume'] + 1;
		setcookie("volume", $_COOKIE['volume']);
	}
}

?>