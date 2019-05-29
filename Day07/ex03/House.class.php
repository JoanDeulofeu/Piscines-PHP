<?PHP

	class House {

		public function introduce() {
			$str = "House " . $this->getHouseName() . " of " . $this->getHouseSeat() . " : \"" . $this->getHouseMotto() . "\"" . PHP_EOL;
			print($str);
			return;
		}

	}

?>
