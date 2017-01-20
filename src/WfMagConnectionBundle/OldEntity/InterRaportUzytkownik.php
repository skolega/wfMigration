<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterRaportUzytkownik
 *
 * @ORM\Table(name="INTER_RAPORT_UZYTKOWNIK", indexes={@ORM\Index(name="INTER_RAP_UYZT_ALLID", columns={"ID_UZYTKOWNIKA", "ID_WARIANTU", "ID_RAPORTU"})})
 * @ORM\Entity
 */
class InterRaportUzytkownik
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RAPORTU", type="string", length=9, nullable=false)
     */
    private $idRaportu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_WARIANTU", type="string", length=9, nullable=true)
     */
    private $idWariantu;

    /**
     * @var integer
     *
     * @ORM\Column(name="IL_KOPII", type="integer", nullable=true)
     */
    private $ilKopii;

    /**
     * @var string
     *
     * @ORM\Column(name="DRUKARKA", type="string", length=100, nullable=true)
     */
    private $drukarka;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAPYTAJOWARIANT", type="string", length=1, nullable=true)
     */
    private $zapytajowariant;

    /**
     * @var string
     *
     * @ORM\Column(name="NIEPYTAJODRUKARKE", type="string", length=1, nullable=true)
     */
    private $niepytajodrukarke;


}

