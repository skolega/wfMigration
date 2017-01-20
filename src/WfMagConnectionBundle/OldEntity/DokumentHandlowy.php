<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DokumentHandlowy
 *
 * @ORM\Table(name="DOKUMENT_HANDLOWY", uniqueConstraints={@ORM\UniqueConstraint(name="DOKHANDL_KONTRAHENT_NAZWA", columns={"KONTRAHENT_NAZWA", "ID_DOKUMENTU_HANDLOWEGO"}), @ORM\UniqueConstraint(name="DOKHANDL_PLATNIK_NAZWA", columns={"PLATNIK_NAZWA", "ID_DOKUMENTU_HANDLOWEGO"}), @ORM\UniqueConstraint(name="DOKHANDL_KONTRAHENT_NAZWA_DESC", columns={"KONTRAHENT_NAZWA", "ID_DOKUMENTU_HANDLOWEGO"}), @ORM\UniqueConstraint(name="DOKHANDL_PLATNIK_NAZWA_DESC", columns={"PLATNIK_NAZWA", "ID_DOKUMENTU_HANDLOWEGO"})}, indexes={@ORM\Index(name="DOKHANDL_IDFIR_DATA", columns={"ID_FIRMY", "DATA_WYSTAWIENIA"}), @ORM\Index(name="DOKHANDL_IDFIR_TERMIN", columns={"ID_FIRMY", "TERMIN_PLAT"}), @ORM\Index(name="DOKHANDL_IDFIR_NUMER", columns={"ID_FIRMY", "NUMER"}), @ORM\Index(name="DOKHANDL_IDFIR_POZOSTALO", columns={"ID_FIRMY", "POZOSTALO"}), @ORM\Index(name="DOKHANDL_IDPLATN_POZO", columns={"ID_PLATNIKA", "POZOSTALO"}), @ORM\Index(name="DOKHANDL_IDMAG", columns={"ID_MAGAZYNU"}), @ORM\Index(name="DOKHANDL_IDPRAC", columns={"ID_PRACOWNIKA"}), @ORM\Index(name="DOKHANDL_IDFIR_IDKONTR", columns={"ID_FIRMY", "ID_KONTRAHENTA"}), @ORM\Index(name="DOKHANDL_IDOSTKOR", columns={"ID_OST_KOREKTY"}), @ORM\Index(name="DOKHANDL_IDDOKKOR", columns={"ID_DOK_KORYGOWANEGO"}), @ORM\Index(name="DOKHANDL_IDDOKORG", columns={"ID_DOK_ORYGINALNEGO", "DATA_WYSTAWIENIA"}), @ORM\Index(name="DOKHANDL_IDTYPUDKTR", columns={"ID_TYPU", "DOK_KOREKTY", "TRYBREJESTRACJI"}), @ORM\Index(name="DOKHANDL_TYPDOKIDTYP", columns={"TYP_DOKUMENTU", "ID_TYPU", "DATA_WYSTAWIENIA"}), @ORM\Index(name="DOKHANDL_TYPDOKDK", columns={"TYP_DOKUMENTU", "DOK_KOREKTY"}), @ORM\Index(name="DOKHANDL_SEMAFOR", columns={"SEMAFOR"}), @ORM\Index(name="DOKHANDL_IDFZALORG", columns={"ID_FZAL_ORG", "DATA_WYSTAWIENIA"}), @ORM\Index(name="DOKHANDL_IDFZALOST", columns={"ID_FZAL_OST"}), @ORM\Index(name="DOKHANDL_IDFIR_DATA_OTRZYMANIA", columns={"ID_FIRMY", "DATA_OTRZYMANIA"}), @ORM\Index(name="DOKHANDL_IDFIR_NR_PARAGONU", columns={"NUMER_PARAGONU", "ID_MAGAZYNU", "ID_DOKUMENTU_HANDLOWEGO"}), @ORM\Index(name="DOKHANDL_KOD_KRES", columns={"KOD_KRESKOWY"}), @ORM\Index(name="DOKHANDL_ID_KOREKTY_ZBIORCZEJ", columns={"ID_KOREKTY_ZBIORCZEJ"}), @ORM\Index(name="DOKHANDL_DWYST_IDDOKHANDL", columns={"DATA_WYSTAWIENIA", "ID_DOKUMENTU_HANDLOWEGO"}), @ORM\Index(name="DOKHANDL_DWYSTDESC_IDDOKHANDL", columns={"DATA_WYSTAWIENIA", "ID_DOKUMENTU_HANDLOWEGO"}), @ORM\Index(name="DOKHANDL_NUMERDESC", columns={"NUMER"})})
 * @ORM\Entity
 */
class DokumentHandlowy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_HANDLOWEGO", type="string", length=9, nullable=false)
     */
    private $idDokumentuHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DOKUMENTU", type="string", length=1, nullable=true)
     */
    private $typDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="DOK_HANDLOWY", type="string", length=1, nullable=true)
     */
    private $dokHandlowy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OST_KOREKTY", type="string", length=9, nullable=true)
     */
    private $idOstKorekty;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_ORYGINALNEGO", type="string", length=9, nullable=true)
     */
    private $idDokOryginalnego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_KORYGOWANEGO", type="string", length=9, nullable=true)
     */
    private $idDokKorygowanego;

    /**
     * @var string
     *
     * @ORM\Column(name="DOK_KOREKTY", type="string", length=1, nullable=true)
     */
    private $dokKorekty;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=true)
     */
    private $idTypu;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=true)
     */
    private $numer;

    /**
     * @var integer
     *
     * @ORM\Column(name="AUTONUMER", type="integer", nullable=true)
     */
    private $autonumer;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMA_PLATNOSCI", type="string", length=50, nullable=true)
     */
    private $formaPlatnosci;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCE", type="string", length=50, nullable=true)
     */
    private $miejsce;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_WPLYWU", type="string", length=4, nullable=true)
     */
    private $dataWplywu;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_WYSTAWIENIA", type="string", length=4, nullable=true)
     */
    private $dataWystawienia;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_SPRZEDAZY", type="string", length=4, nullable=true)
     */
    private $dataSprzedazy;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_OTRZYMANIA", type="string", length=4, nullable=true)
     */
    private $dataOtrzymania;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=true)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PLATNIKA", type="string", length=9, nullable=true)
     */
    private $idPlatnika;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_PLATNIKA", type="string", length=1, nullable=true)
     */
    private $typPlatnika;

    /**
     * @var string
     *
     * @ORM\Column(name="ODEBRAL", type="string", length=50, nullable=true)
     */
    private $odebral;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=1000, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="NARZUT_RABAT", type="string", length=5, nullable=true)
     */
    private $narzutRabat;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_PLAT", type="string", length=9, nullable=true)
     */
    private $rodzajPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="TERMIN_PLAT", type="string", length=4, nullable=true)
     */
    private $terminPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="OBLICZANIE_WG_CEN", type="string", length=6, nullable=true)
     */
    private $obliczanieWgCen;

    /**
     * @var string
     *
     * @ORM\Column(name="ZALICZKA", type="string", length=9, nullable=true)
     */
    private $zaliczka;

    /**
     * @var string
     *
     * @ORM\Column(name="CZY_ZALICZKA_DLA_FIN", type="string", length=1, nullable=true)
     */
    private $czyZaliczkaDlaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_NETTO", type="string", length=9, nullable=true)
     */
    private $wartoscNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_BRUTTO", type="string", length=9, nullable=true)
     */
    private $wartoscBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="RAZEM_ZAPLACONO", type="string", length=9, nullable=true)
     */
    private $razemZaplacono;

    /**
     * @var string
     *
     * @ORM\Column(name="POZOSTALO", type="string", length=9, nullable=true)
     */
    private $pozostalo;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_NETTO_WAL", type="string", length=9, nullable=true)
     */
    private $wartoscNettoWal;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_BRUTTO_WAL", type="string", length=9, nullable=true)
     */
    private $wartoscBruttoWal;

    /**
     * @var string
     *
     * @ORM\Column(name="RAZEM_ZAPLACONO_WAL", type="string", length=9, nullable=true)
     */
    private $razemZaplaconoWal;

    /**
     * @var string
     *
     * @ORM\Column(name="POZOSTALO_WAL", type="string", length=9, nullable=true)
     */
    private $pozostaloWal;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_WAL", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $przelicznikWal = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_KURS_WAL", type="string", length=4, nullable=true)
     */
    private $dataKursWal;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_OST_ROZLICZENIA", type="string", length=4, nullable=true)
     */
    private $dataOstRozliczenia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="string", length=9, nullable=true)
     */
    private $semafor;

    /**
     * @var integer
     *
     * @ORM\Column(name="FLAGA_STANU", type="smallint", nullable=true)
     */
    private $flagaStanu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FISKALNY_OK", type="string", length=1, nullable=true)
     */
    private $fiskalnyOk;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_PARAGONU", type="string", length=30, nullable=true)
     */
    private $numerParagonu;

    /**
     * @var string
     *
     * @ORM\Column(name="SUMA_ODSETEK", type="string", length=9, nullable=true)
     */
    private $sumaOdsetek = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRACOWNIKA", type="string", length=9, nullable=true)
     */
    private $idPracownika;

    /**
     * @var string
     *
     * @ORM\Column(name="TRYBREJESTRACJI", type="string", length=1, nullable=false)
     */
    private $trybrejestracji = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ROZLICZONY", type="string", length=1, nullable=true)
     */
    private $rozliczony = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DOK_WAL", type="string", length=1, nullable=false)
     */
    private $dokWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="DOK_ZAKSIEGOWANY", type="string", length=1, nullable=true)
     */
    private $dokZaksiegowany = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DOK_ZABLOKOWANY", type="string", length=1, nullable=true)
     */
    private $dokZablokowany = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DO_KSIEGOWANIA", type="string", length=1, nullable=true)
     */
    private $doKsiegowania = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU", type="string", length=9, nullable=true)
     */
    private $idRachunku = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MP", type="smallint", nullable=true)
     */
    private $mp = '0';

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
     * @var integer
     *
     * @ORM\Column(name="GRUPUJ_POZYCJE", type="smallint", nullable=true)
     */
    private $grupujPozycje = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TROJSTRONNY_UE", type="string", length=1, nullable=true)
     */
    private $trojstronnyUe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="POTWIERDZONY_UE", type="string", length=1, nullable=true)
     */
    private $potwierdzonyUe = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FZAL_ORG", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFzalOrg = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FZAL_OST", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFzalOst = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="POZ_KOSZTOWE_BAZOWE", type="string", length=1, nullable=true)
     */
    private $pozKosztoweBazowe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SZABDOKSER", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idSzabdokser = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_WAL_PZ", type="decimal", precision=14, scale=8, nullable=false)
     */
    private $przelicznikWalPz = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_KURS_WAL_PZ", type="string", length=4, nullable=true)
     */
    private $dataKursWalPz;

    /**
     * @var string
     *
     * @ORM\Column(name="WYROZNIK", type="string", length=20, nullable=false)
     */
    private $wyroznik = '';

    /**
     * @var string
     *
     * @ORM\Column(name="DOK_WAL_KRAJOWY", type="string", length=1, nullable=true)
     */
    private $dokWalKrajowy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WEWNETRZNY", type="string", length=1, nullable=true)
     */
    private $wewnetrzny = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MARZOWY", type="string", length=1, nullable=true)
     */
    private $marzowy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MARZOWY_OPIS", type="string", length=50, nullable=true)
     */
    private $marzowyOpis = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ETYKIETY", type="string", length=9, nullable=true)
     */
    private $idEtykiety = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="UPROSZCZONY", type="string", length=1, nullable=true)
     */
    private $uproszczony = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="METODA_KASOWA", type="string", length=1, nullable=true)
     */
    private $metodaKasowa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ODWROTNY", type="string", length=1, nullable=true)
     */
    private $odwrotny = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KOREKTY_ZBIORCZEJ", type="string", length=9, nullable=true)
     */
    private $idKorektyZbiorczej;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=20, nullable=true)
     */
    private $kodKreskowy;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_BANKU", type="integer", nullable=true)
     */
    private $idBanku;

    /**
     * @var string
     *
     * @ORM\Column(name="ZALICZKA_ODROCZONA", type="string", length=1, nullable=true)
     */
    private $zaliczkaOdroczona = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KONTRAHENT_NAZWA", type="string", length=50, nullable=true)
     */
    private $kontrahentNazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="PLATNIK_NAZWA", type="string", length=50, nullable=true)
     */
    private $platnikNazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="PROPORCJA_ZAL_AUTO_NETTO_BRUTTO", type="smallint", nullable=true)
     */
    private $proporcjaZalAutoNettoBrutto = '0';


}

