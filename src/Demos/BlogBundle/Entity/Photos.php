<?php
namespace Demos\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="Photos")
*/
class Photos {

/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
protected $id;

/**
* @ORM\Column(type="integer")
*/
protected $goods_id;

/**
* @ORM\Column(type="text")
*/
protected $basename;

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
     * Set goods_id
     *
     * @param integer $goodsId
     * @return Photos
     */
    public function setGoodsId($goodsId)
    {
        $this->goods_id = $goodsId;

        return $this;
    }

    /**
     * Get goods_id
     *
     * @return integer 
     */
    public function getGoodsId()
    {
        return $this->goods_id;
    }

    /**
     * Set basename
     *
     * @param string $basename
     * @return Photos
     */
    public function setBasename($basename)
    {
        $this->basename = $basename;

        return $this;
    }

    /**
     * Get basename
     *
     * @return string 
     */
    public function getBasename()
    {
        return $this->basename;
    }
}
