#!/usr/bin/php
<?PHP
$machaine = $argv[1];
$machaine = preg_replace('/\s\s+/', ' ', $machaine);
$machaine = trim($machaine);
echo "$machaine\n";
?>
