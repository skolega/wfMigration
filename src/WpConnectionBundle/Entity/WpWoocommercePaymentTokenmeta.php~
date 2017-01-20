<?php

namespace WpConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWoocommercePaymentTokenmeta
 *
 * @ORM\Table(name="wp_woocommerce_payment_tokenmeta", indexes={@ORM\Index(name="payment_token_id", columns={"payment_token_id"}), @ORM\Index(name="meta_key", columns={"meta_key"})})
 * @ORM\Entity
 */
class WpWoocommercePaymentTokenmeta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="payment_token_id", type="bigint", nullable=false)
     */
    private $paymentTokenId;

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
     * Set paymentTokenId
     *
     * @param integer $paymentTokenId
     *
     * @return WpWoocommercePaymentTokenmeta
     */
    public function setPaymentTokenId($paymentTokenId)
    {
        $this->paymentTokenId = $paymentTokenId;

        return $this;
    }

    /**
     * Get paymentTokenId
     *
     * @return integer
     */
    public function getPaymentTokenId()
    {
        return $this->paymentTokenId;
    }

    /**
     * Set metaKey
     *
     * @param string $metaKey
     *
     * @return WpWoocommercePaymentTokenmeta
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
     * @return WpWoocommercePaymentTokenmeta
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
