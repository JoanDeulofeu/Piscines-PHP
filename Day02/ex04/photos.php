#!/usr/bin/php
<?PHP
function ft_return2($tab)
{
	return ($tab[2]);
}

// init curl
$c = curl_init();
curl_setopt($c, CURLOPT_URL, $argv[1]);
curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($c);
curl_close($c);

// create repo
$path = preg_replace_callback("/(http[s]?:\/\/)(.+)/", "ft_return2", $argv[1]);
if (file_exists($path) === FALSE)
	mkdir("./$path", 0777, true);

//find adress IMG
$tabargv = explode("\n", $result);
$tabimg = preg_grep("/<img.+src=\"/", $tabargv);
$tabimg = preg_replace_callback("/(.*<img.*src=\")([^\"]+)(\".*)/", "ft_return2", $tabimg);
$images = array_values(array_unique($tabimg));
$i = -1;
foreach ($images as $image)
{
	preg_match("/([^\/]+)(\.[0-9a-z]{2,5})$/", $image, $match);
	$tabname[++$i] = $match[0];
}
$images = preg_replace_callback("/^(\/+)(.+)/", "ft_return2", $images);

//create images file
$i = -1;
foreach ($tabname as $value) {
	$name = "./" . $path . '/' . $value;
	++$i;
	if (file_exists($name) === FALSE && $value != NULL)
	{
		$fichier = fopen($name, 'w+');
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL, $images[$i]);
		curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($c);
		fwrite($fichier, $result);
		fclose($fichier);
		curl_close($c);
	}
}
?>
