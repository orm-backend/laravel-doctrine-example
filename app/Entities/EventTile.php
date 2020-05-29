<?php

namespace App\Entities;

/**
 * EventTile
 */
abstract class EventTile extends \ItAces\ORM\Entities\EntityBase
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
    protected $content;

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
     * Set name.
     *
     * @param string $name
     *
     * @return EventTile
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
     * Set content.
     *
     * @param string|null $content
     *
     * @return EventTile
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
     * Set displayOrder.
     *
     * @param int $displayOrder
     *
     * @return EventTile
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
     * @return EventTile
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
     * @return EventTile
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
     * @return EventTile
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
     * @return EventTile
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
     * @return EventTile
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
