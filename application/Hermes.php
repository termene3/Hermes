<?php

	namespace Hermes
	{
		chdir(__DIR__);
		
		class Heart
		{
			private $_ClassesDirectory 		= '/classes';
			private $_ClassesExtension 		= '_class.php';
			private $_ModelsDirectory 		= '/models';
			private $_ModelsExtension 		= '_model.php';
			private $_ControllersDirectory 	= '/controllers';
			private $_ControllersExtension 	= '_controller.php';
			private $_ViewsDirectory 		= '/views';
			private $_ViewsExtension 		= '_view.php';
			
			public function __construct()
			{
				
				spl_autoload_register(array($this, 'ClassLoader'));	
			}
			
			public function ClassLoaderSetClass($extension)
			{
			}
			
			private function ClassLoader($class)
			{
				require_once($this->_ClassesDirectory . DIRECTORY_SEPARATOR . $class . $this->_ClassesExtension);
			}
			
			private function ModelLoader($model)
			{
				require_once($this->_ModelsDirectory . DIRECTORY_SEPARATOR . $model . $this->_ModelsExtension);
			}
			
			private function ControllerLoader($controller)
			{
				require_once($this->_ControllersDirectory . DIRECTORY_SEPARATOR . $controller . $this->_ControllersExtension);
			}
		}
	}
	
	
?>