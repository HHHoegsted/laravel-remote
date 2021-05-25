<?php

namespace Hhhoegsted\LaravelRemote\Commands;

use Spatie\Ssh\Ssh;
use Illuminate\Console\Command;
use Hhhoegsted\LaravelRemote\Config\RemoteConfig;

class LaravelRemoteCommand extends Command
{
	public $signature = 'remote {rawCommand} {--host=default}';

	public $description = 'Execute commands on a remote server';

	protected function getCommand($hostConfig) : array
	{
		return [
			"cd {$hostConfig->path}",
			$this->argument('rawCommand'),
		];
	}

	public function handle()
	{

		$hostConfig = RemoteConfig::getHost($this->option('host'));

		Ssh::create($hostConfig->user, $hostConfig->host)
				->onOutput(function($type, $line) {
					echo $line;
				})
				->usePort($hostConfig->port)
				->execute($this->getCommand($hostConfig));

	}
}
