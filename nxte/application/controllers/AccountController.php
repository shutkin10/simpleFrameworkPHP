<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{


    public function loginAction()
    {
        if (!empty($_POST)) {
            $this->view->message('Success', 'Text');
        }
        $this->view->render('Sign-in');
    }

    public function registerAction()
    {

        $this->view->render('Register');
    }
}