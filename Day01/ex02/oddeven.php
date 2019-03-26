#!/usr/bin/php
<?PHP
function ft_pair($int)
{
	if ($int % 2 == 0)
		return (0);
	return (1);
}

while (1)
{
	echo "Entrez un nombre: ";
	$handle = fopen ("php://stdin","r");
	$line = fgets($handle);
	$line = rtrim($line);
	if (ctype_digit($line) == 0)
		echo "'$line' n'est pas un chiffre\n";
	else {
		if (ft_pair($line) == 1)
			echo "Le chiffre $line est Impair\n";
		else
			echo "Le chiffre $line est Pair\n";
	}
}
?>
