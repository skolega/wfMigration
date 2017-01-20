<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypDokumentuOferty
 *
 * @ORM\Table(name="TYP_DOKUMENTU_OFERTY", uniqueConstraints={@ORM\UniqueConstraint(name="AK_TYP_DOKUMENTU_OFERTY_IDFIRMY_SYGNATURA", columns={"ID_FIRMY", "SYGNATURA"})})
 * @ORM\Entity
 */
class TypDokumentuOferty
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=false)
     */
    private $idTypu;

    /**
     * @var string
     *
     * @ORM\Column(name="SYGNATURA", type="string", length=3, nullable=false)
     */
    private $sygnatura;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ", type="string", length=20, nullable=false)
     */
    private $rodzaj;

    /**
     * @var string
     *
     * @ORM\Column(name="CZY_SYSTEMOWY", type="string", length=1, nullable=true)
     */
    private $czySystemowy;

    /**
     * @var string
     *
     * @ORM\Column(name="WYCENA", type="string", length=10, nullable=true)
     */
    private $wycena;

    /**
     * @var string
     *
     * @ORM\Column(name="SUMOWANIE", type="string", length=15, nullable=true)
     */
    private $sumowanie;

    /**
     * @var string
     *
     * @ORM\Column(name="KOLEJNOSC", type="string", length=9, nullable=false)
     */
    private $kolejnosc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="WM", type="smallint", nullable=false)
     */
    private $wm = '0';


}

