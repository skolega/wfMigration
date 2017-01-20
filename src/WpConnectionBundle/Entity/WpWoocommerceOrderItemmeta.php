<?php

namespace WpConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWoocommerceOrderItemmeta
 *
 * @ORM\Table(name="wp_woocommerce_order_itemmeta", indexes={@ORM\Index(name="order_item_id", columns={"order_item_id"}), @ORM\Index(name="meta_key", columns={"meta_key"})})
 * @ORM\Entity
 */
class WpWoocommerceOrderItemmeta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_item_id", type="bigint", nullable=false)
     */
    private $orderItemId;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_key", type="string", length=255, nullable=true)
     */
    private $metaKey;

    /**
     * @var string
     *
     * @ORM\Column(name="meta_value", type="text", nullable=true)
     */
    private $metaValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="meta_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $metaId;



    /**
     * Set orderItemId
     *
     * @param integer $orderItemId
     *
     * @return WpWoocommerceOrderItemmeta
     */
    public function setOrderItemId($orderItemId)
    {
        $this->orderItemId = $orderItemId;

        return $this;
    }

    /**
     * Get orderItemId
     *
     * @return integer
     */
    public function getOrderItemId()
    {
        return $this->orderItemId;
    }

    /**
     * Set metaKey
     *
     * @param string $metaKey
     *
     * @return WpWoocommerceOrderItemmeta
     */
    public function setMetaKey($metaKey)
    {
        $this->metaKey = $metaKey;

        return $this;
    }

    /**
     * Get metaKey
     *
     * @return string
     */
    public function getMetaKey()
    {
        return $this->metaKey;
    }

    /**
     * Set metaValue
     *
     * @param string $metaValue
     *
     * @return WpWoocommerceOrderItemmeta
     */
    public function setMetaValue($metaValue)
    {
        $this->metaValue = $metaValue;

        return $this;
    }

    /**
     * Get metaValue
     *
     * @return string
     */
    public function getMetaValue()
    {
        return $this->metaValue;
    }

    /**
     * Get metaId
     *
     * @return integer
     */
    public function getMetaId()
    {
        return $this->metaId;
    }
}
