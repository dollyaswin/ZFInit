<?php
require_once 'Zend/Application.php';
require_once 'Zend/Test/PHPUnit/ControllerTestCase.php';

abstract class AqilLabs_Test_Abstract extends Zend_Test_PHPUnit_ControllerTestCase
{
    protected $_application;

    public function setUp()
    {
        /* Setup Routine */
        $this->_application = new Zend_Application(APPLICATION_ENV, APPLICATION_CONFIG);
        $this->bootstrap = array($this, 'appBootstrap');
        parent::setUp();
    }

    public function appBootstrap()
    {
        $this->_application->bootstrap();
    }
}
