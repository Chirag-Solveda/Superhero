<?php
namespace Coding\Test\Api\Data;

interface ViewInterface
{
    const ID = 'id';
    const NAME ='name';
    const PRODUCTION_COMPANY ='production_company';

    public function getId();





    public function getProductionCompany();




    public function getName();


    public function setId($id);

    public function setName($name);

    public function setProductionCompany($production_company);
}
