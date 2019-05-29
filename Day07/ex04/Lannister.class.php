<?PHP

class Lannister {

	public function sleepWith( $name ) {
		$me = get_class($this);
		$you = get_class($name);

		if ($me == "Jaime") {
			if ($you == "Cersei")
				print ("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
			else if ($you == "Sansa")
				print ("Let's do this." . PHP_EOL);
			else
				print ("Not even if I'm drunk !" . PHP_EOL);
		}
		else {
			if ($you == "Sansa")
				print ("Let's do this." . PHP_EOL);
			else
				print ("Not even if I'm drunk !" . PHP_EOL);
		}
		return;
	}
}

?>
