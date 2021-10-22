<?php
class searchAPI extends API {

	public function search($request = null, $data = null){
		if($data != null){
			if(!is_array($data)){ $data = json_decode($data, true); }
			return [
				"success" => $this->Language->Field["Search query executed"],
				"request" => $request,
				"data" => $data,
			];
		}
	}
}
