<?PHP

Class Color {

	public $red = 0;
	public $green = 0;
	public $blue = 0;
	public static $verbose = FALSE;

	public function __construct( array $tab ) {
		if (count($tab) == 1) {
			$this->red = round($tab['rgb'] >> 16 & 255);
			$this->green = round($tab['rgb'] >> 8 & 255);
			$this->blue = round($tab['rgb'] >> 0 & 255);
		}
		else if (count($tab) == 3) {
			$this->red = round($tab['red']);
			$this->green = round($tab['green']);
			$this->blue = round($tab['blue']);
		}
		$diffred = "  ";
		if ($this->red > 9)
			$diffred = ($this->red <= 99) ? " " : "";
		$diffgreen = "  ";
		if ($this->green > 9)
			$diffgreen = ($this->green <= 99) ? " " : "";
		$diffblue = "  ";
		if ($this->blue > 9)
			$diffblue = ($this->blue <= 99) ? " " : "";
		if (self::$verbose === TRUE)
			print ("Color( red: " . $diffred . $this->red . ", green:   " . $diffgreen . $this->green . ", blue:   " . $diffblue . $this->blue . " ) constructed." . PHP_EOL);
		return;
	}

	public function __destruct() {
		$diffred = "  ";
		if ($this->red > 9)
			$diffred = ($this->red <= 99) ? " " : "";
		$diffgreen = "  ";
		if ($this->green > 9)
			$diffgreen = ($this->green <= 99) ? " " : "";
		$diffblue = "  ";
		if ($this->blue > 9)
			$diffblue = ($this->blue <= 99) ? " " : "";
		if (self::$verbose === TRUE)
			print ("Color( red: " . $diffred . $this->red . ", green:   " . $diffgreen . $this->green . ", blue:   " . $diffblue . $this->blue . " ) destructed." . PHP_EOL);
		return;
	}

	public function __tostring() {
		$diffred = "  ";
		if ($this->red > 9)
			$diffred = ($this->red <= 99) ? " " : "";
		$diffgreen = "  ";
		if ($this->green > 9)
			$diffgreen = ($this->green <= 99) ? " " : "";
		$diffblue = "  ";
		if ($this->blue > 9)
			$diffblue = ($this->blue <= 99) ? " " : "";
		$tostr = "Color( red: " . $diffred . $this->red . ", green:   " . $diffgreen . $this->green . ", blue:   " . $diffblue . $this->blue . " )";
		return $tostr;
	}

	public static function doc() {
		$str = file_get_contents("./Color.doc.txt");
		echo $str . PHP_EOL;
		return;
	}

	public function add( Color $rgb ) {
		$t_red =  $this->red + $rgb->red;
		$t_green =  $this->green + $rgb->green;
		$t_blue =  $this->blue + $rgb->blue;
		$t_instance = new Color( array('red' => $t_red, 'green' => $t_green , 'blue' => $t_blue));
		return $t_instance;
	}

	public function sub( Color $rgb ) {
		$t_red =  $this->red - $rgb->red;
		$t_green =  $this->green - $rgb->green;
		$t_blue =  $this->blue - $rgb->blue;
		$t_instance = new Color( array('red' => $t_red, 'green' => $t_green , 'blue' => $t_blue));
		return $t_instance;
	}

	public function mult( $f ) {
		$t_red =  $this->red * $f;
		$t_green =  $this->green * $f;
		$t_blue =  $this->blue * $f;
		$t_instance = new Color( array('red' => $t_red, 'green' => $t_green , 'blue' => $t_blue));
		return $t_instance;
	}

}
?>
