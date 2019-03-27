#!/usr/bin/php
<?PHP

function ft_split($str)
{
	$tab = array_filter(explode(" ", $str));
	sort($tab);
	return ($tab);
}

function ft_cmp($a, $b)
{
	$i = 0;
	while ($a[$i] != NULL && $b[$i] != NULL)
	{
		$a[$i] = strtolower($a[$i]);
		$b[$i] = strtolower($b[$i]);
		if (ctype_alpha($a[$i]) && ctype_digit($b[$i]))
			return (-1);
		if (ctype_alpha($b[$i]) && ctype_digit($a[$i]))
			return (1);
		if (ctype_alpha($a[$i]) && ((!(ctype_alpha($b[$i]))) && (!(ctype_digit($b[$i])))))
			return (-1);
		if (ctype_alpha($b[$i]) && ((!(ctype_alpha($a[$i]))) && (!(ctype_digit($a[$i])))))
			return (1);
		if (ctype_digit($a[$i]) && ((!(ctype_alpha($b[$i]))) && (!(ctype_digit($b[$i])))))
			return (-1);
		if (ctype_digit($b[$i]) && ((!(ctype_alpha($a[$i]))) && (!(ctype_digit($a[$i])))))
			return (1);
		if (ord($a[$i]) != ord($b[$i]))
			return (ord($a[$i]) < ord($b[$i])) ? -1 : 1;
		$i++;
	}
	if ($a[$i] == NULL && $b[$i] != NULL)
		return (-1);
	if ($b[$i] == NULL && $a[$i] != NULL)
		return (1);
	return 0;
}

$i = 0;
foreach($argv as $av)
{
	if ($i++ == 0)
		continue;
	$machaine = $av;
	$machaine = preg_replace('/\s\s+/', ' ', $machaine);
	$machaine = trim($machaine);
	$tab = ft_split($machaine);
	if ($tab2)
		$tab2 = array_merge($tab, $tab2);
	else
		$tab2 = $tab;
}
rsort($tab2);
usort($tab2, "ft_cmp");

foreach($tab2 as $tib)
	echo "$tib\n";
?>
