<?php
	namespace App;
	class Application
	{
		private $controller;

		private function setApp(){

			$loadName = 'App\Controllers\\';
			$url = explode('/',@$_GET['url']);

			if($url[0] == ''){
				$loadName.='home';

			}else{
				$loadName.=ucfirst(strtolower($url[0]));
			}

			$loadName.='Controller';

			if(file_exists($loadName.'.php')){
				$this->controller = new $loadName();
			}else{
				include('views/pages/404.php');
				die();
			}

			
			


		}
		
		public function run(){
			$this->setApp();
			$this->controller->index();
		}
		
	}

?>