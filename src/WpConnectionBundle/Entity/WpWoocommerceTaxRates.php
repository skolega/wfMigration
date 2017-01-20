<?php

namespace WpConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWoocommerceTaxRates
 *
 * @ORM\Table(name="wp_woocommerce_tax_rates", indexes={@ORM\Index(name="tax_rate_country", columns={"tax_rate_country"}), @ORM\Index(name="tax_rate_state", columns={"tax_rate_state"}), @ORM\Index(name="tax_rate_class", columns={"tax_rate_class"}), @ORM\Index(name="tax_rate_priority", columns={"tax_rate_priority"})})
 * @ORM\Entity
 */
class WpWoocommerceTaxRates
{
    /**
     * @var string
     *
     * @ORM\Column(name="tax_rate_country", type="string", length=200, nullable=false)
     */
    private $taxRateCountry = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tax_rate_state", type="string", length=200, nullable=false)
     */
    private $taxRateState = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tax_rate", type="string", length=200, nullable=false)
     */
    private $taxRate = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tax_rate_name", type="string", length=200, nullable=false)
     */
    private $taxRateName = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_rate_priority", type="bigint", nullable=false)
     */
    private $taxRatePriority;

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_rate_compound", type="integer", nullable=false)
     */
    private $taxRateCompound = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_rate_shipping", type="integer", nullable=false)
     */
    private $taxRateShipping = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_rate_order", type="bigint", nullable=false)
     */
    private $taxRateOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="tax_rate_class", type="string", length=200, nullable=false)
     */
    private $taxRateClass = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="tax_rate_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $taxRateId;



    /**
     * Set taxRateCountry
     *
     * @param string $taxRateCountry
     *
     * @return WpWoocommerceTaxRates
     */
    public function setTaxRateCountry($taxRateCountry)
    {
        $this->taxRateCountry = $taxRateCountry;

        return $this;
    }

    /**
     * Get taxRateCountry
     *
     * @return string
     */
    public function getTaxRateCountry()
    {
        return $this->taxRateCountry;
    }

    /**
     * Set taxRateState
     *
     * @param string $taxRateState
     *
     * @return WpWoocommerceTaxRates
     */
    public function setTaxRateState($taxRateState)
    {
        $this->taxRateState = $taxRateState;

        return $this;
    }

    /**
     * Get taxRateState
     *
     * @return string
     */
    public function getTaxRateState()
    {
        return $this->taxRateState;
    }

    /**
     * Set taxRate
     *
     * @param string $taxRate
     *
     * @return WpWoocommerceTaxRates
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * Get taxRate
     *
     * @return string
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * Set taxRateName
     *
     * @param string $taxRateName
     *
     * @return WpWoocommerceTaxRates
     */
    public function setTaxRateName($taxRateName)
    {
        $this->taxRateName = $taxRateName;

        return $this;
    }

    /**
     * Get taxRateName
     *
     * @return string
     */
    public function getTaxRateName()
    {
        return $this->taxRateName;
    }

    /**
     * Set taxRatePriority
     *
     * @param integer $taxRatePriority
     *
     * @return WpWoocommerceTaxRates
     */
    public function setTaxRatePriority($taxRatePriority)
    {
        $this->taxRatePriority = $taxRatePriority;

        return $this;
    }

    /**
     * Get taxRatePriority
     *
     * @return integer
     */
    public function getTaxRatePriority()
    {
        return $this->taxRatePriority;
    }

    /**
     * Set taxRateCompound
     *
     * @param integer $taxRateCompound
     *
     * @return WpWoocommerceTaxRates
     */
    public function setTaxRateCompound($taxRateCompound)
    {
        $this->taxRateCompound = $taxRateCompound;

        return $this;
    }

    /**
     * Get taxRateCompound
     *
     * @return integer
     */
    public function getTaxRateCompound()
    {
        return $this->taxRateCompound;
    }

    /**
     * Set taxRateShipping
     *
     * @param integer $taxRateShipping
     *
     * @return WpWoocommerceTaxRates
     */
    public function setTaxRateShipping($taxRateShipping)
    {
        $this->taxRateShipping = $taxRateShipping;

        return $this;
    }

    /**
     * Get taxRateShipping
     *
     * @return integer
     */
    public function getTaxRateShipping()
    {
        return $this->taxRateShipping;
    }

    /**
     * Set taxRateOrder
     *
     * @param integer $taxRateOrder
     *
     * @return WpWoocommerceTaxRates
     */
    public function setTaxRateOrder($taxRateOrder)
    {
        $this->taxRateOrder = $taxRateOrder;

        return $this;
    }

    /**
     * Get taxRateOrder
     *
     * @return integer
     */
    public function getTaxRateOrder()
    {
        return $this->taxRateOrder;
    }

    /**
     * Set taxRateClass
     *
     * @param string $taxRateClass
     *
     * @return WpWoocommerceTaxRates
     */
    public function setTaxRateClass($taxRateClass)
    {
        $this->taxRateClass = $taxRateClass;

        return $this;
    }

    /**
     * Get taxRateClass
     *
     * @return string
     */
    public function getTaxRateClass()
    {
        return $this->taxRateClass;
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
}
