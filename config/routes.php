<?php
return [
	'root' => [
		'pattern' => '/',
		'method' => 'GET',
		'action' => 'Store\\Controllers\\IndexController@index'
	],
	'product_list' => [
		'pattern' => '/products',
		'method' => 'GET',
		'action' => 'Store\\Controllers\\ProductsController@getAllProducts'
	],
	'single_product' => [
		'pattern' => '/products/{id}',
		'method' => 'GET',
		'parameters' => ['id'],
		'action' => 'Store\\Controllers\\ProductsController@getProduct'
	],
	'create_product' => [
		'pattern' => '/products',
		'method' => 'POST',
		'action' => 'Store\\Controllers\\ProductsController@createProduct'
	],
	'delete_product' => [
		'pattern' => '/products/{id}',
		'method' => 'DELETE',
		'parameters' => ['id'],
		'action' => 'Store\\Controllers\\ProductsController@deleteProduct'
	],
];