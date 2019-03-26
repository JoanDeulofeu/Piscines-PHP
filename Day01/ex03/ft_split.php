#!/usr/bin/php
<?PHP
function ft_split($str)
{
	$tab = array_filter(explode(" ", $str));
	sort($tab);
	return ($tab);
}

print_r(ft_split("hello     world     demain matin     Zzz Aaa"))
?>
