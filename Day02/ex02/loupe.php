#!/usr/bin/php
<?PHP

function ft_upper($tab2)
{
	$tab2[2] = mb_strtoupper($tab2[2]);
	$str2 = $tab2[1] . $tab2[2] . $tab2[3];
	return ($str2);
}

$tab = file($argv[1]);
$str = implode($tab);
$str = preg_replace_callback("/(<a.+title=\")(.+)(\")/", "ft_upper", $str);
$str = preg_replace_callback("/(<a[^>]+>)([^<]+)(<)/", "ft_upper", $str);
echo $str;
?>
