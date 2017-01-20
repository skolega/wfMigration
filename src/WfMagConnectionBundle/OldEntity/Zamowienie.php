<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zamowienie
 *
 * @ORM\Table(name="ZAMOWIENIE", uniqueConstraints={@ORM\UniqueConstraint(name="ZAMOWIENIE_IDMAGAZYNU_NUMER", columns={"ID_MAGAZYNU", "NUMER"}), @ORM\UniqueConstraint(name="ZAMOWIENIE_KONTRAHENT_NAZWA", columns={"KONTRAHENT_NAZWA", "ID_ZAMOWIENIA"}), @ORM\UniqueConstraint(name="ZAMOWIENIE_KONTRAHENT_NAZWA_DESC", columns={"KONTRAHENT_NAZWA", "ID_ZAMOWIENIA"})}, indexes={@ORM\Index(name="ZAMOWIENIE_NUMER_PRZESYLKI", columns={"NUMER_PRZESYLKI"}), @ORM\Index(name="ZAMOWIENIE_ID_OPERATORA_PRZESYLKI", columns={"ID_OPERATORA_PRZESYLKI"}), @ORM\Index(name="ZAMOWIENIE_OSOBA_ZAMAWIAJACA", columns={"OSOBA_ZAMAWIAJACA"}), @ORM\Index(name="ZAMOWIENIE_ID_KONTRAHENTA_DATA_REALIZACJI", columns={"ID_MAGAZYNU", "ID_KONTRAHENTA", "DATA_REALIZACJI"}), @ORM\Index(name="ZAMOWIENIE_NUMER", columns={"ID_MAGAZYNU", "NUMER"}), @ORM\Index(name="ZAMOWIENIE_PRIORYTET_DATA_REALIZACJI", columns={"ID_MAGAZYNU", "PRIORYTET", "DATA_REALIZACJI"}), @ORM\Index(name="ZAMOWIENIE_DATA_WYSTAWIENIA", columns={"ID_MAGAZYNU", "DATA"}), @ORM\Index(name="ZAMOWIENIE_NRZAMKLI", columns={"NR_ZAMOWIENIA_KLIENTA", "ID_MAGAZYNU"}), @ORM\Index(name="ZAMOWIENIE_IDMAGDW", columns={"ID_MAGAZYNU", "DOK_WAL", "SYM_WAL"}), @ORM\Index(name="ZAMOWIENIE_IDPRAC", columns={"ID_PRACOWNIKA"}), @ORM\Index(name="ZAMOWIENIE_IDM_SZ", columns={"ID_MAGAZYNU", "STAN_REALIZ", "STATUS_ZAM"}), @ORM\Index(name="ZAMOWIENIE_SEMAFOR", columns={"SEMAFOR"}), @ORM\Index(name="ZAMOWIENIE_KOD_KRES", columns={"KOD_KRESKOWY"})})
 * @ORM\Entity
 */
class Zamowienie
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAMOWIENIA", type="string", length=9, nullable=false)
     */
    private $idZamowienia;

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
     * @ORM\Column(name="NUMER", type="string", length=30, nullable=true)
     */
    private $numer;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA", type="string", length=4, nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_REALIZACJI", type="string", length=4, nullable=true)
     */
    private $dataRealizacji;

    /**
     * @var string
     *
     * @ORM\Column(name="ZALICZKA", type="string", length=9, nullable=true)
     */
    private $zaliczka = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRIORYTET", type="string", length=1, nullable=true)
     */
    private $priorytet = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="AUTO_REZERWACJA", type="string", length=1, nullable=true)
     */
    private $autoRezerwacja = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="NR_ZAMOWIENIA_KLIENTA", type="string", length=30, nullable=true)
     */
    private $nrZamowieniaKlienta;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP", type="string", length=1, nullable=true)
     */
    private $typ = '1';

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
     * @ORM\Column(name="SEMAFOR", type="string", length=9, nullable=true)
     */
    private $semafor;

    /**
     * @var string
     *
     * @ORM\Column(name="STAN_REALIZ", type="string", length=1, nullable=true)
     */
    private $stanRealiz = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS_ZAM", type="string", length=1, nullable=true)
     */
    private $statusZam = '';

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
     * @ORM\Column(name="RABAT_NARZUT", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $rabatNarzut = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OBLICZANIE_WG_CEN", type="string", length=6, nullable=true)
     */
    private $obliczanieWgCen = 'Netto';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU", type="string", length=9, nullable=false)
     */
    private $idRachunku = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ETYKIETY", type="string", length=9, nullable=true)
     */
    private $idEtykiety = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="INFORMACJE_DODATKOWE", type="string", length=1000, nullable=true)
     */
    private $informacjeDodatkowe;

    /**
     * @var integer
     *
     * @ORM\Column(name="ZAMOWIENIE_INTERNETOWE", type="smallint", nullable=true)
     */
    private $zamowienieInternetowe = '0';

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
     * @ORM\Column(name="FAKTURA_DO_ZAMOWIENIA", type="smallint", nullable=true)
     */
    private $fakturaDoZamowienia = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_PRZESYLKI", type="string", length=50, nullable=true)
     */
    private $numerPrzesylki;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OPERATORA_PRZESYLKI", type="string", length=9, nullable=true)
     */
    private $idOperatoraPrzesylki = '0';


}

