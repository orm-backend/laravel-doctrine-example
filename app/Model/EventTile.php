<?php

namespace App\Model;

use VVK\SoftDeleteable;
use VVK\Publishable;


class EventTile extends \App\Entities\EventTile implements SoftDeleteable, Publishable
{
    /**
     *
     * {@inheritDoc}
     * @see \VVK\ORM\Entities\Entity::getModelValidationRules()
     */
    public function getModelValidationRules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'content' => ['nullable', 'string', 'max:4000'],
            'displayOrder' => ['required', 'integer', 'min:1'],
            'seoKeywords' => ['nullable', 'string', 'min:1', 'max:4000'],
            'seoTitle' => ['nullable', 'string', 'min:1', 'max:1000'],
            'seoDescription' => ['nullable', 'string', 'min:1', 'max:4000'],
            'event' => ['required'],
        ];
    }
    
    /**
     *
     * {@inheritDoc}
     * @see \VVK\ORM\Entities\Entity::getRequestValidationRules()
     */
    static public function getRequestValidationRules()
    {
        return [
            'event' => ['sometimes', 'nullable', 'integer', 'min:1', 'exists:App\Model\Event,id'],
            'image' => ['sometimes', 'nullable', 'persistentfile:App\Model\Image,10,image/jpeg;image/png'], // size in MB
        ];
    }
    
}
