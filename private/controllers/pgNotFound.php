<?php

/**
 * 404 controller
 */
class pgNotFound extends Controller
{
	
	function index()
	{
		// code...
		$css = [
			'404'=>'assets/css/404.css'
		];
		$js = [
			'404'=>'assets/js/404.js'
		];

		$this->view('404',['title'=>"Uh oh! We couldn't find that page!",
							'_css'=>$css,
							'_js'=>$js
							]);
	}
}