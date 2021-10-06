<?php

/**
 * home controller
 */
class Blog extends Controller
{
	
	function index()
	{
		// code...
		$css = [
			'blog'=>'assets/css/blog.css'
		];
		$js = [
			'blog'=>'assets/js/blog.js'
		];

		$this->view('blog',['title'=>'Blog',
							'_css'=>$css,
							'_js'=>$js
							]);
	}
}