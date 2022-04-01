<?php
/* include methods for viewing an archived map and todays map */
	namespace App\Controllers;
	
	use App\Models\ArchiveModel;
	
	class Map extends BaseController {
		
		
		public function index() { /*index will just be the archive list*/
			$model = model(ArchiveModel::class);
			$data['maps'] = $model->getMaps(null);
			
			echo view("formatting/header");
			echo view("contents/history", $data);
			echo view("formatting/footer");
		}
		
		public function view($id = 1) { /*view entry by ID*/
			$model = model(ArchiveModel::class);
			if ($id == "today") {
				$data['maps'] = $model->findLatest();
			} else {
				$data['maps'] = $model->getMaps($id);
			}
			
			
			echo view("formatting/header");
			echo view("contents/map_large", $data);
			echo view("formatting/footer");
		}
		
		public function ajaxView($id = 1) {
			$model = model(archiveModel::class);
			$data = $model->getMaps($id);
			
			print(json_encode($data));
		}
	}
?>