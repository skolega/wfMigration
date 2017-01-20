<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TPozycjaMag
 *
 * @ORM\Table(name="T_POZYCJA_MAG", indexes={@ORM\Index(name="T_POZDOKMAG_IDDOKM", columns={"ID_POZ_DOK_MAG", "ID_DOK_MAGAZYNOWEGO"}), @ORM\Index(name="T_POZDOKMAG_IDDOKH", columns={"ID_POZ_DOK_MAG", "ID_DOK_HANDLOWEGO"})})
 * @ORM\Entity
 */
class TPozycjaMag
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK_MAG", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozDokMag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_MAGAZYNOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokMagazynowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_HANDLOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_ORYGINALNEJ", type="string", length=9, nullable=true)
     */
    private $idPozOryginalnej;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_KORYGOWANEJ", type="string", length=9, nullable=true)
     */
    private $idPozKorygowanej;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=true)
     */
    private $kodVat;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=true)
     */
    private $ilosc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WYDANO", type="string", length=9, nullable=true)
     */
    private $wydano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZAREZERWOWANO", type="string", length=9, nullable=true)
     */
    private $zarezerwowano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO", type="decimal", precision=14, scale=4, nullable=true)
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
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_WAL", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $przelicznikWal;

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
     * @ORM\Column(name="JEDNOSTKA", type="string", length=10, nullable=true)
     */
    private $jednostka;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK", type="string", length=9, nullable=true)
     */
    private $przelicznik;

    /**
     * @var string
     *
     * @ORM\Column(name="RABAT", type="string", length=5, nullable=true)
     */
    private $rabat;

    /**
     * @var string
     *
     * @ORM\Column(name="RABAT2", type="string", length=5, nullable=true)
     */
    private $rabat2;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=4, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_PRZYCHODU_OK", type="string", length=1, nullable=true)
     */
    private $pozPrzychoduOk;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_POZYCJI", type="string", length=1, nullable=true)
     */
    private $rodzajPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_ARTYKULU", type="string", length=1, nullable=true)
     */
    private $rodzajArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="OPAKOWANIA_WYDANO", type="string", length=9, nullable=true)
     */
    private $opakowaniaWydano;

    /**
     * @var string
     *
     * @ORM\Column(name="OPAKOWANIA_PRZYJETO", type="string", length=9, nullable=true)
     */
    private $opakowaniaPrzyjeto;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_ZAM", type="string", length=9, nullable=true)
     */
    private $idPozZam;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="FLAGA_STANU", type="smallint", nullable=true)
     */
    private $flagaStanu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NR_PACZKI", type="string", length=20, nullable=true)
     */
    private $nrPaczki;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_PRZYCH", type="string", length=9, nullable=true)
     */
    private $idPozPrzych;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_WYB_DOSTAWY", type="string", length=1, nullable=true)
     */
    private $pozWybDostawy;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_SERII", type="string", length=50, nullable=true)
     */
    private $nrSerii;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_WAZNOSCI", type="string", length=4, nullable=true)
     */
    private $dataWaznosci;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT_UE", type="string", length=3, nullable=true)
     */
    private $kodVatUe;

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
     * @ORM\Column(name="CN_SPRZ_PZ", type="string", length=9, nullable=true)
     */
    private $cnSprzPz = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CB_SPRZ_PZ", type="string", length=9, nullable=true)
     */
    private $cbSprzPz = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZNACZNIK_CENY", type="string", length=1, nullable=true)
     */
    private $znacznikCeny = 'k';

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_CENY", type="string", length=50, nullable=true)
     */
    private $opisCeny;

    /**
     * @var string
     *
     * @ORM\Column(name="TRYBREJESTRACJI", type="string", length=1, nullable=true)
     */
    private $trybrejestracji = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AKCYZA", type="string", length=1, nullable=true)
     */
    private $akcyza = '0';


}

