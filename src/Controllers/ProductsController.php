<?php

namespace Store\Controllers;

use Izaika\Framework\Controller\Controller;

class ProductsController extends Controller
{
	public function getAllProducts()
	{
		echo 'show all products';
		$query_parameters = $this->request->getQueryParameters();
		if (count($query_parameters)) {
			echo 'Query parameters:<br>';
			debug($query_parameters);
		}
	}


	public function getProduct()
	{
		echo 'show product ' . $this->route->getParam('id');
	}


	public function createProduct()
	{
		echo 'create product';
	}


	public function deleteProduct()
	{
		echo 'delete product ' . $this->route->getParam('id');
	}
}