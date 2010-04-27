<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initDoctype()
    {
        $loader = new Zend_Loader_Autoloader_Resource (array (
                    'basePath' => APPLICATION_PATH,
                    'namespace' => 'Application',
                  ));
        //$loader->addResourceType('model', 'models', 'Model');
    }
}
