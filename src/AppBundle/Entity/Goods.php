<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
* @ORM\Entity
* @ORM\Table(name="Goods")
*/
class Goods {

/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
protected $id;

/**
* @ORM\Column(type="text")
*/
protected $title;

/**
* @ORM\Column(type="text")
*/
protected $description;
/**
* @ORM\OneToMany(targetEntity="Prices", mappedBy="Goods")
*/
protected $Prices;
    
public function __construct()
{
    $this->prices = new ArrayCollection();
}

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Goods
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Goods
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Add Prices
     *
     * @param \Demos\BlogBundle\Entity\Prices $prices
     * @return Goods
     */
    public function addPrice(\Demos\BlogBundle\Entity\Prices $prices)
    {
        $this->Prices[] = $prices;

        return $this;
    }

    /**
     * Remove Prices
     *
     * @param \Demos\BlogBundle\Entity\Prices $prices
     */
    public function removePrice(\Demos\BlogBundle\Entity\Prices $prices)
    {
        $this->Prices->removeElement($prices);
    }

    /**
     * Get Prices
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPrices()
    {
        return $this->Prices;
    }
}
