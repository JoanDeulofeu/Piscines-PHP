<?PHP

Class UnholyFactory {

	public $army;
	private $_exist = FALSE;

	public function __construct( $name ) {
		if ($this->_exist == FALSE){
			$this->army = array();
			$this->_exist = TRUE;
		}
		"Factory absorbed a fighter of type " . $name . ")". PHP_EOL;
		return;
	}

	public function absorb( $name ) {
		if ($this->_exist == FALSE){
			$this->army = array();
			$this->_exist = TRUE;
		}
		$find = FALSE;
		$troup = get_class($name);
		if ($troup == "Llama")
			print ("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
		else {
			foreach ($this->army as $value) {
				if ($vlaue = $troup)
					$find = TRUE;
			}
			if ($find == FALSE)
				$this->army[] = $troup;
			else
				print ("(Factory already absorbed a fighter of " . $troup . ")" . PHP_EOL);
		}
		return;
	}

	public function	fabricate( $name ) {
		$here = FALSE;
		foreach ($this->army as $value) {
			if ($value == $name)
				$here = TRUE;
		}
		if ($here == TRUE)
			print ("(Factory fabricates a fighter of type " . $name . ")" . PHP_EOL);
		else
			print ("(Factory hasn't absorbed any fighter of type " . $name . ")" . PHP_EOL);
		return;
	}

}

?>
