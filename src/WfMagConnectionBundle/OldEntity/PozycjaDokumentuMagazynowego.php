<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozycjaDokumentuMagazynowego
 *
 * @ORM\Table(name="POZYCJA_DOKUMENTU_MAGAZYNOWEGO", uniqueConstraints={@ORM\UniqueConstraint(name="GUID_POZ_DOK_MAG_INDEX", columns={"GUID_POZ_DOK_MAG"})}, indexes={@ORM\Index(name="POZDOKMAG_IDPOZKOR", columns={"ID_POZ_KORYGOWANEJ", "TRYBREJESTRACJI"}), @ORM\Index(name="IDX_PDM_ID_DOK_KORYGUJACEGO_ZBIORCZO", columns={"ID_DOK_KORYGUJACEGO_ZBIORCZO"}), @ORM\Index(name="POZDOKMAG_KOD_VAT", columns={"KOD_VAT"}), @ORM\Index(name="POZDOKMAG_IDDOK_IDPOZ", columns={"ID_DOK_MAGAZYNOWEGO", "ID_POZ_DOK_MAG"}), @ORM\Index(name="POZDOKMAG_IDART_POZOK_DATA", columns={"ID_ARTYKULU", "POZ_PRZYCHODU_OK", "DATA", "ID_DOK_MAGAZYNOWEGO", "ID_POZ_DOK_MAG", "ILOSC", "WYDANO", "ZAREZERWOWANO"}), @ORM\Index(name="POZDOKMAG_IDDOKH_IDPOZ", columns={"ID_DOK_HANDLOWEGO", "ID_POZ_DOK_MAG"}), @ORM\Index(name="POZDOKMAG_IDDM_IDDH_RA", columns={"ID_DOK_HANDLOWEGO", "ID_DOK_MAGAZYNOWEGO", "RODZAJ_ARTYKULU"}), @ORM\Index(name="POZDOKMAG_IDPOZZAM", columns={"ID_DOK_HANDLOWEGO", "ID_POZ_ZAM"}), @ORM\Index(name="POZDOKMAG_IDOSTKOR", columns={"ID_OST_KOREKTY", "ID_DOK_HANDLOWEGO"}), @ORM\Index(name="POZDOKMAG_IDPOWKOR", columns={"ID_POW_KOREKTY"}), @ORM\Index(name="POZDOKMAG_IDPOZORG", columns={"ID_POZ_ORYGINALNEJ"}), @ORM\Index(name="POZDOKMAG_IDPOZPRZYCH", columns={"ID_POZ_PRZYCH"}), @ORM\Index(name="POZDOKMAG_NRSERII", columns={"NR_SERII"}), @ORM\Index(name="POZDOKMAG_IDDH_DATA", columns={"ID_DOK_HANDLOWEGO", "DATA"}), @ORM\Index(name="POZDOKMAG_POZDH", columns={"POZ_KOREKTY", "POZ_WYB_DOSTAWY", "ID_DOK_HANDLOWEGO"}), @ORM\Index(name="POZDOKMAG_RODZAJ", columns={"RODZAJ_POZYCJI", "RODZAJ_ARTYKULU", "ID_DOK_MAGAZYNOWEGO"}), @ORM\Index(name="GUID_MM_INDEX", columns={"GUID_POZ_DOSTAWY_MM"}), @ORM\Index(name="IDX_PDM_DATA_ID_DOK_MAG1", columns={"DATA", "ID_DOK_MAGAZYNOWEGO"}), @ORM\Index(name="IDX_PDM_DATA_ID_DOK_HANDL1", columns={"DATA", "ID_DOK_HANDLOWEGO"}), @ORM\Index(name="IDX_PDM_TRYBREJESTRACJI_POZ_KOREKTY", columns={"ID_POZ_DOK_MAG", "ID_DOK_MAGAZYNOWEGO", "ID_DOK_HANDLOWEGO", "ID_ARTYKULU", "ID_POZ_KORYGOWANEJ", "ID_OST_KOREKTY", "ILOSC", "RODZAJ_POZYCJI", "DATA", "CENA_NETTO", "RABAT", "RABAT2", "TRYBREJESTRACJI", "POZ_KOREKTY"}), @ORM\Index(name="IDX_PDM_IDART_RPOZ_TRYB_IDDOK_DATA", columns={"ID_POZ_DOK_MAG", "ID_DOK_MAGAZYNOWEGO", "ID_POZ_KORYGOWANEJ", "ID_OST_KOREKTY", "POZ_KOREKTY", "ILOSC", "CENA_NETTO", "RABAT", "RABAT2", "ID_ARTYKULU", "RODZAJ_POZYCJI", "TRYBREJESTRACJI", "ID_DOK_HANDLOWEGO", "DATA"}), @ORM\Index(name="POZDOKMAG_IDPOZZAMZAL", columns={"ID_DOK_HANDLOWEGO", "ID_POZ_ZAM_ZAL"}), @ORM\Index(name="POZDOKMAG_IDPOZZAMZAL_1", columns={"ID_POZ_ZAM_ZAL"}), @ORM\Index(name="POZDOKMAG_IDPOZZAM_1", columns={"ID_POZ_ZAM"}), @ORM\Index(name="POZDOKMAG_IDPOZZAM_2", columns={"ID_DOK_MAGAZYNOWEGO", "ID_POZ_ZAM"}), @ORM\Index(name="POZDOKMAG_IDPOZZAMZAL_2", columns={"ID_DOK_MAGAZYNOWEGO", "ID_POZ_ZAM_ZAL"}), @ORM\Index(name="PDM_IDPOZOF", columns={"ID_POZYCJI_OFERTY"})})
 * @ORM\Entity
 */
class PozycjaDokumentuMagazynowego
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
     * @ORM\Column(name="ID_OST_KOREKTY", type="string", length=9, nullable=true)
     */
    private $idOstKorekty;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POW_KOREKTY", type="string", length=9, nullable=true)
     */
    private $idPowKorekty;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_KOREKTY", type="string", length=1, nullable=true)
     */
    private $pozKorekty;

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
     * @ORM\Column(name="WYDANO", type="string", length=9, nullable=false)
     */
    private $wydano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZAREZERWOWANO", type="string", length=9, nullable=false)
     */
    private $zarezerwowano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_POZYCJI", type="string", length=1, nullable=true)
     */
    private $rodzajPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_PRZYCHODU_OK", type="string", length=1, nullable=true)
     */
    private $pozPrzychoduOk;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=4, nullable=true)
     */
    private $data;

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
     * @ORM\Column(name="RABAT2_ZB", type="string", length=5, nullable=true)
     */
    private $rabat2Zb = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="FLAGA_STANU", type="smallint", nullable=true)
     */
    private $flagaStanu = '0';

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
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_ZAM", type="string", length=9, nullable=true)
     */
    private $idPozZam;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_PACZKI", type="string", length=20, nullable=true)
     */
    private $nrPaczki;

    /**
     * @var string
     *
     * @ORM\Column(name="TRYBREJESTRACJI", type="string", length=1, nullable=false)
     */
    private $trybrejestracji = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_PRZYCH", type="string", length=9, nullable=true)
     */
    private $idPozPrzych;

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_WYB_DOSTAWY", type="string", length=1, nullable=false)
     */
    private $pozWybDostawy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NR_SERII", type="string", length=50, nullable=false)
     */
    private $nrSerii = '';

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="GUID_POZ_DOSTAWY_MM", type="uniqueidentifier", nullable=true)
     */
    private $guidPozDostawyMm;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="GUID_POZ_DOK_MAG", type="uniqueidentifier", nullable=true)
     */
    private $guidPozDokMag = 'newid()';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_WAZNOSCI", type="string", length=4, nullable=false)
     */
    private $dataWaznosci = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_ZLECENIA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPozZlecenia;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT_UE", type="string", length=3, nullable=true)
     */
    private $kodVatUe = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO_BEZ_KOSZTU", type="string", length=9, nullable=true)
     */
    private $cenaNettoBezKosztu;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO_BEZ_KOSZTU", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $cenaBruttoBezKosztu;

    /**
     * @var string
     *
     * @ORM\Column(name="I_PODLEGA_DEKLARACJI", type="string", length=1, nullable=true)
     */
    private $iPodlegaDeklaracji = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="I_KOD_CN", type="string", length=10, nullable=true)
     */
    private $iKodCn;

    /**
     * @var string
     *
     * @ORM\Column(name="I_KOD_TRANSPORTU", type="string", length=10, nullable=true)
     */
    private $iKodTransportu;

    /**
     * @var string
     *
     * @ORM\Column(name="I_KOD_TRANSAKCJI", type="string", length=10, nullable=true)
     */
    private $iKodTransakcji;

    /**
     * @var string
     *
     * @ORM\Column(name="I_KOD_DOSTAWY", type="string", length=10, nullable=true)
     */
    private $iKodDostawy;

    /**
     * @var string
     *
     * @ORM\Column(name="I_KOD_KRAJU_PRZEZ_WYS", type="string", length=3, nullable=true)
     */
    private $iKodKrajuPrzezWys;

    /**
     * @var string
     *
     * @ORM\Column(name="I_KOD_KRAJU_POCH", type="string", length=3, nullable=true)
     */
    private $iKodKrajuPoch;

    /**
     * @var string
     *
     * @ORM\Column(name="I_MASA_NETTO", type="decimal", precision=16, scale=3, nullable=true)
     */
    private $iMasaNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_OBROTOWEJ", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPozObrotowej;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_ZAM_ZAL", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPozZamZal;

    /**
     * @var string
     *
     * @ORM\Column(name="AKT_CEN_PRZY_DOSTAWIE", type="string", length=1, nullable=true)
     */
    private $aktCenPrzyDostawie = '1';

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
     * @ORM\Column(name="CENA_N_KGO", type="string", length=9, nullable=true)
     */
    private $cenaNKgo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_B_KGO", type="string", length=9, nullable=true)
     */
    private $cenaBKgo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="CZB_MARZA", type="string", length=9, nullable=true)
     */
    private $czbMarza = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AKCYZA", type="string", length=1, nullable=true)
     */
    private $akcyza = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_KORYGUJACEGO_ZBIORCZO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokKorygujacegoZbiorczo;

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
     * @ORM\Column(name="ID_POZYCJI_OFERTY", type="string", length=9, nullable=true)
     */
    private $idPozycjiOferty;


}

