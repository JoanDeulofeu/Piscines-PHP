#!/usr/bin/php
<?PHP

function ft_exit($a)
{
	if ($a == 1)
		echo "Incorrect Parameters\n";
	if ($a == 2)
		echo "Syntax Error\n";
	exit(0);
}
if ($argc != 2)
	ft_exit(1);
$argv[1] = preg_replace('/\s+/', '', $argv[1]);
if (!(ctype_digit($argv[1][0])))
	ft_exit(2);
$i = -1;
$nb = 0;
while (ctype_digit($argv[1][++$i]))
	$nb = ($nb * 10) + $argv[1][$i];
if ($argv[1][$i] != '+' && $argv[1][$i] != '-' && $argv[1][$i] != '/'
&& $argv[1][$i] != '*' && $argv[1][$i] != '%')
	ft_exit(2);
$sign = $argv[1][$i++];
if (!(ctype_digit($argv[1][$i])))
	ft_exit(2);
$nb2 = 0;
while (ctype_digit($argv[1][$i]))
	$nb2 = ($nb2 * 10) + $argv[1][$i++];
if ($argv[1][$i])
	ft_exit(2);
if ($sign == '+')
	$result = $nb + $nb2;
if ($sign == '-')
	$result = $nb - $nb2;
if ($sign == '*')
	$result = $nb * $nb2;
if ($sign == '/')
	$result = $nb / $nb2;
if ($sign == '%')
	$result = $nb % $nb2;
echo "$result\n";
?>
