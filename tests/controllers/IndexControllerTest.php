<?php

namespace MyApp\tests\controllers;

use Koine\Test\Mvc\ControllerTestCase;

/**
 * @author Marcelo Jacobus <marcelo.jacobus@gmail.com>
 */
class IndexControllerTest extends ControllerTestCase
{
    protected $controllerClass = 'MyApp\Controllers\IndexController';

    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function indexRespondsWithSucccess()
    {
        // response status code should eq 200
        $this->assertResponseOk();
    }

    /**
     * @test
     */
    public function indexRespondsSetsTheCorrectContentToTheResponse()
    {
        $this->markTestIncomplete();
        // response status code should eq 200
        $this->assertResponseContains('Hello World!');
    }
}
