<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefinicjaPolaKreatora
 *
 * @ORM\Table(name="DEFINICJA_POLA_KREATORA")
 * @ORM\Entity
 */
class DefinicjaPolaKreatora
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_RAPORTU", type="string", length=9, nullable=false)
     */
    private $idRaportu;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOLEJNOSC", type="integer", nullable=false)
     */
    private $kolejnosc;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWAPOLA", type="string", length=100, nullable=true)
     */
    private $nazwapola;

    /**
     * @var string
     *
     * @ORM\Column(name="TABELA", type="string", length=50, nullable=true)
     */
    private $tabela;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWAPOLA_VIEW", type="string", length=500, nullable=true)
     */
    private $nazwapolaView;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD", type="string", length=50, nullable=true)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPDANYCH", type="string", length=20, nullable=false)
     */
    private $typdanych;

    /**
     * @var string
     *
     * @ORM\Column(name="MASKA", type="string", length=20, nullable=false)
     */
    private $maska;

    /**
     * @var integer
     *
     * @ORM\Column(name="SZEROKOSCKOLUMNY", type="integer", nullable=false)
     */
    private $szerokosckolumny;

    /**
     * @var string
     *
     * @ORM\Column(name="TOTAL", type="string", length=1, nullable=true)
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="SORTOWANIE", type="string", length=1, nullable=true)
     */
    private $sortowanie;

    /**
     * @var string
     *
     * @ORM\Column(name="FILTR", type="string", length=100, nullable=true)
     */
    private $filtr;

    /**
     * @var string
     *
     * @ORM\Column(name="OR1", type="string", length=100, nullable=true)
     */
    private $or1;

    /**
     * @var string
     *
     * @ORM\Column(name="OR2", type="string", length=100, nullable=true)
     */
    private $or2;

    /**
     * @var string
     *
     * @ORM\Column(name="PODLEGA_WARUNKOM", type="string", length=1, nullable=true)
     */
    private $podlegaWarunkom = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="WYROWNANIE", type="smallint", nullable=false)
     */
    private $wyrownanie = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="FONT_ROZMIAR", type="integer", nullable=true)
     */
    private $fontRozmiar = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FONT_NAZWA", type="string", length=50, nullable=true)
     */
    private $fontNazwa = '';


}

