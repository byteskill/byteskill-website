<?php

/**
 * home controller
 */
class Home extends Controller
{
	
	function index()
	{
		// code...
		$css = [
			'home'=>'assets/css/home.css'
		];
		$js = [
			'home'=>'assets/js/home.js'
		];

		$this->view('home',['title'=>'Home',
							'_css'=>$css,
							'_js'=>$js
							]);
	}
}