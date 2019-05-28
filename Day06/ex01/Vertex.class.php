<?PHP

require_once 'Color.class.php';

Class Vertex {

	public $x = 0;
	public $y = 0;
	public $z = 0;
	public $w = 0;
	public $color = NULL;
	public static $verbose = FALSE;

	public function find_diff( Color $clr ) {
		$diffred = "  ";
		if ($clr->red > 9)
			$diffred = ($clr->red <= 99) ? " " : "";
		$diffgreen = "  ";
		if ($clr->green > 9)
			$diffgreen = ($clr->green <= 99) ? " " : "";
		$diffblue = "  ";
		if ($clr->blue > 9)
			$diffblue = ($clr->blue <= 99) ? " " : "";
		$tab1[0] = $diffred;
		$tab1[1] = $diffgreen;
		$tab1[2] = $diffblue;
		return ($tab1);
	}

	public function __construct( array $tab ) {
		if ($tab['color'] != NULL)
			list($diffred, $diffgreen, $diffblue) = $this->find_diff($tab['color']);
		else {
			$diffred = "   ";
			$diffgreen = "   ";
			$diffblue = "   ";
		}
		$this->x = $tab['x'];
		$this->y = $tab['y'];
		$this->z = $tab['z'];
		$this->w = $tab['w'];
		if ($tab['color'])
			$this->color = $tab['color'];

		$print_color = "Color( red: " . $diffred . $tab['color']->red . ", green:   " . $diffgreen . $tab['color']->green . ", blue:   " . $diffblue . $tab['color']->blue . " )";
		$print_coord = "Vertex( x: " . $this->x . ", y: " . $this->y . ", z:" . $this->z . ", w:" . $this->w . ", ";
		if (self::$verbose === TRUE)
			print ($print_coord . $print_color . " constructed." . PHP_EOL);
		return;
	}

	public function __destruct() {
		if ($this->color != NULL) {
			$diffred = "  ";
			if ($this->color->red > 9)
				$diffred = ($this->color->red <= 99) ? " " : "";
			$diffgreen = "  ";
			if ($this->color->green > 9)
				$diffgreen = ($this->color->green <= 99) ? " " : "";
			$diffblue = "  ";
			if ($this->color->blue > 9)
				$diffblue = ($this->color->blue <= 99) ? " " : "";
		}
		else {
			$diffred = "   ";
			$diffgreen = "   ";
			$diffblue = "   ";
		}
		if (self::$verbose === TRUE)
			print ("Color( red: " . $diffred . $this->color->red . ", green:   " . $diffgreen . $this->color->green . ", blue:   " . $diffblue . $this->color->blue . " ) destructed." . PHP_EOL);
		return;
	}

	public function __tostring() {
		if ($this->color != NULL) {
			$diffred = "  ";
			if ($this->color->red > 9)
				$diffred = ($this->color->red <= 99) ? " " : "";
			$diffgreen = "  ";
			if ($this->color->green > 9)
				$diffgreen = ($this->color->green <= 99) ? " " : "";
			$diffblue = "  ";
			if ($this->color->blue > 9)
				$diffblue = ($this->color->blue <= 99) ? " " : "";
		}
		else {
			$diffred = "   ";
			$diffgreen = "   ";
			$diffblue = "   ";
		}
		$tostr = "Color( red: " . $diffred . $this->color->red . ", green:   " . $diffgreen . $this->color->green . ", blue:   " . $diffblue . $this->color->blue . " )";
		return $tostr;
	}

	public static function doc() {
		$str = file_get_contents("./Vertex.doc.txt");
		echo $str;
		return;
	}
}
?>
