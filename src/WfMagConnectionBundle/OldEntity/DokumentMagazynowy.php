<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DokumentMagazynowy
 *
 * @ORM\Table(name="DOKUMENT_MAGAZYNOWY", uniqueConstraints={@ORM\UniqueConstraint(name="DOKMAG_KONTRAHENT_NAZWA", columns={"KONTRAHENT_NAZWA", "ID_DOK_MAGAZYNOWEGO"}), @ORM\UniqueConstraint(name="DOKMAG_KONTRAHENT_NAZWA_DESC", columns={"KONTRAHENT_NAZWA", "ID_DOK_MAGAZYNOWEGO"})}, indexes={@ORM\Index(name="DOKMAG_IDKONTR_DATA", columns={"ID_KONTRAHENTA", "DATA"}), @ORM\Index(name="DOKMAG_IDMAG_PRZYCH_DATA", columns={"ID_MAGAZYNU", "PRZYCHOD", "DATA"}), @ORM\Index(name="DOKMAG_IDMAG_ROZCH_DATA", columns={"ID_MAGAZYNU", "ROZCHOD", "DATA"}), @ORM\Index(name="DOKMAG_IDDOKHANDL_DATA", columns={"ID_DOKUMENTU_HANDLOWEGO", "DATA"}), @ORM\Index(name="DOKMAG_IDMAG_DATA", columns={"ID_MAGAZYNU", "DATA", "ID_DOK_MAGAZYNOWEGO"}), @ORM\Index(name="DOKMAG_IDMAG_NUMER", columns={"ID_MAGAZYNU", "NUMER", "ID_DOK_MAGAZYNOWEGO"}), @ORM\Index(name="DOKMAG_IDZLECENIA", columns={"ID_ZLECENIA"}), @ORM\Index(name="DOKMAG_ID_MAGDOC", columns={"ID_MAGAZYNU_DOCELOWEGO"}), @ORM\Index(name="DOKMAG_IDPRAC", columns={"ID_PRACOWNIKA"}), @ORM\Index(name="DOKMAG_IDOSTKOR", columns={"ID_OST_KOREKTY"}), @ORM\Index(name="DOKMAG_IDDOKKOR", columns={"ID_DOK_KORYGOWANEGO"}), @ORM\Index(name="DOKMAG_IDDOKORG", columns={"ID_DOK_ORYGINALNEGO"}), @ORM\Index(name="DOKMAG_IDTYPUNUM", columns={"ID_TYPU", "ID_MAGAZYNU", "NUMER"}), @ORM\Index(name="DOKMAG_IDSADU", columns={"ID_SADU"}), @ORM\Index(name="DOKMAG_IDKONTR", columns={"ID_KONTRAHENTA"}), @ORM\Index(name="DOKMAG_IDTYPUTR", columns={"ID_TYPU", "ID_MAGAZYNU", "TRYBREJESTRACJI"}), @ORM\Index(name="DOKMAG_SEMAFOR", columns={"SEMAFOR"}), @ORM\Index(name="DOKMAG_ID_FAKTURY_RO", columns={"ID_FAKTURY_RO"}), @ORM\Index(name="DOKMAG_ID_RO", columns={"ID_RO"}), @ORM\Index(name="DOKMAG_KOD_KRES", columns={"KOD_KRESKOWY"}), @ORM\Index(name="DOKMAG_IDMAG_DATA_VAT", columns={"ID_MAGAZYNU", "DATA_VAT", "ID_DOK_MAGAZYNOWEGO"}), @ORM\Index(name="DOKMAG_NUMERDESC", columns={"NUMER"})})
 * @ORM\Entity
 */
class DokumentMagazynowy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_MAGAZYNOWEGO", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idDokMagazynowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_HANDLOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokumentuHandlowego;

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
     * @ORM\Column(name="PRZYCHOD", type="string", length=1, nullable=true)
     */
    private $przychod;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=true)
     */
    private $idTypu;

    /**
     * @var integer
     *
     * @ORM\Column(name="FLAGA_STANU", type="smallint", nullable=true)
     */
    private $flagaStanu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU_DOCELOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idMagazynuDocelowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZLECENIA", type="string", length=9, nullable=true)
     */
    private $idZlecenia;

    /**
     * @var string
     *
     * @ORM\Column(name="ROZCHOD", type="string", length=1, nullable=true)
     */
    private $rozchod;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=true)
     */
    private $numer;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA", type="integer", nullable=true)
     */
    private $data;

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
     * @ORM\Column(name="BRUTTO_NETTO", type="string", length=10, nullable=true)
     */
    private $bruttoNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="TRYB_ROZCHODU", type="string", length=10, nullable=true)
     */
    private $trybRozchodu;

    /**
     * @var integer
     *
     * @ORM\Column(name="SEMAFOR", type="integer", nullable=true)
     */
    private $semafor;

    /**
     * @var string
     *
     * @ORM\Column(name="PODST_PRZYJ", type="string", length=20, nullable=true)
     */
    private $podstPrzyj;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_DOKUMENTU", type="string", length=3, nullable=true)
     */
    private $rodzajDokumentu;

    /**
     * @var integer
     *
     * @ORM\Column(name="AUTONUMER", type="integer", nullable=true)
     */
    private $autonumer;

    /**
     * @var string
     *
     * @ORM\Column(name="WYCENA", type="string", length=1, nullable=true)
     */
    private $wycena;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=1000, nullable=true)
     */
    private $uwagi;

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
     * @ORM\Column(name="DOKUMENTDALACZONY", type="string", length=1, nullable=true)
     */
    private $dokumentdalaczony;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SADU", type="string", length=9, nullable=true)
     */
    private $idSadu;

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
     * @ORM\Column(name="ID_MM", type="string", length=9, nullable=true)
     */
    private $idMm;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RO", type="string", length=9, nullable=true)
     */
    private $idRo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FAKTURY_RO", type="string", length=9, nullable=true)
     */
    private $idFakturyRo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ODCHYLKA", type="string", length=9, nullable=false)
     */
    private $odchylka = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WYROZNIK", type="string", length=20, nullable=false)
     */
    private $wyroznik = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FZAL_ORG", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFzalOrg;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL_DM", type="string", length=3, nullable=true)
     */
    private $symWalDm;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_KURS_WAL_DM", type="string", length=4, nullable=true)
     */
    private $dataKursWalDm;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_WAL_DM", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $przelicznikWalDm;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_DH_WYMAGANA", type="string", length=4, nullable=true)
     */
    private $dataDhWymagana = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MARZOWY", type="string", length=1, nullable=true)
     */
    private $marzowy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ETYKIETY", type="string", length=9, nullable=true)
     */
    private $idEtykiety = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ODEBRAL", type="string", length=50, nullable=true)
     */
    private $odebral;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=20, nullable=true)
     */
    private $kodKreskowy;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTRAHENT_NAZWA", type="string", length=50, nullable=true)
     */
    private $kontrahentNazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_VAT", type="string", length=4, nullable=true)
     */
    private $dataVat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_KURS_WAL_VAT", type="string", length=4, nullable=true)
     */
    private $dataKursWalVat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_WAL_VAT", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $przelicznikWalVat = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL_VAT", type="string", length=3, nullable=true)
     */
    private $symWalVat;


}

