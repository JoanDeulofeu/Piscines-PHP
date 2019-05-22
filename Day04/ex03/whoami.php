<?PHP
$error = "ERROR\n";

session_start();

if ($_SESSION[loggued_on_user] != "")
	echo "$_SESSION[loggued_on_user]\n";
else
	echo $error;
?>
