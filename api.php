<?php
class searchAPI extends API {

	public function search($request = null, $data = null){
		if($data != null){
			if(!is_array($data)){ $data = json_decode($data, true); }
			$results = [
				"success" => $this->Language->Field["Search query executed"],
				"request" => $request,
				"data" => $data,
			];
		}
	}
}
