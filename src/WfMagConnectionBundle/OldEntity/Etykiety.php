<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etykiety
 *
 * @ORM\Table(name="ETYKIETY", uniqueConstraints={@ORM\UniqueConstraint(name="AK_AK_LPRNNAME_ETYKIETY", columns={"LPRNNAME"})})
 * @ORM\Entity
 */
class Etykiety
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ETYKIETY", type="string", length=9, nullable=false)
     */
    private $idEtykiety;

    /**
     * @var string
     *
     * @ORM\Column(name="LPRNNAME", type="string", length=100, nullable=true)
     */
    private $lprnname;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOFIELDS", type="smallint", nullable=true)
     */
    private $nofields;

    /**
     * @var integer
     *
     * @ORM\Column(name="PAPER", type="smallint", nullable=true)
     */
    private $paper;

    /**
     * @var float
     *
     * @ORM\Column(name="SIZELENGTH", type="float", precision=24, scale=0, nullable=true)
     */
    private $sizelength;

    /**
     * @var float
     *
     * @ORM\Column(name="SIZEWIDTH", type="float", precision=24, scale=0, nullable=true)
     */
    private $sizewidth;

    /**
     * @var integer
     *
     * @ORM\Column(name="M", type="smallint", nullable=true)
     */
    private $m;

    /**
     * @var integer
     *
     * @ORM\Column(name="N", type="smallint", nullable=true)
     */
    private $n;

    /**
     * @var float
     *
     * @ORM\Column(name="MARGINX", type="float", precision=24, scale=0, nullable=true)
     */
    private $marginx;

    /**
     * @var float
     *
     * @ORM\Column(name="MARGINY", type="float", precision=24, scale=0, nullable=true)
     */
    private $marginy;

    /**
     * @var float
     *
     * @ORM\Column(name="BLACKLINEHIGHT", type="float", precision=24, scale=0, nullable=true)
     */
    private $blacklinehight;

    /**
     * @var float
     *
     * @ORM\Column(name="BLACKLINEDISTANCE", type="float", precision=24, scale=0, nullable=true)
     */
    private $blacklinedistance;

    /**
     * @var float
     *
     * @ORM\Column(name="GAPVERTICAL", type="float", precision=24, scale=0, nullable=true)
     */
    private $gapvertical;

    /**
     * @var float
     *
     * @ORM\Column(name="GAPOFFSET", type="float", precision=24, scale=0, nullable=true)
     */
    private $gapoffset;

    /**
     * @var float
     *
     * @ORM\Column(name="GAPHORIZONTAL", type="float", precision=24, scale=0, nullable=true)
     */
    private $gaphorizontal;

    /**
     * @var float
     *
     * @ORM\Column(name="OFFSET", type="float", precision=24, scale=0, nullable=true)
     */
    private $offset;

    /**
     * @var float
     *
     * @ORM\Column(name="REFERENCEX", type="float", precision=24, scale=0, nullable=true)
     */
    private $referencex;

    /**
     * @var float
     *
     * @ORM\Column(name="REFERENCEY", type="float", precision=24, scale=0, nullable=true)
     */
    private $referencey;

    /**
     * @var integer
     *
     * @ORM\Column(name="SPEED", type="smallint", nullable=true)
     */
    private $speed;

    /**
     * @var integer
     *
     * @ORM\Column(name="CODEPAGE", type="smallint", nullable=true)
     */
    private $codepage;

    /**
     * @var integer
     *
     * @ORM\Column(name="DIRECTION", type="smallint", nullable=true)
     */
    private $direction;

    /**
     * @var integer
     *
     * @ORM\Column(name="DENSITY", type="smallint", nullable=true)
     */
    private $density;

    /**
     * @var integer
     *
     * @ORM\Column(name="COPIES", type="smallint", nullable=true)
     */
    private $copies;

    /**
     * @var integer
     *
     * @ORM\Column(name="BARCODEHIGHT", type="smallint", nullable=true)
     */
    private $barcodehight;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DRUKARKI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDrukarki;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idTypu;


}

