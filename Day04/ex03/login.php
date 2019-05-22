<?PHP
include ('auth.php');

$path = "../private";
$passwd = $path . "/passwd";
$error = "ERROR\n";
$ok = "OK\n";

session_start();

if (isset($_GET["passwd"]) && isset($_GET["login"]))
{
	if (auth($_GET["login"], $_GET["passwd"]) === TRUE)
	{
		echo $ok;
		$_SESSION[loggued_on_user] = $_GET["login"];
	}
	else
	{
		echo $error;
		$_SESSION[loggued_on_user] = "";
	}

}
?>
