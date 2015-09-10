<?php

class Swap {

	private $a;
	private $b;

	public function setAValue() {
		$this->a = $_POST["a"];
	}

	public function setBValue() {
		$this->b = $_POST["b"];
	}

	public function swapValue() {
    		$this->a = $this->a+$this->b;
    		$this->b = $this->a-$this->b;
    		$this->a = $this->a-$this->b;
	}

	public function getAValue() {
		return $this->a;
	}

	public function getBValue() {
		return $this->b;
	}

}

?>
