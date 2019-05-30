<?PHP

Class UnholyFactory {

	public $army = array();
	public $soldierclass = array();

	public function __construct() {
		return;
	}

	public function absorb( $fighter ) {
		if ($this->_exist == FALSE){
			$this->army = array();
			$this->_exist = TRUE;
		}
		$troup = get_class($fighter);
		if ($troup != "Llama")
			$name = $fighter->__getsoldier();
		$find = FALSE;

		if ($troup == "Llama")
			print ("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
		else {
			foreach ($this->army as $value) {
				if ($value == $name)
					$find = TRUE;
			}
			if ($find == FALSE) {
				$this->army[] = $name;
				print ("(Factory absorbed a fighter of type " . $name . ")". PHP_EOL);
			}
			else
				print ("(Factory already absorbed a fighter of " . $name . ")" . PHP_EOL);
		}
		return;
	}

	public function	fabricate( $name ) {
		$here = FALSE;
		foreach ($this->army as $value) {
			if ($value == $name) {
				$here = TRUE;
				if ($name == "foot soldier" && !($this->soldierclass["foot soldier"]))
					$this->soldierclass["foot soldier"] = new Footsoldier();
				else if ($name == "archer" && !($this->soldierclass["archer"]))
					$this->soldierclass["archer"] = new Archer();
				else if ($name == "assassin" && !($this->soldierclass["assasin"]))
					$this->soldierclass["assassin"] = new Assassin();
			}
		}

		if ($here == TRUE)
			print ("(Factory fabricates a fighter of type " . $name . ")" . PHP_EOL);
		else
			print ("(Factory hasn't absorbed any fighter of type " . $name . ")" . PHP_EOL);

		if ($name == "foot soldier")
			return $this->soldierclass["foot soldier"];
		else if ($name == "archer")
			return $this->soldierclass["archer"];
		else if ($name == "assassin")
			return $this->soldierclass["assassin"];
		else
			return;
	}

}

?>
