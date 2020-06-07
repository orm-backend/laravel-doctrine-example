<?php

namespace App\Entities;

/**
 * Event
 */
abstract class Event extends \ItAces\ORM\Entities\BaseEntity
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
     * @var string
     */
    protected $urlRoute;

    /**
     * @var \Carbon\Carbon
     */
    protected $startDate;

    /**
     * @var \Carbon\Carbon|null
     */
    protected $endDate;

    /**
     * @var string|null
     */
    protected $location;

    /**
     * @var string|null
     */
    protected $content;

    /**
     * @var string
     */
    protected $status;

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
     * @var \App\Entities\Image
     */
    protected $image;

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Event
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
     * @param string $urlRoute
     *
     * @return Event
     */
    public function setUrlRoute($urlRoute)
    {
        $this->urlRoute = $urlRoute;

        return $this;
    }

    /**
     * Get urlRoute.
     *
     * @return string
     */
    public function getUrlRoute()
    {
        return $this->urlRoute;
    }

    /**
     * Set startDate.
     *
     * @param \Carbon\Carbon $startDate
     *
     * @return Event
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate.
     *
     * @return \Carbon\Carbon
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate.
     *
     * @param \Carbon\Carbon|null $endDate
     *
     * @return Event
     */
    public function setEndDate($endDate = null)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate.
     *
     * @return \Carbon\Carbon|null
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set location.
     *
     * @param string|null $location
     *
     * @return Event
     */
    public function setLocation($location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location.
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set content.
     *
     * @param string|null $content
     *
     * @return Event
     */
    public function setContent($content = null)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content.
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set status.
     *
     * @param string $status
     *
     * @return Event
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set seoKeywords.
     *
     * @param string|null $seoKeywords
     *
     * @return Event
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
     * @return Event
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
     * @return Event
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
     * Set image.
     *
     * @param \App\Entities\Image|null $image
     *
     * @return Event
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

}
