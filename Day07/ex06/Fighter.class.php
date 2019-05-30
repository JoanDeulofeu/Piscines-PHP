<?PHP

Abstract Class Fighter {

	Abstract public function fight( $target );

	public $soldier;

	public function __construct( $name ) {
		$this->soldier = $name;
	}

	public function __getsoldier( ) {
		return $this->soldier;
	}
}

?>
