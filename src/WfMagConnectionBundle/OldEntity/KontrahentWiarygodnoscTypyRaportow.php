<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KontrahentWiarygodnoscTypyRaportow
 *
 * @ORM\Table(name="KONTRAHENT_WIARYGODNOSC_TYPY_RAPORTOW", indexes={@ORM\Index(name="KONTRAHENT_WIARYGODNOSC_TYPY_RAPORTOW_SYM_KRAJU", columns={"SYM_KRAJU"}), @ORM\Index(name="KONTRAHENT_WIARYGODNOSC_TYPY_RAPORTOW_KOD_RAPORTU", columns={"KOD_RAPORTU"})})
 * @ORM\Entity
 */
class KontrahentWiarygodnoscTypyRaportow
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_KRAJU", type="string", length=5, nullable=false)
     */
    private $symKraju;

    /**
     * @var string
     *
     * @ORM\Column(name="RAPORT", type="string", length=50, nullable=false)
     */
    private $raport;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOD_RAPORTU", type="integer", nullable=false)
     */
    private $kodRaportu;

    /**
     * @var integer
     *
     * @ORM\Column(name="TEASER", type="smallint", nullable=true)
     */
    private $teaser;

    /**
     * @var integer
     *
     * @ORM\Column(name="RAPORT_NATYCHMIASTOWY", type="smallint", nullable=true)
     */
    private $raportNatychmiastowy;


}

