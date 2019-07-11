<?php

include_once 'Event.php';
include_once 'EmailGateway.php';

EmailGateway::send(
	new Event('Someone text')
	);