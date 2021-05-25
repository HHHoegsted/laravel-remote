<?php

namespace Hhhoegsted\LaravelRemote\Commands;

use Illuminate\Console\Command;

class LaravelRemoteCommand extends Command
{
    public $signature = 'remote {command}';

    public $description = 'Execute commands on a remote server';

    public function handle()
    {
        $this->comment('All done');
    }
}
