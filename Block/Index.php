<?php
namespace Magezon\Helloworld\Block;

use \Magento\Framework\View\Element\Template;

class Index extends Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    protected function _addBreadcrumbs($name,$label, $title, $url)
    {
        if ($breadcrumbs = $this->getLayout()->getBlock('breadcrumbs')) {
            $breadcrumbs->addCrumb(
                $name,
                [
                    'label' => __($label),
                    'title' => __($title),
                    'link' => $url
                ]
            );
        }
    }

    public function _prepareLayout()
    {
        $this->_addBreadcrumbs('Home','Home','Go to Home Page',$this->_storeManager->getStore()->getBaseUrl());
        $this->_addBreadcrumbs('HelloWorld','HelloWorld','Go to HelloWorld',$this->_storeManager->getStore()->getCurrentUrl());

        $this->pageConfig->getTitle()->set(__('BIG TITLE')); // set page name
        return parent::_prepareLayout();
    }
}