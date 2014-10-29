<?php  

class RoutePaths{

	public function routes(){
		return array(
			'clients',
			'users',
			'webservices',
			'profiles'
		)
		;
	}

	public $link;

	public function anchors()  {
		$routes=$this->routes();

		$links=array();

		foreach ($routes as $r) {
			$links[$r]='<a href="'.URL::to($r).'">'.$r.'</>';
		}

		return $links;
	}
}

?>