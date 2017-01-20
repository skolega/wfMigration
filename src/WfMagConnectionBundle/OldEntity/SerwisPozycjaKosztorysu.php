<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SerwisPozycjaKosztorysu
 *
 * @ORM\Table(name="SERWIS_POZYCJA_KOSZTORYSU", indexes={@ORM\Index(name="SERWIS_POZYCJA_KOSZTORYSU_IDX1", columns={"ID_SERWIS_ZLECENIE", "ID_POZYCJI_KOSZTORYSU"}), @ORM\Index(name="SERWIS_POZYCJA_KOSZTORYSU_ID_POZ_DOK", columns={"ID_POZ_DOK_MAG"}), @ORM\Index(name="SERWIS_POZYCJA_KOSZTORYSU_ID_POZ_ZAM", columns={"ID_POZYCJI_ZAMOWIENIA"})})
 * @ORM\Entity
 */
class SerwisPozycjaKosztorysu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI_KOSZTORYSU", type="string", length=9, nullable=false)
     */
    private $idPozycjiKosztorysu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SERWIS_ZLECENIE", type="string", length=9, nullable=false)
     */
    private $idSerwisZlecenie;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=false)
     */
    private $ilosc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="JEDNOSTKA", type="string", length=10, nullable=true)
     */
    private $jednostka;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=true)
     */
    private $kodVat;

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
     * @ORM\Column(name="ID_POZ_DOK_MAG", type="string", length=9, nullable=true)
     */
    private $idPozDokMag;

    /**
     * @var integer
     *
     * @ORM\Column(name="FAKTUROWANA", type="smallint", nullable=false)
     */
    private $fakturowana = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK", type="string", length=9, nullable=false)
     */
    private $przelicznik = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="DOLICZAJ_DO_USLUGI", type="smallint", nullable=false)
     */
    private $doliczajDoUslugi = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="USLUGA_BAZOWA", type="smallint", nullable=false)
     */
    private $uslugaBazowa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis = '';

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
     * @ORM\Column(name="ID_POZYCJI_ZAMOWIENIA", type="string", length=9, nullable=true)
     */
    private $idPozycjiZamowienia;


}

