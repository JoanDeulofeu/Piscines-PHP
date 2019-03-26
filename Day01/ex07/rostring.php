#!/usr/bin/php
<?PHP

function ft_split($str)
{
	$tab = array_filter(explode(" ", $str));
	return ($tab);
}

$machaine = $argv[1];
$machaine = preg_replace('/\s\s+/', ' ', $machaine);
$machaine = trim($machaine);
$tab = ft_split($machaine);
$i = 0;
foreach ($tab as $word) {
	if ($i++ == 0)
		continue;
	echo "$word ";
}
echo "$tab[0]\n";
?>
