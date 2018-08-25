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
        $this->returnView($viewmodel->Index(), true);
    }

    protected function add()
    {
        if (!isset($_SESSION['is_logged_in'])) {
            header('Location: ' . ROOT_URL . 'shares');
        }
        $viewmodel = new ShareModel();
        $this->returnView($viewmodel->add(), true);
    }
}