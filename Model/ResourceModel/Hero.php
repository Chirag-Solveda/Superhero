<?php

namespace Coding\Test\Model\ResourceModel;

class Hero extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {       
        $this->_init('jc_superhero', 'id');
    }
}
   