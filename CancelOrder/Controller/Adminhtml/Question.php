<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CancelOrder
 *
 * @author dell
 */
namespace Infobit\CancelOrder\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Infobit\CancelOrder\Model\QuestionFactory;


abstract class Question extends \Magento\Backend\App\AbstractAction
{
    protected $_coreRegistry;
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
         \Magento\Framework\App\Response\Http\FileFactory $fileFactory,
        \Magento\Framework\Translate\InlineInterface $translateInline,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
        \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory,
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory,
        \Infobit\CancelOrder\Model\QuestionFactory $questionFactory
    ) {parent::__construct($context);
        $this->_coreRegistry = $coreRegistry;
        $this->_coreRegistry = $coreRegistry;
        $this->_fileFactory = $fileFactory;
        $this->_translateInline = $translateInline;
        $this->resultPageFactory = $resultPageFactory;
        $this->resultJsonFactory = $resultJsonFactory;
        $this->resultLayoutFactory = $resultLayoutFactory;
        $this->resultRawFactory = $resultRawFactory;
        $this->questionFactory = $questionFactory;
    }
   /**
     * @return $this
     */
       protected function _initAction()
    {
        $resultPage = $this->resultPageFactory->create();
 
        return $resultPage;
    }
 
    /**
     * Retrieve well-formed admin user data from the form input
     *
     * @param array $data
     * @return array
     */
  
    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        
        return true;
        //return $this->_authorization->isAllowed('Infobit_CancelOrder::question');
    }
     
}