<?php

class TestController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
		echo "Hello World";
    }
    
    public function loginAction($name="Antoine", $value=2){
    	$this->view->setVar("name", $name);
    }

}

