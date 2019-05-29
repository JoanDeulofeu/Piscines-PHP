<?PHP

class NightsWatch {

	public $fearful;
	public $fighter;
	private $_exist = FALSE;

	public function recruit( $recrue ) {
		if ($this->_exist == FALSE){
			$this->fearful = array();
			$this->fighter = array();
			$this->_exist = TRUE;
		}
		$this->fearful[] = $recrue;
		if ((is_subclass_of($recrue, "IFighter")) == TRUE) {
			$this->fighter[] = $recrue;
		}
	}

	public function fight( ) {
		foreach ($this->fighter as $value) {
			$value->fight();
		}
	}
}

?>
