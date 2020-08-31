<?php

namespace App\Entities;

/**
 * Listing
 */
abstract class Listing extends \OrmBackend\ORM\Entities\BaseEntity
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
     * @var int
     */
    protected $price;

    /**
     * @var string
     */
    protected $roomType;

    /**
     * @var \App\Entities\City
     */
    protected $city;

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
     * @return Listing
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
     * @return Listing
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
     * Set price.
     *
     * @param int $price
     *
     * @return Listing
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set roomType.
     *
     * @param string $roomType
     *
     * @return Listing
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;

        return $this;
    }

    /**
     * Get roomType.
     *
     * @return string
     */
    public function getRoomType()
    {
        return $this->roomType;
    }
    /**
     * Set city.
     *
     * @param \App\Entities\City|null $city
     *
     * @return Listing
     */
    public function setCity(\App\Entities\City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return \App\Entities\City|null
     */
    public function getCity()
    {
        return $this->city;
    }

    public function setEvent(\App\Entities\Event $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event.
     *
     * @return \App\Entities\Event|null
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
     * @return Listing
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
