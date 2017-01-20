<?php

namespace WpConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWoocommerceApiKeys
 *
 * @ORM\Table(name="wp_woocommerce_api_keys", indexes={@ORM\Index(name="consumer_key", columns={"consumer_key"}), @ORM\Index(name="consumer_secret", columns={"consumer_secret"})})
 * @ORM\Entity
 */
class WpWoocommerceApiKeys
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="permissions", type="string", length=10, nullable=false)
     */
    private $permissions;

    /**
     * @var string
     *
     * @ORM\Column(name="consumer_key", type="string", length=64, nullable=false)
     */
    private $consumerKey;

    /**
     * @var string
     *
     * @ORM\Column(name="consumer_secret", type="string", length=43, nullable=false)
     */
    private $consumerSecret;

    /**
     * @var string
     *
     * @ORM\Column(name="nonces", type="text", nullable=true)
     */
    private $nonces;

    /**
     * @var string
     *
     * @ORM\Column(name="truncated_key", type="string", length=7, nullable=false)
     */
    private $truncatedKey;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_access", type="datetime", nullable=true)
     */
    private $lastAccess;

    /**
     * @var integer
     *
     * @ORM\Column(name="key_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $keyId;



    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return WpWoocommerceApiKeys
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
     * Set description
     *
     * @param string $description
     *
     * @return WpWoocommerceApiKeys
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set permissions
     *
     * @param string $permissions
     *
     * @return WpWoocommerceApiKeys
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * Get permissions
     *
     * @return string
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Set consumerKey
     *
     * @param string $consumerKey
     *
     * @return WpWoocommerceApiKeys
     */
    public function setConsumerKey($consumerKey)
    {
        $this->consumerKey = $consumerKey;

        return $this;
    }

    /**
     * Get consumerKey
     *
     * @return string
     */
    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    /**
     * Set consumerSecret
     *
     * @param string $consumerSecret
     *
     * @return WpWoocommerceApiKeys
     */
    public function setConsumerSecret($consumerSecret)
    {
        $this->consumerSecret = $consumerSecret;

        return $this;
    }

    /**
     * Get consumerSecret
     *
     * @return string
     */
    public function getConsumerSecret()
    {
        return $this->consumerSecret;
    }

    /**
     * Set nonces
     *
     * @param string $nonces
     *
     * @return WpWoocommerceApiKeys
     */
    public function setNonces($nonces)
    {
        $this->nonces = $nonces;

        return $this;
    }

    /**
     * Get nonces
     *
     * @return string
     */
    public function getNonces()
    {
        return $this->nonces;
    }

    /**
     * Set truncatedKey
     *
     * @param string $truncatedKey
     *
     * @return WpWoocommerceApiKeys
     */
    public function setTruncatedKey($truncatedKey)
    {
        $this->truncatedKey = $truncatedKey;

        return $this;
    }

    /**
     * Get truncatedKey
     *
     * @return string
     */
    public function getTruncatedKey()
    {
        return $this->truncatedKey;
    }

    /**
     * Set lastAccess
     *
     * @param \DateTime $lastAccess
     *
     * @return WpWoocommerceApiKeys
     */
    public function setLastAccess($lastAccess)
    {
        $this->lastAccess = $lastAccess;

        return $this;
    }

    /**
     * Get lastAccess
     *
     * @return \DateTime
     */
    public function getLastAccess()
    {
        return $this->lastAccess;
    }

    /**
     * Get keyId
     *
     * @return integer
     */
    public function getKeyId()
    {
        return $this->keyId;
    }
}
