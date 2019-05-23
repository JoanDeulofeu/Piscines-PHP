<?PHP
$path = "../private";
$passwd = $path . "/passwd";
$pathchat = $path . "/chat";
$error = "ERROR\n";
$ok = "OK\n";
$dejavu = 0;

session_start();

if ($_SESSION[loggued_on_user] != "")
{
	if ($_POST['submit'] == "OK" && $_POST['msg'] != "")
	{
		if (file_exists($path) === FALSE) //si dossier existe pas
			mkdir($path, 0777, true);
		if (file_exists($pathchat) === FALSE) //si fichier existe pas
		{
			$tab = array('login'=>$_SESSION[loggued_on_user], 'time'=>time(), 'msg'=>$_POST['msg']);
			$secur = serialize(array($tab));
			file_put_contents($pathchat, $secur);
		}
		else
		{
			$handle = fopen($pathchat, "r+");
			flock($handle, LOCK_EX);
			$tab = file_get_contents($pathchat);
			$unsecur = unserialize($tab);
			$tab = array('login'=>$_SESSION[loggued_on_user], 'time'=>time(), 'msg'=>$_POST['msg']);
			$unsecur[] = $tab;
			$secur = serialize($unsecur);
			file_put_contents($pathchat, $secur);
			fclose($handle);
		}
	}
}



echo '<HTML>
	<HEAD>
		<script langage="javascript">top.frames["chat"].location="chat.php";</script>
	</HEAD>
	<BODY>
		<FORM method="post">
			<INPUT type="text" name="msg" autofocus="autofocus" style="height:75%;width:80%" value=""/>
			<INPUT type="submit" name="submit" value="OK"/>
		</FORM>
	</BODY>
</HTML>';
?>
