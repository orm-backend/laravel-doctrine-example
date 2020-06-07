<?php

namespace App\Entities;

/**
 * Attraction
 */
abstract class Attraction extends \ItAces\ORM\Entities\BaseEntity
{
    
    /**
     * @var int
     */
    protected $id;
    
    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $urlRoute;

    /**
     * @var string|null
     */
    protected $description;

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
     * @var \App\Entities\City
     */
    protected $city;

    /**
     * @var \App\Entities\Image
     */
    protected $image;

    /**
     * Set name.
     *
     * @param string|null $name
     *
     * @return Attraction
     */
    public function setName($name = null)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string|null
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
     * @return Attraction
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
     * Set description.
     *
     * @param string|null $description
     *
     * @return Attraction
     */
    public function setDescription($description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set displayOrder.
     *
     * @param int $displayOrder
     *
     * @return Attraction
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
     * @return Attraction
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
     * @return Attraction
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
     * @return Attraction
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
     * Set city.
     *
     * @param \App\Entities\City $city
     *
     * @return Attraction
     */
    public function setCity(\App\Entities\City $city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return \App\Entities\City
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set image.
     *
     * @param \App\Entities\Image $image
     *
     * @return Attraction
     */
    public function setImage(\App\Entities\Image $image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return \App\Entities\Image
     */
    public function getImage()
    {
        return $this->image;
    }

}
