<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Request
 *
 * @author dell
 */

namespace Infobit\CancelOrder\Controller\Adminhtml\Question;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Infobit\CancelOrder\Controller\Adminhtml\Question {

    public function execute() {
        if ($this->getRequest()->getQuery('ajax')) {
            $this->_forward('grid');
            return;
        }

        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $this->_setActiveMenu('Infobit_CancelOrder::cancelorder');
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Manage Questions'));
        
        return $resultPage;
    }

}
