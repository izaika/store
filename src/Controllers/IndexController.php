<?php

namespace Store\Controllers;

use Izaika\Framework\Controller\Controller;

class IndexController extends Controller
{
	public function index()
	{
		$body = '<h1>Welcome to our store</h1>';

		$this->render('index', ['variable' => 'And this is the text from variable']);
	}
}