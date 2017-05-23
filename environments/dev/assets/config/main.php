<?php
$params = array_merge(
	require(__DIR__ . '/../../common/config/params.php'),
	require(__DIR__ . '/../../common/config/params-local.php'),
	require(__DIR__ . '/params.php'),
	require(__DIR__ . '/params-local.php')
);

return [
	'id' => 'app-assets',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'assets\controllers',
	'bootstrap' => ['log'],
	'modules' => [],
	'components' => [
		'request' => [
			'csrfParam' => '_csrf-assets',
		],
		'session' => [
			// this is the name of the session cookie used for login on the assets
			'name' => 'advanced-assets',
		],
		'assetManager' => [
			'basePath' => '@assets/web/assets/pub',
			'baseUrl' => '@assetsUrl/assets/pub',
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
