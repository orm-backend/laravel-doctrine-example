<?php

namespace App\Entities;

/**
 * City
 */
abstract class City extends \ItAces\ORM\Entities\EntityBase
{
    
    /**
     * @var int
     */
    protected $id;
    
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $urlRoute;
    
    /**
     * @var boolean
     */
    protected $regionalCenter = false;

    /**
     * @var int
     */
    protected $displayOrder = 100;

    /**
     * @var string|null
     */
    protected $seoKeywords;

    /**
     * @var string|null
     */
    protected $seoTitle;

    /**
     * @var string|null
     */
    protected $seoDescription;

    /**
     * @var \App\Entities\Event
     */
    protected $event;

    /**
     * @var \App\Entities\Image
     */
    protected $image;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $images;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set name.
     *
     * @param string $name
     *
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set urlRoute.
     *
     * @param string|null $urlRoute
     *
     * @return City
     */
    public function setUrlRoute($urlRoute = null)
    {
        $this->urlRoute = $urlRoute;

        return $this;
    }

    /**
     * Get urlRoute.
     *
     * @return string|null
     */
    public function getUrlRoute()
    {
        return $this->urlRoute;
    }

    /**
     * Set displayOrder.
     *
     * @param int $displayOrder
     *
     * @return City
     */
    public function setDisplayOrder($displayOrder)
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    /**
     * Get displayOrder.
     *
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->displayOrder;
    }

    /**
     * Set seoKeywords.
     *
     * @param string|null $seoKeywords
     *
     * @return City
     */
    public function setSeoKeywords($seoKeywords = null)
    {
        $this->seoKeywords = $seoKeywords;

        return $this;
    }

    /**
     * Get seoKeywords.
     *
     * @return string|null
     */
    public function getSeoKeywords()
    {
        return $this->seoKeywords;
    }

    /**
     * Set seoTitle.
     *
     * @param string|null $seoTitle
     *
     * @return City
     */
    public function setSeoTitle($seoTitle = null)
    {
        $this->seoTitle = $seoTitle;

        return $this;
    }

    /**
     * Get seoTitle.
     *
     * @return string|null
     */
    public function getSeoTitle()
    {
        return $this->seoTitle;
    }

    /**
     * Set seoDescription.
     *
     * @param string|null $seoDescription
     *
     * @return City
     */
    public function setSeoDescription($seoDescription = null)
    {
        $this->seoDescription = $seoDescription;

        return $this;
    }

    /**
     * Get seoDescription.
     *
     * @return string|null
     */
    public function getSeoDescription()
    {
        return $this->seoDescription;
    }

    /**
     * Set event.
     *
     * @param \App\Entities\Event $event
     *
     * @return City
     */
    public function setEvent(\App\Entities\Event $event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event.
     *
     * @return \App\Entities\Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set image.
     *
     * @param \App\Entities\Image|null $image
     *
     * @return City
     */
    public function setImage(\App\Entities\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return \App\Entities\Image|null
     */
    public function getImage()
    {
        return $this->image;
    }
    /**
     * @return boolean
     */
    public function isRegionalCenter()
    {
        return $this->regionalCenter;
    }

    /**
     * @param boolean $regionalCenter
     */
    public function setRegionalCenter($regionalCenter)
    {
        $this->regionalCenter = $regionalCenter;
    }
    
    /**
     * Add role.
     *
     * @param \App\Entities\Image $image
     *
     * @return City
     */
    public function addImage(Image $image)
    {
        $this->images->add( $image );
        
        return $this;
    }
    
    /**
     * Remove role.
     *
     * @param \App\Entities\Image $image
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeImage(Image $image)
    {
        return $this->images->removeElement($image);
    }
    
    /**
     * Get roles.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }
}
