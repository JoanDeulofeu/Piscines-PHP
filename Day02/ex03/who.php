#!/usr/bin/php
<?PHP

date_default_timezone_set('Europe/paris');
$file = file_get_contents("/var/run/utmpx");
$sub = substr($file, 1256);
$e = array();
$typedef   = 'a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad';
while ($sub != NULL)
{
	$array = unpack($typedef, $sub);
	$sub = substr($sub, 628);
	$date = date("M j H:i", $array["time1"]);
	echo "$array[user]   $array[line]  $date\n";
}
?>
