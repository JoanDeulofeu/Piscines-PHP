<?PHP

class Targaryen {

	public function resistsFire() {
		return False;
	}

	public function getBurned(){
		if ($this->resistsFire() === True)
			$str = "emerges naked but unharmed";
		else
			$str = "burns alive";
		return $str;
	}

}
?>
