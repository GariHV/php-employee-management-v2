<?php

class LoginController extends Controller{


    function __construct()
    {
/*         if (EXECUTION_FLOW)
            echo "<p>Login controller</p>"; */

        parent::__construct();
    }

    function render()
    {
        $this->view->render('login/index');
    }
}