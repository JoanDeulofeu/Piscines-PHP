<?PHP
$error = "ERROR\n";

echo "seesion = $_SESSION[loggued_on_user] |\n";
if ($_SESSION[loggued_on_user] != "")
	echo "$_SESSION[loggued_on_user]\n";
else
	echo $error;
?>
