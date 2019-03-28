#!/usr/bin/php
<?PHP
date_default_timezone_set('Europe/Paris');

$tab = explode(" ", "$argv[1]");

//Day
$nbday = preg_match("/[Ll]undi|[Mm]ardi|[Mm]ercredi|[Jj]eudi|[Vv]endredi|[Ss]amedi|[Dd]imanche/", "$tab[0]");

//Date
$nbdate = preg_match("/[1-9]|[0-2][0-9]|3[0-1]/", "$tab[1]");

//Month
$nbmonth = preg_match("/[Jj]anvier|[Ff][eé]vrier|[Mm]ars|[Aa]vril|[Mm]ai|[Jj]uin|[Jj]uillet|[Aa]o[uû]t|[Ss]eptembre|[Oo]ctobre|[Nn]ovembre|[Dd][ée]cembre/", "$tab[2]");

//Year
$nbyear = preg_match("/19[7-9][0-9]|20[0-9][0-9]/", "$tab[3]");

//Time
$nbtime = preg_match("/([0-1][0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]/", "$tab[4]");

if ($nbday === 0 || $nbdate === 0 || $nbtime === 0 || $nbmonth === 0 || $nbyear === 0)
{
	echo "Wrong Format";
	return (0);
}
if (preg_match("/^[Jj].+[r]$/", "$tab[2]"))
	$month = "01";
if (preg_match("/^[Ff]/", "$tab[2]"))
	$month = "02";
if (preg_match("/^[Mm].+[s]$/", "$tab[2]"))
	$month = "03";
if (preg_match("/^[Aa].+[l]$/", "$tab[2]"))
	$month = "04";
if (preg_match("/^[Mm].+[i]$/", "$tab[2]"))
	$month = "05";
if (preg_match("/^[Jj].+[n]$/", "$tab[2]"))
	$month = "06";
if (preg_match("/^[Jj].+[t]$/", "$tab[2]"))
	$month = "07";
if (preg_match("/^[Aa].+[t]$/", "$tab[2]"))
	$month = "08";
if (preg_match("/^[Ss]/", "$tab[2]"))
	$month = "09";
if (preg_match("/^[Oo]/", "$tab[2]"))
	$month = "10";
if (preg_match("/^[Nn]/", "$tab[2]"))
	$month = "11";
if (preg_match("/^[Dd]/", "$tab[2]"))
	$month = "12";

$second = strtotime("$tab[3]-$month-$tab[1] $tab[4]");
echo "$second\n";
?>
