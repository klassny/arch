<?php
$uri = rtrim($_SERVER['REQUEST_URI'], '/');

switch ($uri)
{
	case '/health':
		$response = [
			'status' => 'OK',
		];
		break;

	case '/version':
		$response = [
			'status' => 'OK',
			'version' => '0.1',
		];
		break;

	default:
		$response = [
			'status' => 'Bad request',
		];
}

header('Content-type: application/json; charset=utf-8');
echo json_encode($response);