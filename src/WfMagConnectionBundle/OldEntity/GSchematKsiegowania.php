<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GSchematKsiegowania
 *
 * @ORM\Table(name="G_SCHEMAT_KSIEGOWANIA", uniqueConstraints={@ORM\UniqueConstraint(name="AK_G_SCHKSI_NAZWA_G_SCHEMA", columns={"ID_FIRMY", "NAZWA"})}, indexes={@ORM\Index(name="IDX_62012F2B179B757F", columns={"ID_FIRMY"})})
 * @ORM\Entity
 */
class GSchematKsiegowania
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SCHEMATU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSchematu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var \WfMagConnectionBundle\Entity\Firma
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\Firma")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_FIRMY", referencedColumnName="ID_FIRMY")
     * })
     */
    private $idFirmy;


}

