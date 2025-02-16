<?php

namespace App\Model;

use OrmBackend\SoftDeleteable;
use OrmBackend\Publishable;


class Listing extends \App\Entities\Listing implements SoftDeleteable, Publishable
{
    /**
     *
     * {@inheritDoc}
     * @see \OrmBackend\ORM\Entities\Entity::getModelValidationRules()
     */
    public function getModelValidationRules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer', 'min:1'],
            'roomType' => ['required', 'string', 'max:255'],
        ];
    }
    
    /**
     *
     * {@inheritDoc}
     * @see \OrmBackend\ORM\Entities\Entity::getRequestValidationRules()
     */
    static public function getRequestValidationRules()
    {
        return [
            'event' => ['sometimes', 'nullable', 'integer', 'min:1', 'exists:App\Model\Event,id'],
            'image' => ['sometimes', 'nullable', 'integer', 'min:1', 'exists:App\Model\Image,id'],
            'city' => ['sometimes', 'nullable', 'integer', 'min:1', 'exists:App\Model\City,id'],
        ];
    }
    
}
