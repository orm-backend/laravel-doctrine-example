<?php

namespace DoctrineProxies\__CG__\App\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Image extends \App\Model\Image implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * {@inheritDoc}
     * @param string $name
     */
    public function __get($name)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);

        return parent::__get($name);
    }

    /**
     * {@inheritDoc}
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

        return parent::__set($name, $value);
    }



    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'name', 'urlRoute', 'path', 'description', 'altText', 'photoCredit', 'id', 'createdAt', 'updatedAt', 'deletedAt', 'createdBy', 'deletedBy', 'updatedBy'];
        }

        return ['__isInitialized__', 'name', 'urlRoute', 'path', 'description', 'altText', 'photoCredit', 'id', 'createdAt', 'updatedAt', 'deletedAt', 'createdBy', 'deletedBy', 'updatedBy'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Image $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getModelValidationRules()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModelValidationRules', []);

        return parent::getModelValidationRules();
    }

    /**
     * {@inheritDoc}
     */
    public function url()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'url', []);

        return parent::url();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrlRoute($urlRoute = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrlRoute', [$urlRoute]);

        return parent::setUrlRoute($urlRoute);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrlRoute()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrlRoute', []);

        return parent::getUrlRoute();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', [$path]);

        return parent::setPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', []);

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setAltText($altText = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAltText', [$altText]);

        return parent::setAltText($altText);
    }

    /**
     * {@inheritDoc}
     */
    public function getAltText()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAltText', []);

        return parent::getAltText();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhotoCredit($photoCredit = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhotoCredit', [$photoCredit]);

        return parent::setPhotoCredit($photoCredit);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhotoCredit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhotoCredit', []);

        return parent::getPhotoCredit();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrimary()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrimary', []);

        return parent::getPrimary();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy(\ItAces\ORM\Entities\EntityBase $createdBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedBy(\ItAces\ORM\Entities\EntityBase $deletedBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedBy', [$deletedBy]);

        return parent::setDeletedBy($deletedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedBy', []);

        return parent::getDeletedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedBy(\ItAces\ORM\Entities\EntityBase $updatedBy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedBy', [$updatedBy]);

        return parent::setUpdatedBy($updatedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedBy', []);

        return parent::getUpdatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedAt($deletedAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedAt', [$deletedAt]);

        return parent::setDeletedAt($deletedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeletedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedAt', []);

        return parent::getDeletedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function onBeforeAdd(\Doctrine\Common\Persistence\Event\LifecycleEventArgs $event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onBeforeAdd', [$event]);

        return parent::onBeforeAdd($event);
    }

    /**
     * {@inheritDoc}
     */
    public function onAfterAdd(\Doctrine\Common\Persistence\Event\LifecycleEventArgs $event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onAfterAdd', [$event]);

        return parent::onAfterAdd($event);
    }

    /**
     * {@inheritDoc}
     */
    public function onBeforeUpdate(\Doctrine\Common\Persistence\Event\LifecycleEventArgs $event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onBeforeUpdate', [$event]);

        return parent::onBeforeUpdate($event);
    }

    /**
     * {@inheritDoc}
     */
    public function onAfterUpdate(\Doctrine\Common\Persistence\Event\LifecycleEventArgs $event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onAfterUpdate', [$event]);

        return parent::onAfterUpdate($event);
    }

    /**
     * {@inheritDoc}
     */
    public function onBeforeDelete(\Doctrine\Common\Persistence\Event\LifecycleEventArgs $event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onBeforeDelete', [$event]);

        return parent::onBeforeDelete($event);
    }

    /**
     * {@inheritDoc}
     */
    public function onAfterDelete(\Doctrine\Common\Persistence\Event\LifecycleEventArgs $event)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'onAfterDelete', [$event]);

        return parent::onAfterDelete($event);
    }

}
