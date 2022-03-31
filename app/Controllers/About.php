<?php
	/*
		include methods for the homepage, info page, and contact page.
	*/
	namespace App\Controllers;
	
	class About extends BaseController 
	{	
		public function homepage() { /*About/homepage*/
			echo view("formatting/header");
		}
		
		public function contact() { /*About/contact*/
			echo "Contacts";
		}
		
		/*Should not be usable in final version*/
		/*(that means comment it out)*/
		public function debug() {
			echo view("formatting/header");
			echo view("contents/map_debug");
			echo view("formatting/footer");
		}
	}
?>