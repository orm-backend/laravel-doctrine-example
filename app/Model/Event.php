<?php

namespace App\Model;

use ItAces\SoftDeleteable;
use ItAces\Publishable;


class Event extends \App\Entities\Event implements SoftDeleteable, Publishable
{

    /**
     *
     * {@inheritDoc}
     * @see \ItAces\ORM\Entities\Entity::getModelValidationRules()
     */
    public function getModelValidationRules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'urlRoute' => ['nullable', 'string', 'max:255', 'unique:App\Model\Event,urlRoute,'.$this->id],
            'startDate' => ['required', 'date'],
            'endDate' => ['nullable', 'date'],
            'location' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:4000'],
            'status' => ['nullable', 'string', 'in:created,approved,rejected'],
            'seoKeywords' => ['nullable', 'string', 'min:1', 'max:4000'],
            'seoTitle' => ['nullable', 'string', 'min:1', 'max:1000'],
            'seoDescription' => ['nullable', 'string', 'min:1', 'max:4000'],
        ];
    }
    
    /**
     *
     * {@inheritDoc}
     * @see \ItAces\ORM\Entities\Entity::getRequestValidationRules()
     */
    static public function getRequestValidationRules()
    {
        return [
            'image' => ['sometimes', 'nullable', 'persistentfile:App\Model\Image,10,image/jpeg;image/png'], // size in MB
        ];
    }
    
}
