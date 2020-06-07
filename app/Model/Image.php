<?php

namespace App\Model;

use Illuminate\Support\Facades\Storage;
use ItAces\SoftDeleteable;
use ItAces\Types\ImageType;


class Image extends \App\Entities\Image implements SoftDeleteable, ImageType
{
    
    /**
     * Methods to be included to the api response.
     *
     * @var string[]
     */
    public static $additional = ['url'];
    
    /**
     *
     * {@inheritDoc}
     * @see \ItAces\ORM\Entities\Entity::getModelValidationRules()
     */
    public function getModelValidationRules()
    {
        return [
            'name' => ['nullable', 'string', 'max:255'],
            'urlRoute' => ['nullable', 'string', 'max:255', 'unique:App\Model\Image,urlRoute,'.$this->id],
            'path' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:4000'],
            'altText' => ['nullable', 'string', 'max:4000'],
            'photoCredit' => ['nullable', 'string', 'max:255'],
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
            'image' => ['required', 'image', 'max:2000']
        ];
    }
    
    public function url()
    {
        return Storage::url($this->path);
    }

}
