<?php
return [
	'root' => [
		'pattern' => '/',
		'method' => 'GET',
		'action' => 'Store\\IndexController@index'
	],
	'product_list' => [
		'pattern' => '/products',
		'method' => 'GET',
		'action' => 'ProductsController@getAllProducts'
	],
	'single_product' => [
		'pattern' => '/products/{id}',
		'method' => 'GET',
		'parameters' => ['id'],
		'action' => 'Store\\ProductsController@getProduct'
	],
	'create_product' => [
		'pattern' => '/products',
		'method' => 'POST',
		'action' => 'Store\\ProductsController@createProduct'
	]
];