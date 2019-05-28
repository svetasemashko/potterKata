<?php
namespace Tests\Controllers;

use app\Controllers\BaseController;
use PHPUnit\Framework\TestCase;

class BaseControllerTest extends TestCase
{

    public function testIndex()
    {
        $baseController = new BaseController();

        ob_start();
        $baseController->index();
        $result = ob_get_contents();
        ob_end_clean();

        $this->assertEquals('<p>MVC Model</p>', $result);
    }

}