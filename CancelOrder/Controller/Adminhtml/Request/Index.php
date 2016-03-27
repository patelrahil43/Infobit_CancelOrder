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

namespace Infobit\CancelOrder\Controller\Adminhtml\Request;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Infobit\CancelOrder\Controller\Adminhtml\Request {

//    public function executeInternal() {
//        $resultPage = $this->_initAction();
//        $resultPage->getConfig()->getTitle()->prepend(__('Questions'));
//        return $resultPage;
//    }

    /**
     * View Templates list
     *
     * @return void
     */
    public function execute()
    {
        
        
        if ($this->getRequest()->getQuery('ajax')) {
            $this->_forward('grid');
            return;
        }
        $this->_view->loadLayout();
        $this->_setActiveMenu('Infobit_CancelOrder::cancelorder');
        $this->_addBreadcrumb(__('Questions'), __('Manage Questions'));
//        $this->_addContent(
//            $this->_view->getLayout()->createBlock('Infobit\CancelOrder\Block\Adminhtml\Question\Template', 'template')
//        );
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Manage Questions'));
        $this->_view->renderLayout();
    }
    
}
