<?php

namespace MyApp\Controllers;

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 */
class IndexController extends BaseController
{
    public function indexAction()
    {
        $this->getResponse()->setBody('Hello World!');
    }
}
