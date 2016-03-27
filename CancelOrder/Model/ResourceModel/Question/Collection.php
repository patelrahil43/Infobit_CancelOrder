<?php

namespace Infobit\CancelOrder\Model\ResourceModel\Question;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection {

    protected function _construct() {
        $this->_init(
                'Infobit\CancelOrder\Model\Question', 'Infobit\CancelOrder\ResourceModel\Question'
        );
    }

}
