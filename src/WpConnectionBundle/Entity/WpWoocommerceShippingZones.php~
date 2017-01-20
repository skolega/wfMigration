<?php

namespace WpConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWoocommerceShippingZones
 *
 * @ORM\Table(name="wp_woocommerce_shipping_zones")
 * @ORM\Entity
 */
class WpWoocommerceShippingZones
{
    /**
     * @var string
     *
     * @ORM\Column(name="zone_name", type="string", length=255, nullable=false)
     */
    private $zoneName;

    /**
     * @var integer
     *
     * @ORM\Column(name="zone_order", type="bigint", nullable=false)
     */
    private $zoneOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="zone_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zoneId;



    /**
     * Set zoneName
     *
     * @param string $zoneName
     *
     * @return WpWoocommerceShippingZones
     */
    public function setZoneName($zoneName)
    {
        $this->zoneName = $zoneName;

        return $this;
    }

    /**
     * Get zoneName
     *
     * @return string
     */
    public function getZoneName()
    {
        return $this->zoneName;
    }

    /**
     * Set zoneOrder
     *
     * @param integer $zoneOrder
     *
     * @return WpWoocommerceShippingZones
     */
    public function setZoneOrder($zoneOrder)
    {
        $this->zoneOrder = $zoneOrder;

        return $this;
    }

    /**
     * Get zoneOrder
     *
     * @return integer
     */
    public function getZoneOrder()
    {
        return $this->zoneOrder;
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
}
