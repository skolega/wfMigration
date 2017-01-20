<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPozycjaZamowienia
 *
 * @ORM\Table(name="T_POZYCJA_ZAMOWIENIA")
 * @ORM\Entity
 */
class TPozycjaZamowienia
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI_ZAMOWIENIA", type="string", length=9, nullable=false)
     */
    private $idPozycjiZamowienia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAMOWIENIA", type="string", length=9, nullable=true)
     */
    private $idZamowienia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_WARIANTU", type="string", length=9, nullable=true)
     */
    private $idWariantu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=true)
     */
    private $kodVat;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAMOWIONO", type="string", length=9, nullable=true)
     */
    private $zamowiono;

    /**
     * @var string
     *
     * @ORM\Column(name="ZREALIZOWANO", type="string", length=9, nullable=true)
     */
    private $zrealizowano;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAREZERWOWANO", type="string", length=9, nullable=true)
     */
    private $zarezerwowano;

    /**
     * @var string
     *
     * @ORM\Column(name="DO_REALIZACJI", type="string", length=9, nullable=true)
     */
    private $doRealizacji;

    /**
     * @var string
     *
     * @ORM\Column(name="DO_REZERWACJI", type="string", length=9, nullable=true)
     */
    private $doRezerwacji;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO", type="string", length=9, nullable=true)
     */
    private $cenaNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO", type="string", length=9, nullable=true)
     */
    private $cenaBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO_WAL", type="string", length=9, nullable=true)
     */
    private $cenaNettoWal;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO_WAL", type="string", length=9, nullable=true)
     */
    private $cenaBruttoWal;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK", type="string", length=9, nullable=true)
     */
    private $przelicznik;

    /**
     * @var string
     *
     * @ORM\Column(name="JEDNOSTKA", type="string", length=10, nullable=true)
     */
    private $jednostka;

    /**
     * @var string
     *
     * @ORM\Column(name="NARZUT", type="string", length=5, nullable=true)
     */
    private $narzut;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="DO_REZ_USER", type="string", length=9, nullable=true)
     */
    private $doRezUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="TRYBREJESTRACJI", type="smallint", nullable=true)
     */
    private $trybrejestracji = '0';

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

    /**
     * @var string
     *
     * @ORM\Column(name="ZNACZNIK_CENY", type="string", length=1, nullable=true)
     */
    private $znacznikCeny;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI_OFERTY", type="string", length=9, nullable=true)
     */
    private $idPozycjiOferty;


}

