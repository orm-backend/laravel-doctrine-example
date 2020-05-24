<?php

namespace App\Model;

use ItAces\SoftDeleteable;
use ItAces\UnderAdminControl;


class Attraction extends \App\Entities\Attraction implements SoftDeleteable, UnderAdminControl
{
    /**
     *
     * {@inheritDoc}
     * @see \ItAces\ORM\Entities\EntityBase::getModelValidationRules()
     */
    public function getModelValidationRules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:4000'],
            'displayOrder' => ['required', 'integer', 'min:1'],
            'seoKeywords' => ['nullable', 'string', 'min:1', 'max:4000'],
            'seoTitle' => ['nullable', 'string', 'min:1', 'max:1000'],
            'seoDescription' => ['nullable', 'string', 'min:1', 'max:4000'],
            'city' => ['required'],
        ];
    }
    
    /**
     *
     * {@inheritDoc}
     * @see \ItAces\ORM\Entities\EntityBase::getRequestValidationRules()
     */
    static public function getRequestValidationRules()
    {
        return [
            'city' => ['sometimes', 'required', 'integer', 'min:1', 'exists:App\Model\City,id'],
            'image' => ['sometimes', 'required', 'integer', 'min:1', 'exists:App\Model\Image,id'],
        ];
    }

}
