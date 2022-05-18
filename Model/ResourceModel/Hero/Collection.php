<?php


namespace Coding\Test\Model\ResourceModel\Hero;


use Coding\Test\Model\Hero;
use Coding\Test\Model\ResourceModel\Hero as HeroResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Hero::class, HeroResourceModel::class);
    }
}