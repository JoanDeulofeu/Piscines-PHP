<?PHP

Class Color {

	public $red = 0;
	public $green = 0;
	public $blue = 0;
	public static $verbose = FALSE;

	public function __construct( array $tab ) {
		if (self::$verbose === TRUE)
			print ("Classe construite" . PHP_EOL);

		if (count($tab) == 1) {
			list($this->red, $this->green, $this->blue) = sscanf($tab[0], "#%02x%02x%02x");
		}
		else if (count($tab) == 3) {
			$this->red = round($tab[0]);
			$this->green = round($tab[1]);
			$this->blue = round($tab[2]);
		}
		return;
	}

	public function __destruct() {
		if (self::$verbose === TRUE)
			echo "Classe detruite" . PHP_EOL;
		return;
	}

	public function __tostring() {
		echo "RGB = " . $this->red . "-" . $this->green . "-" . $this->blue . "\n";
		return;
	}

	public static function doc() {
		$str = file_get_contents("./Color.doc.txt");
		echo $str . PHP_EOL;
		return;
	}

	public function add( array $tab ) {
		if (count($tab) == 1) {
			list($t_red, $t_green, $t_blue) = sscanf($tab[0], "#%02x%02x%02x");
		}
		else if (count($tab) == 3) {
			$t_red = round($tab[0]);
			$t_green = round($tab[1]);
			$t_blue = round($tab[2]);
		}

		$t_red = round($t_red + $this->red);
		$t_green = round($t_green + $this->green);
		$t_blue = round($t_blue + $this->blue);
		if ($t_red < 0 || $t_red > 255)
			$t_red = ($t_red < 0) ? 0 : 255;
		if ($t_green < 0 || $t_green > 255)
			$t_green = ($t_green < 0) ? 0 : 255;
		if ($t_blue < 0 || $t_blue > 255)
			$t_blue = ($t_blue < 0) ? 0 : 255;
		$t_instance = new Color( array($t_red, $t_green , $t_blue));
		return $t_instance;
	}

	public function sub( array $tab ) {
		if (count($tab) == 1) {
			list($t_red, $t_green, $t_blue) = sscanf($tab[0], "#%02x%02x%02x");
		}
		else if (count($tab) == 3) {
			$t_red = round($tab[0]);
			$t_green = round($tab[1]);
			$t_blue = round($tab[2]);
		}

		$t_red = round($this->red - $t_red);
		$t_green = round($this->green - $t_green);
		$t_blue = round($this->blue - $t_blue);
		if ($t_red < 0 || $t_red > 255)
			$t_red = ($t_red < 0) ? 0 : 255;
		if ($t_green < 0 || $t_green > 255)
			$t_green = ($t_green < 0) ? 0 : 255;
		if ($t_blue < 0 || $t_blue > 255)
			$t_blue = ($t_blue < 0) ? 0 : 255;
		$t_instance = new Color( array($t_red, $t_green , $t_blue));
		return $t_instance;
	}

	public function mult( array $tab ) {
		if (count($tab) == 1) {
			list($t_red, $t_green, $t_blue) = sscanf($tab[0], "#%02x%02x%02x");
		}
		else if (count($tab) == 3) {
			$t_red = round($tab[0]);
			$t_green = round($tab[1]);
			$t_blue = round($tab[2]);
		}

		$t_red = round($this->red * $t_red);
		$t_green = round($this->green * $t_green);
		$t_blue = round($this->blue * $t_blue);
		if ($t_red < 0 || $t_red > 255)
			$t_red = ($t_red < 0) ? 0 : 255;
		if ($t_green < 0 || $t_green > 255)
			$t_green = ($t_green < 0) ? 0 : 255;
		if ($t_blue < 0 || $t_blue > 255)
			$t_blue = ($t_blue < 0) ? 0 : 255;
		$t_instance = new Color( array($t_red, $t_green , $t_blue));
		return $t_instance;
	}

}

$instance = new Color( array("#f1d356"));
$instance->doc();

print ("\n\n--- rgb d'origine ---\n");
$instance->__tostring();

print ("\n\n------ add ------\n");

$instance2 = $instance->add(array(0, 50, 180));
$instance2->__tostring();

print ("\n\n------ sub ------\n");

$instance3 = $instance->sub(array(0, 150, 200));
$instance3->__tostring();

print ("\n\n------ mult ------\n");

$instance4 = $instance->mult(array(10, 2, 3));
$instance4->__tostring();

?>
