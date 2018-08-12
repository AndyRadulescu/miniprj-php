<?php

class Bootstrap
{
    private $controller;
    private $action;
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
        if ($this->request['controller'] == "") {
            $this->controller = 'home';
        } else {
            $this->controller = $this->request['controller'];
        }
        if ($this->request['action'] == "") {
            $this->action = 'index';
        } else {
            $this->action = $this->request['action'];
        }

        echo $this->controller;
    }

    public function createController()
    {
        if (class_exists($this->controller)) {
            $parents = class_parents($this->controller);
            //Check extend
            if (in_array('Controller', $parents)) {
                if (method_exists($this->controller, $this->action)) {
                    return new $this->controller($this->action, $this->request);
                } else {
//                    Method does not exist
                    echo '<h1>Method does not exist</h1>';
                    return;
                }
            } else {
                //Base controller does not exist
                echo '<h1>Base controller not found</h1>';
                return;
            }
        } else {
            //Controller class does not exist
            echo '<h1>Controller Class not found</h1>';
            return;
        }
    }
}