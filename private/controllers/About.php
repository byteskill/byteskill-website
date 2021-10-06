<?php

/**
 * about controller
 */
class About extends Controller
{
	
	function index($id = null)
	{
		// code...
		$css = [
			'about'=>'assets/css/about.css'
		];
		$js = [
			'about'=>'assets/js/about.js'
		];

		$this->view('about',['title'=>'About',
							'_css'=>$css,
							'_js'=>$js
							]);
	}
}