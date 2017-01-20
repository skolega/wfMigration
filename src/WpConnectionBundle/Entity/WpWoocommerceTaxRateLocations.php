<?php

namespace WpConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWoocommerceTaxRateLocations
 *
 * @ORM\Table(name="wp_woocommerce_tax_rate_locations", indexes={@ORM\Index(name="tax_rate_id", columns={"tax_rate_id"}), @ORM\Index(name="location_type", columns={"location_type"}), @ORM\Index(name="location_type_code", columns={"location_type", "location_code"})})
 * @ORM\Entity
 */
class WpWoocommerceTaxRateLocations
{
    /**
     * @var string
     *
     * @ORM\Column(name="location_code", type="string", length=255, nullable=false)
     */
    private $locationCode;

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_rate_id", type="bigint", nullable=false)
     */
    private $taxRateId;

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
     * Set locationCode
     *
     * @param string $locationCode
     *
     * @return WpWoocommerceTaxRateLocations
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
     * Set taxRateId
     *
     * @param integer $taxRateId
     *
     * @return WpWoocommerceTaxRateLocations
     */
    public function setTaxRateId($taxRateId)
    {
        $this->taxRateId = $taxRateId;

        return $this;
    }

    /**
     * Get taxRateId
     *
     * @return integer
     */
    public function getTaxRateId()
    {
        return $this->taxRateId;
    }

    /**
     * Set locationType
     *
     * @param string $locationType
     *
     * @return WpWoocommerceTaxRateLocations
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
