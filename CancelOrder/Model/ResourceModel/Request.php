<?php

namespace Infobit\CancelOrder\Model\ResourceModel;

class Request extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('infobit_cancelorder_request', 'request_id');
    }
}