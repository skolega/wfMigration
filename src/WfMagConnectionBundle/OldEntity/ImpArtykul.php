<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpArtykul
 *
 * @ORM\Table(name="IMP_ARTYKUL")
 * @ORM\Entity
 */
class ImpArtykul
{
    /**
     * @var string
     *
     * @ORM\Column(name="IMP_ID_ARTYKULU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $impIdArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TRANSAKCJI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idTransakcji;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_MK_ZRDANYCH", type="integer", nullable=true)
     */
    private $idMkZrdanych;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_ARTYKULU", type="string", length=1, nullable=true)
     */
    private $rodzajArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_ARTYKULU", type="string", length=40, nullable=true)
     */
    private $nazwaArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=20, nullable=true)
     */
    private $kodKreskowy;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEKS_KATALOGOWY", type="string", length=20, nullable=true)
     */
    private $indeksKatalogowy;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEKS_HANDLOWY", type="string", length=20, nullable=true)
     */
    private $indeksHandlowy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KATEGORII", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idKategorii;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_KATEGORII", type="string", length=50, nullable=true)
     */
    private $nazwaKategorii;

    /**
     * @var string
     *
     * @ORM\Column(name="SYMBOL_MAGAZYNU", type="string", length=10, nullable=true)
     */
    private $symbolMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE1", type="string", length=100, nullable=true)
     */
    private $pole1;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE2", type="string", length=100, nullable=true)
     */
    private $pole2;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE3", type="string", length=100, nullable=true)
     */
    private $pole3;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE4", type="string", length=100, nullable=true)
     */
    private $pole4;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE5", type="string", length=100, nullable=true)
     */
    private $pole5;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE6", type="string", length=100, nullable=true)
     */
    private $pole6;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE7", type="string", length=100, nullable=true)
     */
    private $pole7;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE8", type="string", length=100, nullable=true)
     */
    private $pole8;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE9", type="string", length=100, nullable=true)
     */
    private $pole9;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE10", type="string", length=100, nullable=true)
     */
    private $pole10;


}

