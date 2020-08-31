<?php

namespace App\Entities;

/**
 * Image
 */
abstract class Image extends \OrmBackend\ORM\Entities\BaseEntity
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
     * @var string
     */
    protected $path;

    /**
     * @var string|null
     */
    protected $description;

    /**
     * @var string|null
     */
    protected $altText;

    /**
     * @var string|null
     */
    protected $photoCredit;

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Image
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
     * @return Image
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
     * Set path.
     *
     * @param string $path
     *
     * @return Image
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path.
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set description.
     *
     * @param string|null $description
     *
     * @return Image
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
     * Set altText.
     *
     * @param string|null $altText
     *
     * @return Image
     */
    public function setAltText($altText = null)
    {
        $this->altText = $altText;

        return $this;
    }

    /**
     * Get altText.
     *
     * @return string|null
     */
    public function getAltText()
    {
        return $this->altText;
    }

    /**
     * Set photoCredit.
     *
     * @param string|null $photoCredit
     *
     * @return Image
     */
    public function setPhotoCredit($photoCredit = null)
    {
        $this->photoCredit = $photoCredit;

        return $this;
    }

    /**
     * Get photoCredit.
     *
     * @return string|null
     */
    public function getPhotoCredit()
    {
        return $this->photoCredit;
    }

}
