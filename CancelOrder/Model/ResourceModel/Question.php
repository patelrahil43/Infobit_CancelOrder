<?php

namespace Infobit\CancelOrder\Model\ResourceModel;

class Question extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('infobit_cancelorder_question', 'entity_id');
    }
}