<?PHP
include ('auth.php');

$path = "../private";
$passwd = $path . "/passwd";
$error = "ERROR\n";
$ok = "OK\n";

session_start();

if (isset($_POST["passwd"]) && isset($_POST["login"]))
{
	if (auth($_POST["login"], $_POST["passwd"]) === TRUE)
	{
		echo $ok;
		$_SESSION[loggued_on_user] = $_POST["login"];
	}
	else
	{
		echo $error;
		$_SESSION[loggued_on_user] = "";
	}
}
?>
