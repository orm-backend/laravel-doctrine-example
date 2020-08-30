<?php
namespace App\Model;

use VVK\DBAL\Types\EnumType;

/**
 * 
 * @author Vitaliy Kovalenko vvk@kola.cloud
 *
 */
class EventStatusEnum extends EnumType
{

    /**
     * 
     * {@inheritDoc}
     * @see \VVK\DBAL\Types\EnumType::getTypeName()
     */
    public function getTypeName()
    {
        return 'eventstatusenum';
    }

    /**
     * 
     * {@inheritDoc}
     * @see \VVK\DBAL\Types\EnumType::getAllowedValues()
     */
    public function getAllowedValues()
    {
        return ['created', 'approved', 'rejected'];
    }

}
