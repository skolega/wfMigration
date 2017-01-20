<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParametryRaportu
 *
 * @ORM\Table(name="PARAMETRY_RAPORTU")
 * @ORM\Entity
 */
class ParametryRaportu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_RAPORTU", type="string", length=9, nullable=false)
     */
    private $idRaportu;

    /**
     * @var string
     *
     * @ORM\Column(name="ZRODLO", type="string", length=20, nullable=true)
     */
    private $zrodlo;

    /**
     * @var string
     *
     * @ORM\Column(name="USUWAJPUSTENAGLOWKI", type="string", length=1, nullable=true)
     */
    private $usuwajpustenaglowki;

    /**
     * @var string
     *
     * @ORM\Column(name="WYBORKONTR1", type="string", length=1, nullable=true)
     */
    private $wyborkontr1;

    /**
     * @var string
     *
     * @ORM\Column(name="WYBORKONTR2", type="string", length=1, nullable=true)
     */
    private $wyborkontr2;

    /**
     * @var string
     *
     * @ORM\Column(name="WYBORKONTR3", type="string", length=1, nullable=true)
     */
    private $wyborkontr3;

    /**
     * @var string
     *
     * @ORM\Column(name="FILTR0", type="string", length=1, nullable=true)
     */
    private $filtr0;

    /**
     * @var string
     *
     * @ORM\Column(name="FILTR1", type="string", length=1, nullable=true)
     */
    private $filtr1;

    /**
     * @var string
     *
     * @ORM\Column(name="FILTR3", type="string", length=1, nullable=true)
     */
    private $filtr3;

    /**
     * @var string
     *
     * @ORM\Column(name="FILTR4", type="string", length=1, nullable=true)
     */
    private $filtr4;

    /**
     * @var string
     *
     * @ORM\Column(name="FILTR5", type="string", length=1, nullable=true)
     */
    private $filtr5;

    /**
     * @var string
     *
     * @ORM\Column(name="FILTR6", type="string", length=1, nullable=true)
     */
    private $filtr6;

    /**
     * @var string
     *
     * @ORM\Column(name="FILTR7", type="string", length=1, nullable=true)
     */
    private $filtr7;

    /**
     * @var string
     *
     * @ORM\Column(name="FILTR8", type="string", length=1, nullable=true)
     */
    private $filtr8;

    /**
     * @var string
     *
     * @ORM\Column(name="FILTR9", type="string", length=1, nullable=true)
     */
    private $filtr9;

    /**
     * @var string
     *
     * @ORM\Column(name="GRUPUJ1", type="string", length=1, nullable=true)
     */
    private $grupuj1;

    /**
     * @var string
     *
     * @ORM\Column(name="GRUPUJ2", type="string", length=1, nullable=true)
     */
    private $grupuj2;

    /**
     * @var string
     *
     * @ORM\Column(name="GRUPUJ3", type="string", length=1, nullable=true)
     */
    private $grupuj3;

    /**
     * @var string
     *
     * @ORM\Column(name="POMINPOZYCJE3", type="string", length=1, nullable=true)
     */
    private $pominpozycje3;

    /**
     * @var string
     *
     * @ORM\Column(name="LP1", type="string", length=1, nullable=true)
     */
    private $lp1;

    /**
     * @var string
     *
     * @ORM\Column(name="LP2", type="string", length=1, nullable=true)
     */
    private $lp2;

    /**
     * @var string
     *
     * @ORM\Column(name="LP3", type="string", length=1, nullable=true)
     */
    private $lp3;

    /**
     * @var string
     *
     * @ORM\Column(name="LP4", type="string", length=1, nullable=true)
     */
    private $lp4;

    /**
     * @var string
     *
     * @ORM\Column(name="ZERUJLP2", type="string", length=1, nullable=true)
     */
    private $zerujlp2;

    /**
     * @var string
     *
     * @ORM\Column(name="ZERUJLP3", type="string", length=1, nullable=true)
     */
    private $zerujlp3;

    /**
     * @var string
     *
     * @ORM\Column(name="ZERUJLP4", type="string", length=1, nullable=true)
     */
    private $zerujlp4;

    /**
     * @var integer
     *
     * @ORM\Column(name="SZEROKOSCLP", type="integer", nullable=true)
     */
    private $szerokosclp;

    /**
     * @var integer
     *
     * @ORM\Column(name="POKAZUJTOP", type="integer", nullable=true)
     */
    private $pokazujtop;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_RAPORTU", type="string", length=1, nullable=true)
     */
    private $rodzajRaportu;

    /**
     * @var string
     *
     * @ORM\Column(name="ROZMIAR_NAGLOWKA", type="string", length=1, nullable=true)
     */
    private $rozmiarNaglowka;

    /**
     * @var string
     *
     * @ORM\Column(name="NAGLOWEK_RAPORTU", type="string", length=200, nullable=true)
     */
    private $naglowekRaportu;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_NAGLOWKA_RAPORTU", type="string", length=1000, nullable=true)
     */
    private $opisNaglowkaRaportu;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_ZAKONCZENIA_RAPORTU", type="string", length=1000, nullable=true)
     */
    private $opisZakonczeniaRaportu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_PLIKU", type="string", length=250, nullable=true)
     */
    private $nazwaPliku;

    /**
     * @var string
     *
     * @ORM\Column(name="EKSPORTUJ_NAGLOWKI", type="string", length=1, nullable=true)
     */
    private $eksportujNaglowki;

    /**
     * @var string
     *
     * @ORM\Column(name="STYL_RAPORTU", type="string", length=1, nullable=true)
     */
    private $stylRaportu;

    /**
     * @var string
     *
     * @ORM\Column(name="PAGEGR1", type="string", length=1, nullable=true)
     */
    private $pagegr1;

    /**
     * @var string
     *
     * @ORM\Column(name="PAGEGR2", type="string", length=1, nullable=true)
     */
    private $pagegr2;

    /**
     * @var string
     *
     * @ORM\Column(name="PAGEGR3", type="string", length=1, nullable=true)
     */
    private $pagegr3;

    /**
     * @var string
     *
     * @ORM\Column(name="FLAGA1", type="string", length=1, nullable=true)
     */
    private $flaga1;

    /**
     * @var string
     *
     * @ORM\Column(name="ID1", type="string", length=9, nullable=true)
     */
    private $id1;

    /**
     * @var string
     *
     * @ORM\Column(name="ID2", type="string", length=9, nullable=true)
     */
    private $id2;

    /**
     * @var string
     *
     * @ORM\Column(name="ID3", type="string", length=9, nullable=true)
     */
    private $id3;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAPYTAJID1", type="string", length=1, nullable=true)
     */
    private $zapytajid1;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAPYTAJID2", type="string", length=1, nullable=true)
     */
    private $zapytajid2;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAPYTAJID3", type="string", length=1, nullable=true)
     */
    private $zapytajid3;

    /**
     * @var string
     *
     * @ORM\Column(name="DRUKUJNAGLOWEK", type="string", length=1, nullable=true)
     */
    private $drukujnaglowek = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="OTWORZPROGRAM", type="smallint", nullable=true)
     */
    private $otworzprogram = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FILTR_RECZNY", type="string", length=500, nullable=true)
     */
    private $filtrReczny = '';


}

