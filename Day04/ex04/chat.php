<?PHP
$path = "../private";
$pathchat = $path . "/chat";

date_default_timezone_set('Europe/Paris');

if (file_exists($pathchat) == TRUE)
{
	$str = file_get_contents($pathchat);
	$tab = unserialize($str);
	foreach ($tab as $value)
	{
		echo '[' . date('H', $value['time']) . ':' . date('i', $value['time']) . '] ';
		echo '<b>' . $value['login'] . '</b>: ';
		echo $value['msg'] . '<br />';
	}
}
?>
