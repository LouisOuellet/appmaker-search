<?php
class searchAPI extends API {

	public function search($request = null, $data = null){
		if($data != null){
			if(!is_array($data)){ $data = json_decode($data, true); }
			// if(isset($_GET['query'])){}
		}
	}
}
