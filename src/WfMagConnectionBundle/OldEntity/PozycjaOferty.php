<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozycjaOferty
 *
 * @ORM\Table(name="POZYCJA_OFERTY", indexes={@ORM\Index(name="POZYCJA_OFERTY_IDFIR_IDMAG", columns={"ID_FIRMY", "ID_MAGAZYNU", "ID_OFERTY"}), @ORM\Index(name="POZYCJA_OFERTY_ID_ZAPISU_PIERWSZEJ", columns={"ID_ZAPISU_PIERWSZEJ"}), @ORM\Index(name="POZYCJA_OFERTY_IDOFERTY", columns={"ID_OFERTY"}), @ORM\Index(name="POZYCJA_OFERTY_IDART", columns={"ID_ARTYKULU"}), @ORM\Index(name="POZYCJA_OFERTY_IDOFERTY_TYPU_ID_ART", columns={"ID_OFERTY", "ID_TYPU", "ID_ARTYKULU"}), @ORM\Index(name="POZYCJA_OFERTY_ILOSC_PRZENIESIONO_ID_ART", columns={"ID_ARTYKULU", "ILOSC", "PRZENIESIONO"}), @ORM\Index(name="POZYCJA_OFERTY_ILOSC_ZREALIZOWANO_ID_ART", columns={"ID_ARTYKULU", "ILOSC", "ZREALIZOWANO"})})
 * @ORM\Entity
 */
class PozycjaOferty
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI_OFERTY", type="string", length=9, nullable=false)
     */
    private $idPozycjiOferty;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAPISU_PIERWSZEJ", type="string", length=9, nullable=false)
     */
    private $idZapisuPierwszej = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OFERTY", type="string", length=9, nullable=true)
     */
    private $idOferty;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=true)
     */
    private $idMagazynu;

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
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=false)
     */
    private $ilosc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZENIESIONO", type="string", length=9, nullable=false)
     */
    private $przeniesiono = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZREALIZOWANO", type="string", length=9, nullable=false)
     */
    private $zrealizowano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO", type="string", length=9, nullable=false)
     */
    private $cenaNetto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO", type="string", length=9, nullable=false)
     */
    private $cenaBrutto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO_WAL", type="string", length=9, nullable=true)
     */
    private $cenaNettoWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO_WAL", type="string", length=9, nullable=true)
     */
    private $cenaBruttoWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK", type="string", length=9, nullable=false)
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
     * @ORM\Column(name="RABAT", type="string", length=5, nullable=false)
     */
    private $rabat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=true)
     */
    private $idTypu;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="TRYBREJESTRACJI", type="smallint", nullable=true)
     */
    private $trybrejestracji = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZNACZNIK_CENY", type="string", length=1, nullable=true)
     */
    private $znacznikCeny = 'k';

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

