<?php

namespace Hhhoegsted\LaravelRemote\Config;

use Hhhoegsted\LaravelRemote\Config\HostConfig;

class RemoteConfig
{
	public static function getHost($hostName) : HostConfig
	{
		$configValues = config("remote.hosts.{$hostName}");

		return new HostConfig(
			$configValues['host'],
			$configValues['port'],
			$configValues['user'],
			$configValues['path'],
		);
	}
}
