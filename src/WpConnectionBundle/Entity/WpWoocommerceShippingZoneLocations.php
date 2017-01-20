<?php

namespace WpConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWoocommerceShippingZoneLocations
 *
 * @ORM\Table(name="wp_woocommerce_shipping_zone_locations", indexes={@ORM\Index(name="location_id", columns={"location_id"}), @ORM\Index(name="location_type", columns={"location_type"}), @ORM\Index(name="location_type_code", columns={"location_type", "location_code"})})
 * @ORM\Entity
 */
class WpWoocommerceShippingZoneLocations
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
     * @ORM\Column(name="location_code", type="string", length=255, nullable=false)
     */
    private $locationCode;

    /**
     * @var string
     *
     * @ORM\Column(name="location_type", type="string", length=40, nullable=false)
     */
    private $locationType;

    /**
     * @var integer
     *
     * @ORM\Column(name="location_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $locationId;



    /**
     * Set zoneId
     *
     * @param integer $zoneId
     *
     * @return WpWoocommerceShippingZoneLocations
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
     * Set locationCode
     *
     * @param string $locationCode
     *
     * @return WpWoocommerceShippingZoneLocations
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * Get locationCode
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Set locationType
     *
     * @param string $locationType
     *
     * @return WpWoocommerceShippingZoneLocations
     */
    public function setLocationType($locationType)
    {
        $this->locationType = $locationType;

        return $this;
    }

    /**
     * Get locationType
     *
     * @return string
     */
    public function getLocationType()
    {
        return $this->locationType;
    }

    /**
     * Get locationId
     *
     * @return integer
     */
    public function getLocationId()
    {
        return $this->locationId;
    }
}
