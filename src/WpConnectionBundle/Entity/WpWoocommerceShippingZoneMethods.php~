<?php

namespace WpConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWoocommerceShippingZoneMethods
 *
 * @ORM\Table(name="wp_woocommerce_shipping_zone_methods")
 * @ORM\Entity
 */
class WpWoocommerceShippingZoneMethods
{
    /**
     * @var integer
     *
     * @ORM\Column(name="zone_id", type="bigint", nullable=false)
     */
    private $zoneId;

    /**
     * @var string
     *
     * @ORM\Column(name="method_id", type="string", length=255, nullable=false)
     */
    private $methodId;

    /**
     * @var integer
     *
     * @ORM\Column(name="method_order", type="bigint", nullable=false)
     */
    private $methodOrder;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_enabled", type="boolean", nullable=false)
     */
    private $isEnabled = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="instance_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $instanceId;



    /**
     * Set zoneId
     *
     * @param integer $zoneId
     *
     * @return WpWoocommerceShippingZoneMethods
     */
    public function setZoneId($zoneId)
    {
        $this->zoneId = $zoneId;

        return $this;
    }

    /**
     * Get zoneId
     *
     * @return integer
     */
    public function getZoneId()
    {
        return $this->zoneId;
    }

    /**
     * Set methodId
     *
     * @param string $methodId
     *
     * @return WpWoocommerceShippingZoneMethods
     */
    public function setMethodId($methodId)
    {
        $this->methodId = $methodId;

        return $this;
    }

    /**
     * Get methodId
     *
     * @return string
     */
    public function getMethodId()
    {
        return $this->methodId;
    }

    /**
     * Set methodOrder
     *
     * @param integer $methodOrder
     *
     * @return WpWoocommerceShippingZoneMethods
     */
    public function setMethodOrder($methodOrder)
    {
        $this->methodOrder = $methodOrder;

        return $this;
    }

    /**
     * Get methodOrder
     *
     * @return integer
     */
    public function getMethodOrder()
    {
        return $this->methodOrder;
    }

    /**
     * Set isEnabled
     *
     * @param boolean $isEnabled
     *
     * @return WpWoocommerceShippingZoneMethods
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * Get isEnabled
     *
     * @return boolean
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * Get instanceId
     *
     * @return integer
     */
    public function getInstanceId()
    {
        return $this->instanceId;
    }
}
