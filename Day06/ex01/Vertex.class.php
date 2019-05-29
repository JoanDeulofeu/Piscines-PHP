<?PHP

require_once 'Color.class.php';

Class Vertex {

	private $_x = 0;
	private $_y = 0;
	private $_z = 0;
	private $_w = 1.0;
	private $_color = NULL;
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
		$this->_x = round($tab['x'], 2);
		$this->_y = round($tab['y'], 2);
		$this->_z = round($tab['z'], 2);
		if ($tab['w'])
			$this->_w = round($tab['w'], 2);
		if ($tab['color'])
			$this->color = $tab['color'];
		else
			$this->color = new Color( array( 'red' => 255, 'green' =>   255, 'blue' =>   255 ) );

		$print_coord = "Vertex( x: " . number_format($this->_x, 2) . ", y: " . number_format($this->_y, 2) . ", z:" . number_format($this->_z, 2) . ", w:" . number_format($this->_w, 2) . ", ";

		$rred = $this->color->red;
		$ggreen = $this->color->green;
		$bblue = $this->color->blue;

		$print_color = "Color( red: " . $diffred . $rred . ", green:   " . $diffgreen . $ggreen . ", blue:   " . $diffblue . $bblue . " ) ) constructed.";
		if (self::$verbose === TRUE)
			print ($print_coord . $print_color . PHP_EOL);
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
		$print_coord = "Vertex( x: " . number_format($this->_x, 2) . ", y: " . number_format($this->_y, 2) . ", z:" . number_format($this->_z, 2) . ", w:" . number_format($this->_w, 2) . ", ";

		$rred = $this->color->red;
		$ggreen = $this->color->green;
		$bblue = $this->color->blue;

		$print_color = "Color( red: " . $diffred . $rred . ", green:   " . $diffgreen . $ggreen . ", blue:   " . $diffblue . $bblue . " )";
		if (self::$verbose === TRUE)
			print ($print_coord . $print_color . " ) destructed." . PHP_EOL);
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
		$print_coord = "Vertex( x: " . number_format($this->_x, 2) . ", y: " . number_format($this->_y, 2) . ", z:" . number_format($this->_z, 2) . ", w:" . number_format($this->_w, 2) . ", ";
		$print_color = "Color( red: " . $diffred . $this->color->red . ", green:   " . $diffgreen . $this->color->green . ", blue:   " . $diffblue . $this->color->blue . " )";
		if (self::$verbose === TRUE)
			$tostr = $print_coord . $print_color . " )";
		else
			$tostr = $print_coord . " )";
		return $tostr;
	}

	public function __getx() {
		return $this->_x;
	}
	public function __setx( $int ) {
		$this->_x = $int;
		return;
	}

	public function __gety() {
		return $this->_y;
	}
	public function __sety( $int ) {
		$this->_y = $int;
		return;
	}

	public function __getz() {
		return $this->_z;
	}
	public function __setz( $int ) {
		$this->_z = $int;
		return;
	}

	public function __getw() {
		return $this->_w;
	}
	public function __setw( $int ) {
		$this->_w = $int;
		return;
	}

	public function __getcolor() {
		return $this->_color;
	}
	public function __setcolor( array $tab ) {
		if (count($tab) == 1) {
			$this->color->red = round($tab['rgb'] >> 16 & 255);
			$this->color->green = round($tab['rgb'] >> 8 & 255);
			$this->color->blue = round($tab['rgb'] >> 0 & 255);
		}
		else if (count($tab) == 3) {
			$this->color->red = round($tab['red']);
			$this->color->green = round($tab['green']);
			$this->color->blue = round($tab['blue']);
		}
		return;
	}

	public static function doc() {
		$str = file_get_contents("./Vertex.doc.txt");
		echo $str;
		return;
	}
}
?>
