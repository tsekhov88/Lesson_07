<?php

include_once 'Mailable.php';

class Event implements Mailable {
	protected $text;

	public function __construct($text) {
		$this->text = $text;
	}

	public function getText(){
		return $this->text;
	}
}