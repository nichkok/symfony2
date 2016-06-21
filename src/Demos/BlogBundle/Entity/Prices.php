<?php
namespace Demos\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="Prices")
*/
class Prices {

/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
protected $id;
    
/**
* @ORM\Column(type="integer", length=255)
*/
protected $price_type_id;

    
/**
* @ORM\Column(type="string", length=255)
*/
protected $goods_id;


/**
* @ORM\Column(type="float", length=255)
*/
protected $price;   

/** 
* @ORM\ManyToOne(targetEntity="Goods", inversedBy="Prices") 
* @ORM\JoinColumn(name="goods_id", referencedColumnName="id") 
*/ 
protected $goods;


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
     * Set price_type_id
     *
     * @param integer $priceTypeId
     * @return Prices
     */
    public function setPriceTypeId($priceTypeId)
    {
        $this->price_type_id = $priceTypeId;

        return $this;
    }

    /**
     * Get price_type_id
     *
     * @return integer 
     */
    public function getPriceTypeId()
    {
        return $this->price_type_id;
    }

    /**
     * Set goods_id
     *
     * @param string $goodsId
     * @return Prices
     */
    public function setGoodsId($goodsId)
    {
        $this->goods_id = $goodsId;

        return $this;
    }

    /**
     * Get goods_id
     *
     * @return string 
     */
    public function getGoodsId()
    {
        return $this->goods_id;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Prices
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set goods
     *
     * @param \Demos\BlogBundle\Entity\Goods $goods
     * @return Prices
     */
    public function setGoods(\Demos\BlogBundle\Entity\Goods $goods = null)
    {
        $this->goods = $goods;

        return $this;
    }

    /**
     * Get goods
     *
     * @return \Demos\BlogBundle\Entity\Goods 
     */
    public function getGoods()
    {
        return $this->goods;
    }
}
