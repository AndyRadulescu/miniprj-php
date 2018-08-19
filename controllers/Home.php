<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 12.08.2018
 * Time: 16:45
 */

class Home extends Controller
{
    protected function index()
    {
        $viewmodel = new HomeModel();
        $this->ReturnView($viewmodel->Index(), true);
    }
}