#!/usr/bin/php
<?PHP

function ft_exit()
{
	echo "Incorrect Parameters\n";
	exit(0);
}

if ($argc != 4)
	ft_exit();

$argv[1] = preg_replace('/\s+/', '', $argv[1]);
$argv[3] = preg_replace('/\s+/', '', $argv[3]);
if ((!(ctype_digit($argv[1]))) || (!(ctype_digit($argv[3]))))
	ft_exit();

$argv[2] = preg_replace('/\s+/', '', $argv[2]);
if ($argv[2] != '+' && $argv[2] != '-' && $argv[2] != '/'
&& $argv[2] != '*' && $argv[2] != '%')
	ft_exit();

if ($argv[2] == '+')
	$result = $argv[1] + $argv[3];
if ($argv[2] == '-')
	$result = $argv[1] - $argv[3];
if ($argv[2] == '*')
	$result = $argv[1] * $argv[3];
if ($argv[2] == '/')
	$result = $argv[1] / $argv[3];
if ($argv[2] == '%')
	$result = $argv[1] % $argv[3];
echo "$result\n";
?>
