<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oferta
 *
 * @ORM\Table(name="OFERTA", uniqueConstraints={@ORM\UniqueConstraint(name="OFERTA_IDMAGAZYNU_NUMER", columns={"ID_FIRMY", "ID_MAGAZYNU", "NUMER"}), @ORM\UniqueConstraint(name="OFERTA_KONTRAHENT_NAZWA", columns={"KONTRAHENT_NAZWA", "ID_OFERTY"}), @ORM\UniqueConstraint(name="OFERTA_KONTRAHENT_NAZWA_DESC", columns={"KONTRAHENT_NAZWA", "ID_OFERTY"})}, indexes={@ORM\Index(name="OFERTA_NUMER", columns={"ID_FIRMY", "ID_MAGAZYNU", "NUMER"}), @ORM\Index(name="OFERTA_NRWERSJI", columns={"ID_ZAPISU_WERSJI", "NR_WERSJI"}), @ORM\Index(name="OFERTA_IDMAGDW", columns={"ID_FIRMY", "ID_MAGAZYNU", "DOK_WAL", "SYM_WAL"}), @ORM\Index(name="OFERTA_IDM_STATUS", columns={"ID_FIRMY", "ID_MAGAZYNU", "STATUS_OFERTY"}), @ORM\Index(name="OFERTA_IDPRAC", columns={"ID_PRACOWNIKA"}), @ORM\Index(name="OFERTA_ID_KONTRAHENTA_DATA_WAZNOSCI_OD_DO", columns={"ID_FIRMY", "ID_MAGAZYNU", "ID_KONTRAHENTA", "DATA_WAZNOSCI_OD", "DATA_WAZNOSCI_DO"}), @ORM\Index(name="OFERTA_NAZWA", columns={"ID_FIRMY", "ID_MAGAZYNU", "NAZWA"}), @ORM\Index(name="OFERTA_SEMAFOR", columns={"SEMAFOR"}), @ORM\Index(name="OFERTA_DATA_WYSTAWIENIA", columns={"ID_FIRMY", "ID_MAGAZYNU", "DATA"}), @ORM\Index(name="OFERTA_OSOBA_ZAMAWIAJACA", columns={"OSOBA_ZAMAWIAJACA"}), @ORM\Index(name="OFERTA_KOD_KRES", columns={"KOD_KRESKOWY"})})
 * @ORM\Entity
 */
class Oferta
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_OFERTY", type="string", length=9, nullable=false)
     */
    private $idOferty;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=true)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=false)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=false)
     */
    private $idTypu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAPISU_WERSJI", type="string", length=9, nullable=false)
     */
    private $idZapisuWersji = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_OFERTY", type="string", length=1, nullable=true)
     */
    private $rodzajOferty = 's';

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=true)
     */
    private $numer;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=300, nullable=true)
     */
    private $nazwa = '';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=4, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_WAZNOSCI_OD", type="string", length=4, nullable=true)
     */
    private $dataWaznosciOd;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_WAZNOSCI_DO", type="string", length=4, nullable=true)
     */
    private $dataWaznosciDo;

    /**
     * @var string
     *
     * @ORM\Column(name="PLAN_TERMIN_REALIZACJI", type="string", length=4, nullable=true)
     */
    private $planTerminRealizacji;

    /**
     * @var integer
     *
     * @ORM\Column(name="NR_WERSJI", type="integer", nullable=true)
     */
    private $nrWersji = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="AUTONUMER", type="string", length=9, nullable=false)
     */
    private $autonumer = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_BRUTTO", type="string", length=9, nullable=true)
     */
    private $wartoscBrutto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_NETTO", type="string", length=9, nullable=true)
     */
    private $wartoscNetto = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_NETTO_WAL", type="string", length=9, nullable=true)
     */
    private $wartoscNettoWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_BRUTTO_WAL", type="string", length=9, nullable=true)
     */
    private $wartoscBruttoWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_WAL", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $przelicznikWal = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="DOK_WAL", type="string", length=1, nullable=true)
     */
    private $dokWal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_KURS_WAL", type="string", length=4, nullable=true)
     */
    private $dataKursWal;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_OFERTY", type="string", length=1, nullable=true)
     */
    private $statusOferty = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="string", length=9, nullable=true)
     */
    private $semafor;

    /**
     * @var string
     *
     * @ORM\Column(name="FLAGA_STANU", type="string", length=1, nullable=true)
     */
    private $flagaStanu = '0';

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
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=true)
     */
    private $idUzytkownika;

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
     * @ORM\Column(name="DOK_ZABLOKOWANY", type="string", length=1, nullable=true)
     */
    private $dokZablokowany = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TRYBREJESTRACJI", type="smallint", nullable=true)
     */
    private $trybrejestracji = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OBLICZANIE_WG_CEN", type="string", length=6, nullable=true)
     */
    private $obliczanieWgCen = 'Netto';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ETYKIETY", type="string", length=9, nullable=true)
     */
    private $idEtykiety = '0';

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
     * @ORM\Column(name="ID_KONTAKTU", type="string", length=9, nullable=true)
     */
    private $idKontaktu;

    /**
     * @var string
     *
     * @ORM\Column(name="OSOBA_ZAMAWIAJACA", type="string", length=101, nullable=true)
     */
    private $osobaZamawiajaca;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMA_PLATNOSCI", type="string", length=50, nullable=true)
     */
    private $formaPlatnosci;

    /**
     * @var integer
     *
     * @ORM\Column(name="DNI_PLATNOSCI", type="integer", nullable=true)
     */
    private $dniPlatnosci = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="FAKTURA_PARAGON", type="smallint", nullable=true)
     */
    private $fakturaParagon = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POWODU_ODRZUCENIA", type="string", length=9, nullable=true)
     */
    private $idPowoduOdrzucenia;


}

