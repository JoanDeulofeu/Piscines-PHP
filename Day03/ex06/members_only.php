<?PHP
	if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
	{
		echo "lol\n";
	}
	else
	{
		header("WWW-Authenticate: Basic realm='Espace membres'");
		header('HTTP/1.0 401 Unauthorized');
		echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
	}
?>
