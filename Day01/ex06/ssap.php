#!/usr/bin/php
<?

function ft_split($str)
{
	$tab = array_filter(explode(" ", $str));
	sort($tab);
	return ($tab);
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
sort($tab2);

foreach($tab2 as $tib)
	echo "$tib\n";
?>
