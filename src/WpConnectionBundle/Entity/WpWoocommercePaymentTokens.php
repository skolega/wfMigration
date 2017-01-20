<?php

namespace WpConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWoocommercePaymentTokens
 *
 * @ORM\Table(name="wp_woocommerce_payment_tokens", indexes={@ORM\Index(name="user_id", columns={"user_id"})})
 * @ORM\Entity
 */
class WpWoocommercePaymentTokens
{
    /**
     * @var string
     *
     * @ORM\Column(name="gateway_id", type="string", length=255, nullable=false)
     */
    private $gatewayId;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="text", length=65535, nullable=false)
     */
    private $token;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_default", type="boolean", nullable=false)
     */
    private $isDefault = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="token_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tokenId;



    /**
     * Set gatewayId
     *
     * @param string $gatewayId
     *
     * @return WpWoocommercePaymentTokens
     */
    public function setGatewayId($gatewayId)
    {
        $this->gatewayId = $gatewayId;

        return $this;
    }

    /**
     * Get gatewayId
     *
     * @return string
     */
    public function getGatewayId()
    {
        return $this->gatewayId;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return WpWoocommercePaymentTokens
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return WpWoocommercePaymentTokens
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return WpWoocommercePaymentTokens
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set isDefault
     *
     * @param boolean $isDefault
     *
     * @return WpWoocommercePaymentTokens
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Get isDefault
     *
     * @return boolean
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Get tokenId
     *
     * @return integer
     */
    public function getTokenId()
    {
        return $this->tokenId;
    }
}
