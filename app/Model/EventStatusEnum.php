<?php
namespace App\Model;

use OrmBackend\DBAL\Types\EnumType;

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
     * @see \OrmBackend\DBAL\Types\EnumType::getTypeName()
     */
    public function getTypeName()
    {
        return 'eventstatusenum';
    }

    /**
     * 
     * {@inheritDoc}
     * @see \OrmBackend\DBAL\Types\EnumType::getAllowedValues()
     */
    public function getAllowedValues()
    {
        return ['created', 'approved', 'rejected'];
    }

}
