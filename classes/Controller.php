<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 12.08.2018
 * Time: 16:38
 */

abstract class Controller
{
    protected $request;
    protected $action;

    public function __construct($request, $action)
    {
        $this->request = $request;
        $this->action = $action;
    }

    public function executeAction()
    {
        return $this->{$this->action}();
    }

    protected function returnView($viewmodel, $fullview)
    {
        $view = 'views/' . get_class($this) . '/' . $this->action . '.php';
        if ($fullview) {
            require('views/main.php');
        } else {
            require($view);
        }
    }

}