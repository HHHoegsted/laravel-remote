<?php

namespace Hhhoegsted\LaravelRemote\Commands;

use Spatie\Ssh\Ssh;
use Illuminate\Console\Command;

class LaravelRemoteCommand extends Command
{
	public $signature = 'remote {rawCommand}';

	public $description = 'Execute commands on a remote server';

	protected function getCommand() : string
	{
		return $this->argument('rawCommand');
	}

	public function handle()
	{
		Ssh::create('user', 'example.com')
				->onOutput(function($type, $line) {
					echo $line;
				})
				->execute($this->getCommand());

	}
}
