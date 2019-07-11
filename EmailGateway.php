<?php

include_once 'Mailable.php';

	class EmailGateway{
		public static function send(Mailable $mail){
			echo $mail->getText() . "\n";
		}
	}
