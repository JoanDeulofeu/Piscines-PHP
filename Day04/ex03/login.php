<?PHP
include ('auth.php');

$_SESSION[loggued_on_user] = "";
$path = "../private";
$passwd = $path . "/passwd";
$error = "ERROR\n";
$ok = "OK\n";

if (isset($_GET["pass"]) && isset($_GET["login"]))
{
	if (auth($_GET["login"], $_GET["pass"]) === TRUE)
	{
		echo $ok;
		$_SESSION[loggued_on_user] = $_GET["login"];
	}
	else
		echo $error;

}
?>
