<?php
namespace App\Model;

use ItAces\DBAL\Types\EnumType;

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
     * @see \ItAces\DBAL\Types\EnumType::getTypeName()
     */
    public function getTypeName()
    {
        return 'eventstatusenum';
    }

    /**
     * 
     * {@inheritDoc}
     * @see \ItAces\DBAL\Types\EnumType::getAllowedValues()
     */
    public function getAllowedValues()
    {
        return ['created', 'approved', 'rejected'];
    }

}
