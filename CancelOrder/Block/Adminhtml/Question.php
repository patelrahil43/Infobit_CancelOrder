<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Infobit\CancelOrder\Block\Adminhtml;

use Magento\Backend\Block\Widget\Grid\Container;
 
class Question extends Container
{
   /**
     * Constructor
     *
     * @return void
     */
   protected function _construct()
    {
        $this->_controller = 'adminhtml_question';
        $this->_blockGroup = 'Infobit_CancelOrder';
        $this->_headerText = __('Manage Question');
        $this->_addButtonLabel = __('Add Question');
        parent::_construct();
    }
}