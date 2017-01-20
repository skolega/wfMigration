<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PolaEtykiety
 *
 * @ORM\Table(name="POLA_ETYKIETY", indexes={@ORM\Index(name="IND_FK_ETYKIETA_POLA", columns={"ID_ETYKIETY"})})
 * @ORM\Entity
 */
class PolaEtykiety
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
     * @ORM\Column(name="DESCRYPTION", type="string", length=200, nullable=false)
     */
    private $descryption;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POLA_ETYKIETY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPolaEtykiety;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOEXPRESSION", type="smallint", nullable=true)
     */
    private $noexpression;

    /**
     * @var integer
     *
     * @ORM\Column(name="TYPE", type="smallint", nullable=true)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="X", type="float", precision=24, scale=0, nullable=true)
     */
    private $x;

    /**
     * @var float
     *
     * @ORM\Column(name="Y", type="float", precision=24, scale=0, nullable=true)
     */
    private $y;

    /**
     * @var integer
     *
     * @ORM\Column(name="BARCODETYPE", type="smallint", nullable=true)
     */
    private $barcodetype;

    /**
     * @var integer
     *
     * @ORM\Column(name="BARCODEHIGHT", type="smallint", nullable=true)
     */
    private $barcodehight;

    /**
     * @var integer
     *
     * @ORM\Column(name="BARCODEMODE", type="smallint", nullable=true)
     */
    private $barcodemode;

    /**
     * @var integer
     *
     * @ORM\Column(name="HUMAN", type="smallint", nullable=true)
     */
    private $human;

    /**
     * @var integer
     *
     * @ORM\Column(name="NARROW", type="smallint", nullable=true)
     */
    private $narrow;

    /**
     * @var integer
     *
     * @ORM\Column(name="WIDE", type="smallint", nullable=true)
     */
    private $wide;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOFONT", type="smallint", nullable=true)
     */
    private $nofont;

    /**
     * @var string
     *
     * @ORM\Column(name="FONTDESC", type="string", length=64, nullable=true)
     */
    private $fontdesc;

    /**
     * @var integer
     *
     * @ORM\Column(name="TEXTMODE", type="smallint", nullable=true)
     */
    private $textmode;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROTATE", type="smallint", nullable=true)
     */
    private $rotate;

    /**
     * @var integer
     *
     * @ORM\Column(name="XMUL", type="smallint", nullable=true)
     */
    private $xmul;

    /**
     * @var integer
     *
     * @ORM\Column(name="YMUL", type="smallint", nullable=true)
     */
    private $ymul;

    /**
     * @var integer
     *
     * @ORM\Column(name="JUSTIFICATION", type="smallint", nullable=true)
     */
    private $justification;

    /**
     * @var integer
     *
     * @ORM\Column(name="OPTIONS", type="smallint", nullable=true)
     */
    private $options;

    /**
     * @var string
     *
     * @ORM\Column(name="PICTURE", type="string", length=100, nullable=true)
     */
    private $picture;

    /**
     * @var integer
     *
     * @ORM\Column(name="FORMAT", type="smallint", nullable=true)
     */
    private $format;


}

