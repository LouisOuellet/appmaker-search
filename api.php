<?php
class searchAPI extends API {

	public function search($request = null, $data = null){
		if($data != null){
			if(!is_array($data)){ $data = json_decode($data, true); }
			$results['request'] = $request;
			$results['data'] = $data;
			foreach($this->Settings['plugins'] as $plugin => $conf){
				$api = $plugin.'API';
				if(class_exists($api) && method_exists($api,'search')){
					$api = new $api();
					$results['output'][$plugin] = $api->search();
				}
			}
			if(isset($results['output'])&&!empty($results['output'])){ $results['success'] = $this->Language->Field["Search query executed"]; }
			else { $results['error'] = $this->Language->Field["No results found"]; }
			return $results;
		}
	}
}
