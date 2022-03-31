<?php
	/*
		include methods for the homepage, info page, and contact page.
	*/
	namespace App\Controllers;
	
	class About extends BaseController 
	{	
		public function index() { /*About/homepage*/
			echo view("formatting/header");
			echo view("contents/about");
			echo view("formatting/footer");
		}
		
		/*public function contact() { #May restore this?
			echo view("formatting/header");
			echo view("contents/contact");
			echo view("formatting/footer");
		}*/
		
		/*Should not be usable in final version*/
		public function debug() {
			echo view("formatting/header");
			echo view("contents/map_debug");
			echo view("formatting/footer");
		}
	}
?>