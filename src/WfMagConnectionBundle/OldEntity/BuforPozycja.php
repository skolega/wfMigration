<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuforPozycja
 *
 * @ORM\Table(name="BUFOR_POZYCJA", indexes={@ORM\Index(name="POZYCJA_BUFORA", columns={"ID_BUFORA"}), @ORM\Index(name="POZYCJA_BUFORA_ART", columns={"ID_ARTYKULU"})})
 * @ORM\Entity
 */
class BuforPozycja
{
    /**
     * @var string
     *
     * @ORM\Column(name="SYM_MAGAZYNU", type="string", length=10, nullable=true)
     */
    private $symMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_BUFORA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idBufora;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_ARTYKULU", type="string", length=40, nullable=true)
     */
    private $nazwaArtykulu;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLU", type="integer", nullable=true)
     */
    private $plu;

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
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=true)
     */
    private $ilosc;

    /**
     * @var string
     *
     * @ORM\Column(name="DO_ROZLICZENIA", type="string", length=9, nullable=true)
     */
    private $doRozliczenia;

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
     * @ORM\Column(name="WARTOSC_BRUTTO", type="string", length=9, nullable=true)
     */
    private $wartoscBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_NETTO", type="string", length=9, nullable=true)
     */
    private $wartoscNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="RABAT", type="string", length=5, nullable=true)
     */
    private $rabat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RABAT2", type="string", length=5, nullable=true)
     */
    private $rabat2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK", type="string", length=9, nullable=true)
     */
    private $przelicznik = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="JEDNOSTKA", type="string", length=10, nullable=true)
     */
    private $jednostka;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_ARTYKULU", type="string", length=20, nullable=true)
     */
    private $rodzajArtykulu = 'Towar';

    /**
     * @var integer
     *
     * @ORM\Column(name="POZ_OK", type="smallint", nullable=true)
     */
    private $pozOk = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="NR_SERII", type="string", length=50, nullable=true)
     */
    private $nrSerii = '';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_WAZNOSCI", type="string", length=4, nullable=true)
     */
    private $dataWaznosci;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis = '';


}

