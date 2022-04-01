<?php
	namespace App\Models;
	
	use CodeIgniter\Model;
	
	class ArchiveModel extends Model {
		protected $table = 'Locations';
		
		public function getMaps($id = null) {
			if ($id == null) { /*if null, retrieve all*/
				return $this->findAll();
			}
			/*if given ID, select that entry and return it*/
			try {
				return $this->where(['ID' => $id])->first();
			} catch (exception $e) {
				/*invalid ID? return the first entry as a fallback*/
				return $this->where(['ID' == 1])->first();
			}
		}
		
		public function findLatest(){
			$today = date('Y-m-d'); /*get todays date in YYYY-MM-DD, same as the database*/
			try {
				return $this->where(['DATE' => $today])->first(); /*grab and return the first entry that matches*/
			} catch (exception $e) {
				return $this->where(['ID' == 1])->first(); /*hacky fallback*/
			}
		}
	}

?>