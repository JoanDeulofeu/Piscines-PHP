#!/usr/bin/php
<?PHP
function ft_is_sort($tab)
{
	$tab2 = $tab;
	sort($tab2);
	$res = array_diff_assoc($tab, $tab2);
	if ($res == NULL)
		return (1);
	else
		return (0);
}

if (ft_is_sort($tab))
	echo "Le tableau est trie\n";
else
	echo "Le tableau n’est pas trie\n";
?>
