<?php   // statichniy metod
	class Mailer{
		public static $mail_from = 'mail@mail.ru';
		public static function send($subject, $email, $content){
			echo $subject . "\n";
			echo $email . "\n";
			echo $content . "\n";
			echo self::$mail_from . "\n";
		}
	} 