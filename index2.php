<?php

	include 'mailer.php';


	echo Mailer::$mail_from . "\n";
	Mailer::$mail_from = 'yandex@yandex.ru';
	echo Mailer::$mail_from;

	Mailer::send('subject', 'email', 'content');


