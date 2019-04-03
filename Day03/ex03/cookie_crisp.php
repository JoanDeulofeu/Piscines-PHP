<?PHP
	$tab = $_GET;
	$temps = 365*24*3600;
	// print_r($tab);
	if (isset($tab["action"]) && isset($tab["name"]))
	{
		if ($tab["action"] == "set" && isset($tab["value"]))
			setcookie($tab["name"], $tab["value"], time() + $temps);
		else if ($tab["action"] == "del")
			setcookie($tab["name"], '', time() - 3600);
		else if ($tab["action"] == "get" && isset($_COOKIE[$tab["name"]]))
		{
			echo $_COOKIE[$tab["name"]]."\n";
		}
	}
?>
