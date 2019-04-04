<?PHP
	session_start();
	if (isset($_GET["submit"]))
	{
		if ($_GET["submit"] == "OK")
		{
		 	$_SESSION["login"] = $_GET["login"];
		 	$_SESSION["passwd"] = $_GET["passwd"];
		 	$_SESSION["submit"] = $_GET["submit"];
		}
	}
?>
<HTML><BODY>
	<FORM action="." method="get">
		Identifiant: <input type="text" name="login" value="<?PHP echo $_SESSION["login"] ?>"/>
		<BR />
		Mot de passe: <input type="text" name="passwd" value="<?PHP echo $_SESSION["passwd"] ?>"/>
		<input type="submit" name="submit" value="OK"/>
	</FORM>
</BODY></HTML>
