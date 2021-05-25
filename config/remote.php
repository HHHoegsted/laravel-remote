<?php
// config for Hhhoegsted/ClassName
return [
	'hosts' => [
		'default' => [
			'host' => env('REMOTE_HOST'),
			'user' => env('REMOTE_USER'),
			'port' => env('REMOTE_PORT', 22),
			'path' => env('REMOTE_PATH'),
		]
	],

	'command-aliases' => [
		'clear-all-caches' => [
			'php artisan clear:cache',
			'php artisan config:cache',
			'php artisan view:cache',
			'php artisan route:cache',
		]
	],

];
