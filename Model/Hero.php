<?php

namespace Coding\Test\Model;
use \Magento\Framework\DataObject\IdentityInterface;
use \Coding\Test\Api\Data\ViewInterface;

class Hero extends \Magento\Framework\Model\AbstractModel implements ViewInterface, IdentityInterface
{
    const CACHE_TAG = 'coding_test_test'; 


    public function _construct()
    {
        $this->_init('Coding\Test\Model\ResourceModel\Hero');
    }

    public function getId()
    {
    return $this->getData(self::ID);
}

/**
 * Get Content
 *
 * @return string|null
 */
public function getProductionCompany()
{
    return $this->getData(self::PRODUCTION_COMPANY);
}

/**
 * Get Created At
 *
 * @return string|null
 */
public function getName()
{
    return $this->getData(self::NAME);
}

/**
 * Get ID
 *
 * @return int|null
 */

/**
 * Return identities
 * @return string[]
 */
public function getIdentities()
{
    return [self::CACHE_TAG . '_' . $this->getId()];
}

/**
 * Set Title
 *
 * @param string $title
 * @return $this
 */
public function setId($id)
{
    return $this->setData(self::ID, $id);
}

/**
 * Set Content
 *
 * @param string $content
 * @return $this
 */
public function setName($name)
{
    return $this->setData(self::NAME, $name);
}

/**
 * Set Created At
 *
 * @param string $createdAt
 * @return $this
 */
public function setProductionCompany($production_company)
{
    return $this->setData(self::PRODUCTION_COMPANY, $production_company);
}

/**
 * Set ID
 *
 * @param int $id
 * @return $this
 */

}