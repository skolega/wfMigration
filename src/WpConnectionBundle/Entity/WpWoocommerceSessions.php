<?php

namespace WpConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWoocommerceSessions
 *
 * @ORM\Table(name="wp_woocommerce_sessions", uniqueConstraints={@ORM\UniqueConstraint(name="session_id", columns={"session_id"})})
 * @ORM\Entity
 */
class WpWoocommerceSessions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="session_id", type="bigint", nullable=false)
     */
    private $sessionId;

    /**
     * @var string
     *
     * @ORM\Column(name="session_value", type="text", nullable=false)
     */
    private $sessionValue;

    /**
     * @var integer
     *
     * @ORM\Column(name="session_expiry", type="bigint", nullable=false)
     */
    private $sessionExpiry;

    /**
     * @var string
     *
     * @ORM\Column(name="session_key", type="string", length=32)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sessionKey;



    /**
     * Set sessionId
     *
     * @param integer $sessionId
     *
     * @return WpWoocommerceSessions
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return integer
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set sessionValue
     *
     * @param string $sessionValue
     *
     * @return WpWoocommerceSessions
     */
    public function setSessionValue($sessionValue)
    {
        $this->sessionValue = $sessionValue;

        return $this;
    }

    /**
     * Get sessionValue
     *
     * @return string
     */
    public function getSessionValue()
    {
        return $this->sessionValue;
    }

    /**
     * Set sessionExpiry
     *
     * @param integer $sessionExpiry
     *
     * @return WpWoocommerceSessions
     */
    public function setSessionExpiry($sessionExpiry)
    {
        $this->sessionExpiry = $sessionExpiry;

        return $this;
    }

    /**
     * Get sessionExpiry
     *
     * @return integer
     */
    public function getSessionExpiry()
    {
        return $this->sessionExpiry;
    }

    /**
     * Get sessionKey
     *
     * @return string
     */
    public function getSessionKey()
    {
        return $this->sessionKey;
    }
}
