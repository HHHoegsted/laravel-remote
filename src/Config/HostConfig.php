<?php

namespace Hhhoegsted\LaravelRemote\Config;

class HostConfig
{
    public function __construct(
        public string $host,
        public int $port,
        public string $user,
        public string $path
    ) {
    }
}
