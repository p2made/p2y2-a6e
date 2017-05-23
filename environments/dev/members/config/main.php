<?php
$params = array_merge(
	require(__DIR__ . '/../../common/config/params.php'),
	require(__DIR__ . '/../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-members',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'members\controllers',
	'bootstrap' => ['log'],
	'modules' => [],
	'components' => [
		'request' => [
			'csrfParam' => '_csrf-members',
		],
		'session' => [
			// this is the name of the session cookie used for login on the members
			'name' => 'advanced-members',
		],
		'assetManager' => [
			'basePath' => '@assets/web/members/pub',
			'baseUrl' => '@assetsUrl/members/pub',
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
	],
	'params' => $params,
];
