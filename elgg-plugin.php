<?php

use ColdTrick\Digest\Bootstrap;

define('DIGEST_INTERVAL_NONE', 'none');
define('DIGEST_INTERVAL_DEFAULT', 'default');
define('DIGEST_INTERVAL_DAILY', 'daily');
define('DIGEST_INTERVAL_WEEKLY', 'weekly');
define('DIGEST_INTERVAL_FORTNIGHTLY', 'fortnightly');
define('DIGEST_INTERVAL_MONTHLY', 'monthly');

return [
	'bootstrap' => \ColdTrick\Digest\Bootstrap::class,
	'settings' => [
		'friend_activities' => 'yes',
		'group_activities' => 'yes',
	],
	'routes' => [
		'view:digest:user:page' => [
			'path' => '/digest/user/{username}',
			'resource' => 'digest/usersettings',
		],
		'view:digest:test' => [
			'path' => '/digest/test',
			'resource' => 'digest/test',
		],
		'view:digest:unsubscribe' => [
			'path' => '/digest/unsubscribe',
			'resource' => 'digest/unsubscribe',
			'walled' => false,
		],
		'view:digest:show' => [
			'path' => '/digest/show',
			'resource' => 'digest/show',
		],
	],
];
