<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KontaSynt
 *
 * @ORM\Table(name="KONTA_SYNT")
 * @ORM\Entity
 */
class KontaSynt
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NR_KONTA_SYN", type="smallint", nullable=false)
     */
    private $nrKontaSyn;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_LATA_OBROT", type="string", length=10, nullable=false)
     */
    private $idLataObrot;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=10, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_KONTA", type="string", length=1, nullable=true)
     */
    private $typKonta;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_ROZRACH", type="smallint", nullable=false)
     */
    private $czyRozrach;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_WIELOLETNIE", type="smallint", nullable=false)
     */
    private $czyWieloletnie;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_WALUTOWE", type="smallint", nullable=false)
     */
    private $czyWalutowe;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_ZEROWE_SALDO", type="smallint", nullable=false)
     */
    private $czyZeroweSaldo;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_DWUSALDOWE", type="smallint", nullable=false)
     */
    private $czyDwusaldowe;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_MPK", type="smallint", nullable=true)
     */
    private $czyMpk;

    /**
     * @var string
     *
     * @ORM\Column(name="ZNACZNIK", type="string", length=20, nullable=true)
     */
    private $znacznik;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_BLOKADA", type="smallint", nullable=false)
     */
    private $czyBlokada;


}

