<?php

namespace App\Model;

use OrmBackend\SoftDeleteable;
use OrmBackend\Publishable;


class City extends \App\Entities\City implements SoftDeleteable, Publishable
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
            'urlRoute' => ['nullable', 'string', 'max:255', 'unique:App\Model\City,urlRoute,'.$this->id],
            'regionalCenter' => ['required', 'boolean'],
            'displayOrder' => ['nullable', 'integer', 'min:1'],
            'seoKeywords' => ['nullable', 'string', 'min:1', 'max:4000'],
            'seoTitle' => ['nullable', 'string', 'min:1', 'max:1000'],
            'seoDescription' => ['nullable', 'string', 'min:1', 'max:4000'],
            'event' => ['required'],
            'images' => ['nullable', 'persistentcollection:App\Model\Image,0,3']
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
            'event' => ['sometimes', 'required', 'integer', 'min:1', 'exists:App\Model\Event,id'],
            'image' => ['sometimes', 'nullable', 'persistentfile:App\Model\Image,10,image/jpeg;image/png'], // size in MB
        ];
    }
    
}
