<?php

namespace Bhavishya\Userstory18\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface{

    Protected $pageFactory;

    public function __construct(PageFactory $pageFactory){
        $this->pageFactory = $pageFactory;
    }

    public function execute(){
        $page = $this->pageFactory->create();
        $page->getConfig()->getTitle()->set("Hello World By Bhavishya");
        return $page;
    }
}