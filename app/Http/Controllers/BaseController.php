<?php namespace dnifeliz_backoffice\Http\Controllers;

class BaseController extends Controller {

    public $restful = true;
/*	public function __construct()
	{
		$this->beforeFilter('csrf', [
			'on' => ['post']
		]);	
	}*/
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}
}
