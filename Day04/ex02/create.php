<?PHP
$path = "./private";
$passwd = $path . "/passwd";
$error = "ERROR\n";
$dejavu = 0;
if (isset($_POST["submit"]) && isset($_POST["passwd"]) && isset($_POST["login"]))
{
	if (file_exists($path) === FALSE)
		mkdir($path, 0777, true);
	if ($_POST["submit"] != NULL && $_POST["passwd"] != NULL && $_POST["login"] != NULL)
	{
		$_SESSION["login"] = $_POST["login"];
		$_SESSION["passwd"] = $_POST["passwd"];
		$_SESSION["submit"] = $_POST["submit"];
		$secu = serialize($_SESSION);
		if (file_exists($passwd) === FALSE)
		{
			$fichier = fopen($passwd, 'w+');
			$tab = array($secu);
			fwrite($fichier, $tab);
		}
		else
		{
			$tab = file_get_contents($passwd);
			foreach ($tab as $key => $value) {
				$value = unserialize($value);
				if ($value["login"] == $_SESSION["login"])
				{
					echo $error;
					$dejavu = 1;
				}
			}
		}
	}
	else
		echo $error;
}
?>
