<?php
namespace App\Model;

class EntityPermission extends \OrmBackend\ACL\Entities\EntityPermission
{
    /**
     *
     * {@inheritDoc}
     * @see \OrmBackend\ORM\Entities\Entity::getModelValidationRules()
     */
    public function getModelValidationRules()
    {
        return [
            'permission' => ['required', 'integer', 'min:0'],
            'model' => ['required', 'string', 'max:255'],
            'role' => ['required', 'unique:App\Model\EntityPermission,role,'.$this->getId().',id,model,'.$this->getModel()]
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
            'role' => ['sometimes', 'required', 'integer', 'min:1', 'exists:App\Model\Role,id'],
        ];
    }

}
