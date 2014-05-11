<?php

class IndexController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $user = new Users();
        $this->view->name = "Chalermrach";
        $this->view->items = Users::find();
    }

}