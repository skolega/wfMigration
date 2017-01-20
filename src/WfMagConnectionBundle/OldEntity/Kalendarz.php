<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kalendarz
 *
 * @ORM\Table(name="KALENDARZ", uniqueConstraints={@ORM\UniqueConstraint(name="AK_KALENDARZ_NAZWA_KALENDAR", columns={"ID_FIRMY", "NAZWA"})}, indexes={@ORM\Index(name="IDX_219865C179B757F", columns={"ID_FIRMY"})})
 * @ORM\Entity
 */
class Kalendarz
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KALENDARZA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idKalendarza;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis;

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

