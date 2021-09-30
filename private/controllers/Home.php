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
			'home'=>'home'
		];

		$this->view('home',['title'=>'Home','_css'=>$css]);
	}
}