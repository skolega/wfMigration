<?php

namespace WpConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWoocommerceOrderItems
 *
 * @ORM\Table(name="wp_woocommerce_order_items", indexes={@ORM\Index(name="order_id", columns={"order_id"})})
 * @ORM\Entity
 */
class WpWoocommerceOrderItems
{
    /**
     * @var string
     *
     * @ORM\Column(name="order_item_name", type="text", nullable=false)
     */
    private $orderItemName;

    /**
     * @var string
     *
     * @ORM\Column(name="order_item_type", type="string", length=200, nullable=false)
     */
    private $orderItemType = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="bigint", nullable=false)
     */
    private $orderId;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_item_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderItemId;



    /**
     * Set orderItemName
     *
     * @param string $orderItemName
     *
     * @return WpWoocommerceOrderItems
     */
    public function setOrderItemName($orderItemName)
    {
        $this->orderItemName = $orderItemName;

        return $this;
    }

    /**
     * Get orderItemName
     *
     * @return string
     */
    public function getOrderItemName()
    {
        return $this->orderItemName;
    }

    /**
     * Set orderItemType
     *
     * @param string $orderItemType
     *
     * @return WpWoocommerceOrderItems
     */
    public function setOrderItemType($orderItemType)
    {
        $this->orderItemType = $orderItemType;

        return $this;
    }

    /**
     * Get orderItemType
     *
     * @return string
     */
    public function getOrderItemType()
    {
        return $this->orderItemType;
    }

    /**
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return WpWoocommerceOrderItems
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer
     */
    public function getOrderId()
    {
        return $this->orderId;
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
}
