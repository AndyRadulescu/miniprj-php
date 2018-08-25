<?php
/**
 * Created by PhpStorm.
 * User: Andy
 * Date: 12.08.2018
 * Time: 17:11
 */

class Users extends Controller
{
    protected function register()
    {
        $viewModel = new UserModel();
        $this->returnView($viewModel->register(), true);
    }

    protected function login()
    {
        $viewModel = new UserModel();
        $this->returnView($viewModel->login(), true);
    }

    protected function logout()
    {
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();

        header('Location: ' . ROOT_URL);
    }
}