<?php
namespace Duong98\Helloworld\Block;

use \Magento\Framework\View\Element\Template;

class HelloWorld extends Template
{

    public function getHelloWorld()
    {
        return 'Hello World';
    }
}