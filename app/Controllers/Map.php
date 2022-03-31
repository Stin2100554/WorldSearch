<?php
/* include methods for viewing an archived map and todays map */
	namespace App\Controllers;
	use App\Models\ArchiveModel;
	
	class Map extends BaseController {
		public function index() { /*index will just be the archive list*/
			echo view("formatting/header");
			echo view("contents/history");
			echo view("formatting/footer");
		}
		
		public function view($id = null) { /*view entry by ID*/
			/*if no id is given, goto latest*/
			echo view("formatting/header");
			echo view("contents/map_large");
			echo view("formatting/footer");
		}
	}
?>