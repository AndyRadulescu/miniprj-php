<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 12.08.2018
 * Time: 17:11
 */

class Shares extends Controller
{
    protected function index()
    {
        $viewmodel = new ShareModel();
        $this->ReturnView($viewmodel->Index(), true);
    }
}