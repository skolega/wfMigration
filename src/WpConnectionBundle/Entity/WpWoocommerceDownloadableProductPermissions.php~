<?php

namespace WpConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWoocommerceDownloadableProductPermissions
 *
 * @ORM\Table(name="wp_woocommerce_downloadable_product_permissions", indexes={@ORM\Index(name="download_order_key_product", columns={"product_id", "order_id", "order_key", "download_id"}), @ORM\Index(name="download_order_product", columns={"download_id", "order_id", "product_id"})})
 * @ORM\Entity
 */
class WpWoocommerceDownloadableProductPermissions
{
    /**
     * @var string
     *
     * @ORM\Column(name="download_id", type="string", length=32, nullable=false)
     */
    private $downloadId;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="bigint", nullable=false)
     */
    private $productId;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_id", type="bigint", nullable=false)
     */
    private $orderId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="order_key", type="string", length=200, nullable=false)
     */
    private $orderKey;

    /**
     * @var string
     *
     * @ORM\Column(name="user_email", type="string", length=200, nullable=false)
     */
    private $userEmail;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_id", type="bigint", nullable=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="downloads_remaining", type="string", length=9, nullable=true)
     */
    private $downloadsRemaining;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="access_granted", type="datetime", nullable=false)
     */
    private $accessGranted = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="access_expires", type="datetime", nullable=true)
     */
    private $accessExpires;

    /**
     * @var integer
     *
     * @ORM\Column(name="download_count", type="bigint", nullable=false)
     */
    private $downloadCount = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="permission_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $permissionId;



    /**
     * Set downloadId
     *
     * @param string $downloadId
     *
     * @return WpWoocommerceDownloadableProductPermissions
     */
    public function setDownloadId($downloadId)
    {
        $this->downloadId = $downloadId;

        return $this;
    }

    /**
     * Get downloadId
     *
     * @return string
     */
    public function getDownloadId()
    {
        return $this->downloadId;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return WpWoocommerceDownloadableProductPermissions
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return integer
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return WpWoocommerceDownloadableProductPermissions
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
     * Set orderKey
     *
     * @param string $orderKey
     *
     * @return WpWoocommerceDownloadableProductPermissions
     */
    public function setOrderKey($orderKey)
    {
        $this->orderKey = $orderKey;

        return $this;
    }

    /**
     * Get orderKey
     *
     * @return string
     */
    public function getOrderKey()
    {
        return $this->orderKey;
    }

    /**
     * Set userEmail
     *
     * @param string $userEmail
     *
     * @return WpWoocommerceDownloadableProductPermissions
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return WpWoocommerceDownloadableProductPermissions
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
     * Set downloadsRemaining
     *
     * @param string $downloadsRemaining
     *
     * @return WpWoocommerceDownloadableProductPermissions
     */
    public function setDownloadsRemaining($downloadsRemaining)
    {
        $this->downloadsRemaining = $downloadsRemaining;

        return $this;
    }

    /**
     * Get downloadsRemaining
     *
     * @return string
     */
    public function getDownloadsRemaining()
    {
        return $this->downloadsRemaining;
    }

    /**
     * Set accessGranted
     *
     * @param \DateTime $accessGranted
     *
     * @return WpWoocommerceDownloadableProductPermissions
     */
    public function setAccessGranted($accessGranted)
    {
        $this->accessGranted = $accessGranted;

        return $this;
    }

    /**
     * Get accessGranted
     *
     * @return \DateTime
     */
    public function getAccessGranted()
    {
        return $this->accessGranted;
    }

    /**
     * Set accessExpires
     *
     * @param \DateTime $accessExpires
     *
     * @return WpWoocommerceDownloadableProductPermissions
     */
    public function setAccessExpires($accessExpires)
    {
        $this->accessExpires = $accessExpires;

        return $this;
    }

    /**
     * Get accessExpires
     *
     * @return \DateTime
     */
    public function getAccessExpires()
    {
        return $this->accessExpires;
    }

    /**
     * Set downloadCount
     *
     * @param integer $downloadCount
     *
     * @return WpWoocommerceDownloadableProductPermissions
     */
    public function setDownloadCount($downloadCount)
    {
        $this->downloadCount = $downloadCount;

        return $this;
    }

    /**
     * Get downloadCount
     *
     * @return integer
     */
    public function getDownloadCount()
    {
        return $this->downloadCount;
    }

    /**
     * Get permissionId
     *
     * @return integer
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }
}
