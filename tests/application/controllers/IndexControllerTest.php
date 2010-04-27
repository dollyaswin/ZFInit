<?php
require_once 'AqilLabs/Test/Abstract.php';

class IndexControllerTest extends AqilLabs_Test_Abstract
{
    public function testGetIndex()
    {
        $this->dispatch('/default/index');
        $this->assertModule('default');
        $this->assertController('index');
        $this->assertAction('index');
        $this->assertQueryContentContains('h1', 'ZF Training');
    }

    public function tearDown()
    {
        /* Tear Down Routine */
    }
}
