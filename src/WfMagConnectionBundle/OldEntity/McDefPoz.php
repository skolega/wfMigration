<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * McDefPoz
 *
 * @ORM\Table(name="MC_DEF_POZ")
 * @ORM\Entity
 */
class McDefPoz
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MC_DEF_POZ", type="string", length=9, nullable=false)
     */
    private $idMcDefPoz;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MC_DEF_NAG", type="string", length=9, nullable=true)
     */
    private $idMcDefNag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MC_DEF_POLA", type="string", length=9, nullable=true)
     */
    private $idMcDefPola;

    /**
     * @var integer
     *
     * @ORM\Column(name="LP", type="integer", nullable=true)
     */
    private $lp;

    /**
     * @var string
     *
     * @ORM\Column(name="PREFIKS", type="string", length=10, nullable=true)
     */
    private $prefiks;

    /**
     * @var string
     *
     * @ORM\Column(name="SUFIKS", type="string", length=10, nullable=true)
     */
    private $sufiks;

    /**
     * @var string
     *
     * @ORM\Column(name="SEPARATOR", type="string", length=10, nullable=true)
     */
    private $separator;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP", type="string", length=1, nullable=true)
     */
    private $typ;

    /**
     * @var integer
     *
     * @ORM\Column(name="KONIEC_LINII", type="smallint", nullable=true)
     */
    private $koniecLinii;

    /**
     * @var integer
     *
     * @ORM\Column(name="WYMAGANA_WARTOSC", type="smallint", nullable=true)
     */
    private $wymaganaWartosc;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMAT_TYP", type="string", length=1, nullable=true)
     */
    private $formatTyp;

    /**
     * @var integer
     *
     * @ORM\Column(name="FORMAT_ILOSC", type="integer", nullable=true)
     */
    private $formatIlosc;

    /**
     * @var integer
     *
     * @ORM\Column(name="FORMAT_FIXED", type="smallint", nullable=true)
     */
    private $formatFixed;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMAT_FORMAT", type="string", length=50, nullable=true)
     */
    private $formatFormat;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMAT_SEPARATOR", type="string", length=1, nullable=true)
     */
    private $formatSeparator;

    /**
     * @var integer
     *
     * @ORM\Column(name="FORMAT_WYROWNANIE", type="smallint", nullable=true)
     */
    private $formatWyrownanie;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMAT_DISPLAY_1", type="string", length=50, nullable=true)
     */
    private $formatDisplay1;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMAT_DISPLAY_2", type="string", length=255, nullable=true)
     */
    private $formatDisplay2;


}

