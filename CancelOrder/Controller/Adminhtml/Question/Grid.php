<?php

/**
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Infobit\CancelOrder\Controller\Adminhtml\Question;

class Grid extends \Infobit\CancelOrder\Controller\Adminhtml\Question {
    /**
     * JSON Grid Action
     *
     * @return void
     */

    /**
     * @return void
     */
    public function execute() {
        return $this->resultPageFactory->create();
    }

}
