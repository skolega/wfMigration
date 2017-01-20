<?php

namespace WpConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WpWoocommerceAttributeTaxonomies
 *
 * @ORM\Table(name="wp_woocommerce_attribute_taxonomies", indexes={@ORM\Index(name="attribute_name", columns={"attribute_name"})})
 * @ORM\Entity
 */
class WpWoocommerceAttributeTaxonomies
{
    /**
     * @var string
     *
     * @ORM\Column(name="attribute_name", type="string", length=200, nullable=false)
     */
    private $attributeName;

    /**
     * @var string
     *
     * @ORM\Column(name="attribute_label", type="text", nullable=true)
     */
    private $attributeLabel;

    /**
     * @var string
     *
     * @ORM\Column(name="attribute_type", type="string", length=200, nullable=false)
     */
    private $attributeType;

    /**
     * @var string
     *
     * @ORM\Column(name="attribute_orderby", type="string", length=200, nullable=false)
     */
    private $attributeOrderby;

    /**
     * @var integer
     *
     * @ORM\Column(name="attribute_public", type="integer", nullable=false)
     */
    private $attributePublic = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="attribute_id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attributeId;



    /**
     * Set attributeName
     *
     * @param string $attributeName
     *
     * @return WpWoocommerceAttributeTaxonomies
     */
    public function setAttributeName($attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * Get attributeName
     *
     * @return string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * Set attributeLabel
     *
     * @param string $attributeLabel
     *
     * @return WpWoocommerceAttributeTaxonomies
     */
    public function setAttributeLabel($attributeLabel)
    {
        $this->attributeLabel = $attributeLabel;

        return $this;
    }

    /**
     * Get attributeLabel
     *
     * @return string
     */
    public function getAttributeLabel()
    {
        return $this->attributeLabel;
    }

    /**
     * Set attributeType
     *
     * @param string $attributeType
     *
     * @return WpWoocommerceAttributeTaxonomies
     */
    public function setAttributeType($attributeType)
    {
        $this->attributeType = $attributeType;

        return $this;
    }

    /**
     * Get attributeType
     *
     * @return string
     */
    public function getAttributeType()
    {
        return $this->attributeType;
    }

    /**
     * Set attributeOrderby
     *
     * @param string $attributeOrderby
     *
     * @return WpWoocommerceAttributeTaxonomies
     */
    public function setAttributeOrderby($attributeOrderby)
    {
        $this->attributeOrderby = $attributeOrderby;

        return $this;
    }

    /**
     * Get attributeOrderby
     *
     * @return string
     */
    public function getAttributeOrderby()
    {
        return $this->attributeOrderby;
    }

    /**
     * Set attributePublic
     *
     * @param integer $attributePublic
     *
     * @return WpWoocommerceAttributeTaxonomies
     */
    public function setAttributePublic($attributePublic)
    {
        $this->attributePublic = $attributePublic;

        return $this;
    }

    /**
     * Get attributePublic
     *
     * @return integer
     */
    public function getAttributePublic()
    {
        return $this->attributePublic;
    }

    /**
     * Get attributeId
     *
     * @return integer
     */
    public function getAttributeId()
    {
        return $this->attributeId;
    }
}
