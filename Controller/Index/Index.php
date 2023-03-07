<?php
namespace Magezon\HelloWorld\Controller\Index;
use Magento\Framework\View\Result\PageFactory;

/**
 * Webkul Hello Landing page Index Controller.
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
    protected $_pageFactory;

    /**
     * @param PageFactory $resultPageFactory
     */
	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory)
	{
		$this->_pageFactory = $pageFactory;
		return parent::__construct($context);
	}

	public function execute()
	{
		return $this->_pageFactory->create();
	}
}