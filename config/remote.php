<?php
// config for Hhhoegsted/ClassName
return [
	'hosts' => [
		'default' => [
			'host' => env('REMOTE_ENV'),
			'user' => env('REMOTE_USER'),
			'port' => env('REMOTE_PORT', 22),
			'path' => env('REMOTE_PATH'),
		]
	]
];
