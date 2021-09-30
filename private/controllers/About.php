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
			'about'=>'about'
		];

		$this->view('about',['title'=>'About','_css'=>$css]);
	}
}