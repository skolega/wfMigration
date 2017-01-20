<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kontrahent
 *
 * @ORM\Table(name="KONTRAHENT", uniqueConstraints={@ORM\UniqueConstraint(name="AK_KONTRAHENT_SEMAFOR_KONTRAHE", columns={"SEMAFOR", "ID_KONTRAHENTA"}), @ORM\UniqueConstraint(name="KONTRAHENT_KOD", columns={"KOD_KONTRAHENTA", "ID_FIRMY"})}, indexes={@ORM\Index(name="KONTRAHENT_IDFIR_NAZWA", columns={"ID_FIRMY", "NAZWA"}), @ORM\Index(name="KONTRAHENT_IDFIR_ODB_NAZWA", columns={"ID_FIRMY", "ODBIORCA", "NAZWA"}), @ORM\Index(name="KONTRAHENT_IDFIR_DOST_NAZWA", columns={"ID_FIRMY", "DOSTAWCA", "NAZWA"}), @ORM\Index(name="KONTRAHENT_IDFIR_NIP", columns={"ID_FIRMY", "NIP"}), @ORM\Index(name="KONTRAHENT_IDFIR_ODB_NIP", columns={"ID_FIRMY", "ODBIORCA", "NIP"}), @ORM\Index(name="KONTRAHENT_IDFIR_DOST_NIP", columns={"ID_FIRMY", "DOSTAWCA", "NIP"}), @ORM\Index(name="KONTRAHENT_IDFIR_MIEJSCOWOSC", columns={"ID_FIRMY", "MIEJSCOWOSC"}), @ORM\Index(name="KONTRAHENT_IDFIR_ODB_MIEJSCOWOSC", columns={"ID_FIRMY", "ODBIORCA", "MIEJSCOWOSC"}), @ORM\Index(name="KONTRAHENT_IDFIR_DOST_MIEJSCOWOSC", columns={"ID_FIRMY", "DOSTAWCA", "MIEJSCOWOSC"}), @ORM\Index(name="KONTRAHENT_IDFIR_KOD", columns={"ID_FIRMY", "KOD_POCZTOWY"}), @ORM\Index(name="KONTRAHENT_IDFIR_ODB_KOD", columns={"ID_FIRMY", "ODBIORCA", "KOD_POCZTOWY"}), @ORM\Index(name="KONTRAHENT_IDFIR_DOST_KOD", columns={"ID_FIRMY", "DOSTAWCA", "KOD_POCZTOWY"}), @ORM\Index(name="KONTRAHENT_IDFIR_NIPL", columns={"ID_FIRMY", "NIPL"}), @ORM\Index(name="KONTRAHENT_IDFIR_WOJEW", columns={"ID_FIRMY", "WOJEWODZTWO"}), @ORM\Index(name="KONTRAHENT_IDFIR_PESEL", columns={"ID_FIRMY", "PESEL"}), @ORM\Index(name="KONTRAHENT_IDFIR_KLUCZ", columns={"KLUCZ"}), @ORM\Index(name="KONTRAHENT_IDFIR_IDALLEGRO", columns={"ID_FIRMY", "ID_ALLEGRO"}), @ORM\Index(name="KONTRAHENT_IDFIR_LOGINALLEGRO", columns={"ID_FIRMY", "LOGIN_ALLEGRO"})})
 * @ORM\Entity
 */
class Kontrahent
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TABELI_ODSETEK", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idTabeliOdsetek;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KLASYFIKACJI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idKlasyfikacji;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_KRAJU", type="string", length=3, nullable=true)
     */
    private $symKraju;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PLATNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPlatnika;

    /**
     * @var string
     *
     * @ORM\Column(name="WOJEWODZTWO", type="string", length=30, nullable=true)
     */
    private $wojewodztwo;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_PELNA", type="string", length=200, nullable=true)
     */
    private $nazwaPelna;

    /**
     * @var integer
     *
     * @ORM\Column(name="ODBIORCA", type="smallint", nullable=true)
     */
    private $odbiorca;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOSTAWCA", type="smallint", nullable=true)
     */
    private $dostawca;

    /**
     * @var string
     *
     * @ORM\Column(name="NIP", type="string", length=30, nullable=true)
     */
    private $nip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="REGON", type="string", length=20, nullable=true)
     */
    private $regon;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLATNIK_VAT", type="smallint", nullable=true)
     */
    private $platnikVat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LIMIT_KUPIECKI", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $limitKupiecki = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FORMA_PLATNOSCI", type="string", length=50, nullable=true)
     */
    private $formaPlatnosci;

    /**
     * @var integer
     *
     * @ORM\Column(name="TERMIN_NALEZNOSCI", type="integer", nullable=true)
     */
    private $terminNaleznosci = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TERMIN_ZOBOWIAZAN", type="integer", nullable=true)
     */
    private $terminZobowiazan = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="PRIORYTET", type="smallint", nullable=true)
     */
    private $priorytet = '2';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=20, nullable=true)
     */
    private $kodKreskowy;

    /**
     * @var integer
     *
     * @ORM\Column(name="DRUKUJ_OSTRZEZENIE", type="smallint", nullable=true)
     */
    private $drukujOstrzezenie;

    /**
     * @var integer
     *
     * @ORM\Column(name="POKAZUJ_OSTRZEZENIE", type="smallint", nullable=true)
     */
    private $pokazujOstrzezenie;

    /**
     * @var string
     *
     * @ORM\Column(name="OSTRZEZENIE", type="string", length=500, nullable=true)
     */
    private $ostrzezenie;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=500, nullable=true)
     */
    private $uwagi;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOD_KONTRAHENTA", type="integer", nullable=true)
     */
    private $kodKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_POCZTOWY", type="string", length=20, nullable=true)
     */
    private $kodPocztowy = '';

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCOWOSC", type="string", length=50, nullable=true)
     */
    private $miejscowosc;

    /**
     * @var string
     *
     * @ORM\Column(name="ULICA_LOKAL", type="string", length=50, nullable=true)
     */
    private $ulicaLokal;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES_WWW", type="string", length=50, nullable=true)
     */
    private $adresWww;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="decimal", precision=18, scale=0, nullable=true)
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
     * @ORM\Column(name="NIPL", type="string", length=30, nullable=true)
     */
    private $nipl;

    /**
     * @var string
     *
     * @ORM\Column(name="DOS_KOD", type="string", length=5, nullable=true)
     */
    private $dosKod;

    /**
     * @var string
     *
     * @ORM\Column(name="ZGODA_NA_PRZETWARZANIE", type="string", length=1, nullable=true)
     */
    private $zgodaNaPrzetwarzanie;

    /**
     * @var string
     *
     * @ORM\Column(name="KTO_WPISAL", type="string", length=50, nullable=true)
     */
    private $ktoWpisal;

    /**
     * @var string
     *
     * @ORM\Column(name="KTO_POPRAWIL", type="string", length=50, nullable=true)
     */
    private $ktoPoprawil;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY_RABAT", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $domyslnyRabat;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES_EMAIL", type="string", length=255, nullable=true)
     */
    private $adresEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_HANDLOWCA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idHandlowca;

    /**
     * @var string
     *
     * @ORM\Column(name="WYROZNIK", type="string", length=50, nullable=true)
     */
    private $wyroznik;

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
     * @ORM\Column(name="KontrahentUE", type="smallint", nullable=true)
     */
    private $kontrahentue = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KLUCZ", type="string", length=200, nullable=true)
     */
    private $klucz = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="UTWORZONY_W_SYSTEMIE_ZEWNETRZNYM", type="smallint", nullable=false)
     */
    private $utworzonyWSystemieZewnetrznym = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_KRAJU_KOR", type="string", length=3, nullable=true)
     */
    private $symKrajuKor;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_POCZTOWY_KOR", type="string", length=20, nullable=true)
     */
    private $kodPocztowyKor;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCOWOSC_KOR", type="string", length=50, nullable=true)
     */
    private $miejscowoscKor;

    /**
     * @var string
     *
     * @ORM\Column(name="ULICA_LOKAL_KOR", type="string", length=50, nullable=true)
     */
    private $ulicaLokalKor;

    /**
     * @var string
     *
     * @ORM\Column(name="WOJEWODZTWO_KOR", type="string", length=30, nullable=true)
     */
    private $wojewodztwoKor;

    /**
     * @var string
     *
     * @ORM\Column(name="PESEL", type="string", length=20, nullable=true)
     */
    private $pesel;

    /**
     * @var string
     *
     * @ORM\Column(name="DOKUMENT_TOZSAMOSCI_NAZWA", type="string", length=50, nullable=true)
     */
    private $dokumentTozsamosciNazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="DOKUMENT_TOZSAMOSCI_NUMER", type="string", length=30, nullable=true)
     */
    private $dokumentTozsamosciNumer;

    /**
     * @var string
     *
     * @ORM\Column(name="DOKUMENT_WYDANY_PRZEZ", type="string", length=100, nullable=true)
     */
    private $dokumentWydanyPrzez;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOKUMENT_DATA_WYDANIA", type="integer", nullable=true)
     */
    private $dokumentDataWydania;

    /**
     * @var string
     *
     * @ORM\Column(name="RAKS_KOD_KONTRAHENTA", type="string", length=70, nullable=true)
     */
    private $raksKodKontrahenta = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="BLOKOWANIE", type="smallint", nullable=true)
     */
    private $blokowanie = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KP_ID_Zdarzenia", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $kpIdZdarzenia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Incydentalny", type="smallint", nullable=true)
     */
    private $incydentalny = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZABLOKOWANY", type="string", length=1, nullable=true)
     */
    private $zablokowany = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AUTOFISKALIZACJA", type="string", length=1, nullable=true)
     */
    private $autofiskalizacja = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZBIORCZE_PLATNOSCI", type="string", length=1, nullable=true)
     */
    private $zbiorczePlatnosci = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="LOJAL_PKT", type="integer", nullable=true)
     */
    private $lojalPkt = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LOJAL_WARTOSC", type="string", length=9, nullable=true)
     */
    private $lojalWartosc = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MP", type="smallint", nullable=true)
     */
    private $mp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PODLEGA_PROMOCJI", type="string", length=1, nullable=true)
     */
    private $podlegaPromocji = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="WEWNETRZNY", type="string", length=1, nullable=true)
     */
    private $wewnetrzny = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OPERATOR_PLATNOSCI", type="string", length=1, nullable=true)
     */
    private $operatorPlatnosci = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZGODA_NA_FAKTURY_ELEKTRONICZNE", type="string", length=1, nullable=true)
     */
    private $zgodaNaFakturyElektroniczne = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FORMY_DOSTAWY_DOM", type="string", length=9, nullable=true)
     */
    private $idFormyDostawyDom;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MIEJSCA_DOSTAWY_DOM", type="string", length=9, nullable=true)
     */
    private $idMiejscaDostawyDom;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ETYKIETY", type="string", length=9, nullable=true)
     */
    private $idEtykiety = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NR_AKCYZOWY", type="string", length=30, nullable=false)
     */
    private $nrAkcyzowy = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="AKCYZA_ZWOLNIONY", type="smallint", nullable=false)
     */
    private $akcyzaZwolniony = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DOM_SYM_WAL", type="string", length=3, nullable=true)
     */
    private $domSymWal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_CZYNNY", type="string", length=1, nullable=true)
     */
    private $vatCzynny = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFON_FIRMOWY", type="string", length=20, nullable=true)
     */
    private $telefonFirmowy;

    /**
     * @var integer
     *
     * @ORM\Column(name="KTORY_MAIL_DO_RAPORTOW", type="smallint", nullable=true)
     */
    private $ktoryMailDoRaportow = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DOSTEPNY_W_B2B", type="smallint", nullable=true)
     */
    private $dostepnyWB2b = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="POWIAT", type="string", length=50, nullable=true)
     */
    private $powiat;

    /**
     * @var string
     *
     * @ORM\Column(name="POWIAT_KOR", type="string", length=50, nullable=true)
     */
    private $powiatKor;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ALLEGRO", type="string", length=30, nullable=true)
     */
    private $idAllegro;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGIN_ALLEGRO", type="string", length=50, nullable=true)
     */
    private $loginAllegro;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRG_LOJAL", type="smallint", nullable=true)
     */
    private $prgLojal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PRG_LOJAL_KWOTA", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $prgLojalKwota = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DNI_PO_TERMINIE", type="integer", nullable=true)
     */
    private $dniPoTerminie = '0';



    /**
     * Get idKontrahenta
     *
     * @return string
     */
    public function getIdKontrahenta()
    {
        return $this->idKontrahenta;
    }

    /**
     * Set idGrupy
     *
     * @param string $idGrupy
     *
     * @return Kontrahent
     */
    public function setIdGrupy($idGrupy)
    {
        $this->idGrupy = $idGrupy;

        return $this;
    }

    /**
     * Get idGrupy
     *
     * @return string
     */
    public function getIdGrupy()
    {
        return $this->idGrupy;
    }

    /**
     * Set idFirmy
     *
     * @param string $idFirmy
     *
     * @return Kontrahent
     */
    public function setIdFirmy($idFirmy)
    {
        $this->idFirmy = $idFirmy;

        return $this;
    }

    /**
     * Get idFirmy
     *
     * @return string
     */
    public function getIdFirmy()
    {
        return $this->idFirmy;
    }

    /**
     * Set idTabeliOdsetek
     *
     * @param string $idTabeliOdsetek
     *
     * @return Kontrahent
     */
    public function setIdTabeliOdsetek($idTabeliOdsetek)
    {
        $this->idTabeliOdsetek = $idTabeliOdsetek;

        return $this;
    }

    /**
     * Get idTabeliOdsetek
     *
     * @return string
     */
    public function getIdTabeliOdsetek()
    {
        return $this->idTabeliOdsetek;
    }

    /**
     * Set idRachunku
     *
     * @param string $idRachunku
     *
     * @return Kontrahent
     */
    public function setIdRachunku($idRachunku)
    {
        $this->idRachunku = $idRachunku;

        return $this;
    }

    /**
     * Get idRachunku
     *
     * @return string
     */
    public function getIdRachunku()
    {
        return $this->idRachunku;
    }

    /**
     * Set idKlasyfikacji
     *
     * @param string $idKlasyfikacji
     *
     * @return Kontrahent
     */
    public function setIdKlasyfikacji($idKlasyfikacji)
    {
        $this->idKlasyfikacji = $idKlasyfikacji;

        return $this;
    }

    /**
     * Get idKlasyfikacji
     *
     * @return string
     */
    public function getIdKlasyfikacji()
    {
        return $this->idKlasyfikacji;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return Kontrahent
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Set symKraju
     *
     * @param string $symKraju
     *
     * @return Kontrahent
     */
    public function setSymKraju($symKraju)
    {
        $this->symKraju = $symKraju;

        return $this;
    }

    /**
     * Get symKraju
     *
     * @return string
     */
    public function getSymKraju()
    {
        return $this->symKraju;
    }

    /**
     * Set idPlatnika
     *
     * @param string $idPlatnika
     *
     * @return Kontrahent
     */
    public function setIdPlatnika($idPlatnika)
    {
        $this->idPlatnika = $idPlatnika;

        return $this;
    }

    /**
     * Get idPlatnika
     *
     * @return string
     */
    public function getIdPlatnika()
    {
        return $this->idPlatnika;
    }

    /**
     * Set wojewodztwo
     *
     * @param string $wojewodztwo
     *
     * @return Kontrahent
     */
    public function setWojewodztwo($wojewodztwo)
    {
        $this->wojewodztwo = $wojewodztwo;

        return $this;
    }

    /**
     * Get wojewodztwo
     *
     * @return string
     */
    public function getWojewodztwo()
    {
        return $this->wojewodztwo;
    }

    /**
     * Set nazwaPelna
     *
     * @param string $nazwaPelna
     *
     * @return Kontrahent
     */
    public function setNazwaPelna($nazwaPelna)
    {
        $this->nazwaPelna = $nazwaPelna;

        return $this;
    }

    /**
     * Get nazwaPelna
     *
     * @return string
     */
    public function getNazwaPelna()
    {
        return $this->nazwaPelna;
    }

    /**
     * Set odbiorca
     *
     * @param integer $odbiorca
     *
     * @return Kontrahent
     */
    public function setOdbiorca($odbiorca)
    {
        $this->odbiorca = $odbiorca;

        return $this;
    }

    /**
     * Get odbiorca
     *
     * @return integer
     */
    public function getOdbiorca()
    {
        return $this->odbiorca;
    }

    /**
     * Set dostawca
     *
     * @param integer $dostawca
     *
     * @return Kontrahent
     */
    public function setDostawca($dostawca)
    {
        $this->dostawca = $dostawca;

        return $this;
    }

    /**
     * Get dostawca
     *
     * @return integer
     */
    public function getDostawca()
    {
        return $this->dostawca;
    }

    /**
     * Set nip
     *
     * @param string $nip
     *
     * @return Kontrahent
     */
    public function setNip($nip)
    {
        $this->nip = $nip;

        return $this;
    }

    /**
     * Get nip
     *
     * @return string
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * Set regon
     *
     * @param string $regon
     *
     * @return Kontrahent
     */
    public function setRegon($regon)
    {
        $this->regon = $regon;

        return $this;
    }

    /**
     * Get regon
     *
     * @return string
     */
    public function getRegon()
    {
        return $this->regon;
    }

    /**
     * Set platnikVat
     *
     * @param integer $platnikVat
     *
     * @return Kontrahent
     */
    public function setPlatnikVat($platnikVat)
    {
        $this->platnikVat = $platnikVat;

        return $this;
    }

    /**
     * Get platnikVat
     *
     * @return integer
     */
    public function getPlatnikVat()
    {
        return $this->platnikVat;
    }

    /**
     * Set limitKupiecki
     *
     * @param string $limitKupiecki
     *
     * @return Kontrahent
     */
    public function setLimitKupiecki($limitKupiecki)
    {
        $this->limitKupiecki = $limitKupiecki;

        return $this;
    }

    /**
     * Get limitKupiecki
     *
     * @return string
     */
    public function getLimitKupiecki()
    {
        return $this->limitKupiecki;
    }

    /**
     * Set formaPlatnosci
     *
     * @param string $formaPlatnosci
     *
     * @return Kontrahent
     */
    public function setFormaPlatnosci($formaPlatnosci)
    {
        $this->formaPlatnosci = $formaPlatnosci;

        return $this;
    }

    /**
     * Get formaPlatnosci
     *
     * @return string
     */
    public function getFormaPlatnosci()
    {
        return $this->formaPlatnosci;
    }

    /**
     * Set terminNaleznosci
     *
     * @param integer $terminNaleznosci
     *
     * @return Kontrahent
     */
    public function setTerminNaleznosci($terminNaleznosci)
    {
        $this->terminNaleznosci = $terminNaleznosci;

        return $this;
    }

    /**
     * Get terminNaleznosci
     *
     * @return integer
     */
    public function getTerminNaleznosci()
    {
        return $this->terminNaleznosci;
    }

    /**
     * Set terminZobowiazan
     *
     * @param integer $terminZobowiazan
     *
     * @return Kontrahent
     */
    public function setTerminZobowiazan($terminZobowiazan)
    {
        $this->terminZobowiazan = $terminZobowiazan;

        return $this;
    }

    /**
     * Get terminZobowiazan
     *
     * @return integer
     */
    public function getTerminZobowiazan()
    {
        return $this->terminZobowiazan;
    }

    /**
     * Set priorytet
     *
     * @param integer $priorytet
     *
     * @return Kontrahent
     */
    public function setPriorytet($priorytet)
    {
        $this->priorytet = $priorytet;

        return $this;
    }

    /**
     * Get priorytet
     *
     * @return integer
     */
    public function getPriorytet()
    {
        return $this->priorytet;
    }

    /**
     * Set kodKreskowy
     *
     * @param string $kodKreskowy
     *
     * @return Kontrahent
     */
    public function setKodKreskowy($kodKreskowy)
    {
        $this->kodKreskowy = $kodKreskowy;

        return $this;
    }

    /**
     * Get kodKreskowy
     *
     * @return string
     */
    public function getKodKreskowy()
    {
        return $this->kodKreskowy;
    }

    /**
     * Set drukujOstrzezenie
     *
     * @param integer $drukujOstrzezenie
     *
     * @return Kontrahent
     */
    public function setDrukujOstrzezenie($drukujOstrzezenie)
    {
        $this->drukujOstrzezenie = $drukujOstrzezenie;

        return $this;
    }

    /**
     * Get drukujOstrzezenie
     *
     * @return integer
     */
    public function getDrukujOstrzezenie()
    {
        return $this->drukujOstrzezenie;
    }

    /**
     * Set pokazujOstrzezenie
     *
     * @param integer $pokazujOstrzezenie
     *
     * @return Kontrahent
     */
    public function setPokazujOstrzezenie($pokazujOstrzezenie)
    {
        $this->pokazujOstrzezenie = $pokazujOstrzezenie;

        return $this;
    }

    /**
     * Get pokazujOstrzezenie
     *
     * @return integer
     */
    public function getPokazujOstrzezenie()
    {
        return $this->pokazujOstrzezenie;
    }

    /**
     * Set ostrzezenie
     *
     * @param string $ostrzezenie
     *
     * @return Kontrahent
     */
    public function setOstrzezenie($ostrzezenie)
    {
        $this->ostrzezenie = $ostrzezenie;

        return $this;
    }

    /**
     * Get ostrzezenie
     *
     * @return string
     */
    public function getOstrzezenie()
    {
        return $this->ostrzezenie;
    }

    /**
     * Set uwagi
     *
     * @param string $uwagi
     *
     * @return Kontrahent
     */
    public function setUwagi($uwagi)
    {
        $this->uwagi = $uwagi;

        return $this;
    }

    /**
     * Get uwagi
     *
     * @return string
     */
    public function getUwagi()
    {
        return $this->uwagi;
    }

    /**
     * Set kodKontrahenta
     *
     * @param integer $kodKontrahenta
     *
     * @return Kontrahent
     */
    public function setKodKontrahenta($kodKontrahenta)
    {
        $this->kodKontrahenta = $kodKontrahenta;

        return $this;
    }

    /**
     * Get kodKontrahenta
     *
     * @return integer
     */
    public function getKodKontrahenta()
    {
        return $this->kodKontrahenta;
    }

    /**
     * Set kodPocztowy
     *
     * @param string $kodPocztowy
     *
     * @return Kontrahent
     */
    public function setKodPocztowy($kodPocztowy)
    {
        $this->kodPocztowy = $kodPocztowy;

        return $this;
    }

    /**
     * Get kodPocztowy
     *
     * @return string
     */
    public function getKodPocztowy()
    {
        return $this->kodPocztowy;
    }

    /**
     * Set miejscowosc
     *
     * @param string $miejscowosc
     *
     * @return Kontrahent
     */
    public function setMiejscowosc($miejscowosc)
    {
        $this->miejscowosc = $miejscowosc;

        return $this;
    }

    /**
     * Get miejscowosc
     *
     * @return string
     */
    public function getMiejscowosc()
    {
        return $this->miejscowosc;
    }

    /**
     * Set ulicaLokal
     *
     * @param string $ulicaLokal
     *
     * @return Kontrahent
     */
    public function setUlicaLokal($ulicaLokal)
    {
        $this->ulicaLokal = $ulicaLokal;

        return $this;
    }

    /**
     * Get ulicaLokal
     *
     * @return string
     */
    public function getUlicaLokal()
    {
        return $this->ulicaLokal;
    }

    /**
     * Set adresWww
     *
     * @param string $adresWww
     *
     * @return Kontrahent
     */
    public function setAdresWww($adresWww)
    {
        $this->adresWww = $adresWww;

        return $this;
    }

    /**
     * Get adresWww
     *
     * @return string
     */
    public function getAdresWww()
    {
        return $this->adresWww;
    }

    /**
     * Set semafor
     *
     * @param string $semafor
     *
     * @return Kontrahent
     */
    public function setSemafor($semafor)
    {
        $this->semafor = $semafor;

        return $this;
    }

    /**
     * Get semafor
     *
     * @return string
     */
    public function getSemafor()
    {
        return $this->semafor;
    }

    /**
     * Set flagaStanu
     *
     * @param integer $flagaStanu
     *
     * @return Kontrahent
     */
    public function setFlagaStanu($flagaStanu)
    {
        $this->flagaStanu = $flagaStanu;

        return $this;
    }

    /**
     * Get flagaStanu
     *
     * @return integer
     */
    public function getFlagaStanu()
    {
        return $this->flagaStanu;
    }

    /**
     * Set nipl
     *
     * @param string $nipl
     *
     * @return Kontrahent
     */
    public function setNipl($nipl)
    {
        $this->nipl = $nipl;

        return $this;
    }

    /**
     * Get nipl
     *
     * @return string
     */
    public function getNipl()
    {
        return $this->nipl;
    }

    /**
     * Set dosKod
     *
     * @param string $dosKod
     *
     * @return Kontrahent
     */
    public function setDosKod($dosKod)
    {
        $this->dosKod = $dosKod;

        return $this;
    }

    /**
     * Get dosKod
     *
     * @return string
     */
    public function getDosKod()
    {
        return $this->dosKod;
    }

    /**
     * Set zgodaNaPrzetwarzanie
     *
     * @param string $zgodaNaPrzetwarzanie
     *
     * @return Kontrahent
     */
    public function setZgodaNaPrzetwarzanie($zgodaNaPrzetwarzanie)
    {
        $this->zgodaNaPrzetwarzanie = $zgodaNaPrzetwarzanie;

        return $this;
    }

    /**
     * Get zgodaNaPrzetwarzanie
     *
     * @return string
     */
    public function getZgodaNaPrzetwarzanie()
    {
        return $this->zgodaNaPrzetwarzanie;
    }

    /**
     * Set ktoWpisal
     *
     * @param string $ktoWpisal
     *
     * @return Kontrahent
     */
    public function setKtoWpisal($ktoWpisal)
    {
        $this->ktoWpisal = $ktoWpisal;

        return $this;
    }

    /**
     * Get ktoWpisal
     *
     * @return string
     */
    public function getKtoWpisal()
    {
        return $this->ktoWpisal;
    }

    /**
     * Set ktoPoprawil
     *
     * @param string $ktoPoprawil
     *
     * @return Kontrahent
     */
    public function setKtoPoprawil($ktoPoprawil)
    {
        $this->ktoPoprawil = $ktoPoprawil;

        return $this;
    }

    /**
     * Get ktoPoprawil
     *
     * @return string
     */
    public function getKtoPoprawil()
    {
        return $this->ktoPoprawil;
    }

    /**
     * Set domyslnyRabat
     *
     * @param string $domyslnyRabat
     *
     * @return Kontrahent
     */
    public function setDomyslnyRabat($domyslnyRabat)
    {
        $this->domyslnyRabat = $domyslnyRabat;

        return $this;
    }

    /**
     * Get domyslnyRabat
     *
     * @return string
     */
    public function getDomyslnyRabat()
    {
        return $this->domyslnyRabat;
    }

    /**
     * Set adresEmail
     *
     * @param string $adresEmail
     *
     * @return Kontrahent
     */
    public function setAdresEmail($adresEmail)
    {
        $this->adresEmail = $adresEmail;

        return $this;
    }

    /**
     * Get adresEmail
     *
     * @return string
     */
    public function getAdresEmail()
    {
        return $this->adresEmail;
    }

    /**
     * Set idHandlowca
     *
     * @param string $idHandlowca
     *
     * @return Kontrahent
     */
    public function setIdHandlowca($idHandlowca)
    {
        $this->idHandlowca = $idHandlowca;

        return $this;
    }

    /**
     * Get idHandlowca
     *
     * @return string
     */
    public function getIdHandlowca()
    {
        return $this->idHandlowca;
    }

    /**
     * Set wyroznik
     *
     * @param string $wyroznik
     *
     * @return Kontrahent
     */
    public function setWyroznik($wyroznik)
    {
        $this->wyroznik = $wyroznik;

        return $this;
    }

    /**
     * Get wyroznik
     *
     * @return string
     */
    public function getWyroznik()
    {
        return $this->wyroznik;
    }

    /**
     * Set pole1
     *
     * @param string $pole1
     *
     * @return Kontrahent
     */
    public function setPole1($pole1)
    {
        $this->pole1 = $pole1;

        return $this;
    }

    /**
     * Get pole1
     *
     * @return string
     */
    public function getPole1()
    {
        return $this->pole1;
    }

    /**
     * Set pole2
     *
     * @param string $pole2
     *
     * @return Kontrahent
     */
    public function setPole2($pole2)
    {
        $this->pole2 = $pole2;

        return $this;
    }

    /**
     * Get pole2
     *
     * @return string
     */
    public function getPole2()
    {
        return $this->pole2;
    }

    /**
     * Set pole3
     *
     * @param string $pole3
     *
     * @return Kontrahent
     */
    public function setPole3($pole3)
    {
        $this->pole3 = $pole3;

        return $this;
    }

    /**
     * Get pole3
     *
     * @return string
     */
    public function getPole3()
    {
        return $this->pole3;
    }

    /**
     * Set pole4
     *
     * @param string $pole4
     *
     * @return Kontrahent
     */
    public function setPole4($pole4)
    {
        $this->pole4 = $pole4;

        return $this;
    }

    /**
     * Get pole4
     *
     * @return string
     */
    public function getPole4()
    {
        return $this->pole4;
    }

    /**
     * Set pole5
     *
     * @param string $pole5
     *
     * @return Kontrahent
     */
    public function setPole5($pole5)
    {
        $this->pole5 = $pole5;

        return $this;
    }

    /**
     * Get pole5
     *
     * @return string
     */
    public function getPole5()
    {
        return $this->pole5;
    }

    /**
     * Set pole6
     *
     * @param string $pole6
     *
     * @return Kontrahent
     */
    public function setPole6($pole6)
    {
        $this->pole6 = $pole6;

        return $this;
    }

    /**
     * Get pole6
     *
     * @return string
     */
    public function getPole6()
    {
        return $this->pole6;
    }

    /**
     * Set pole7
     *
     * @param string $pole7
     *
     * @return Kontrahent
     */
    public function setPole7($pole7)
    {
        $this->pole7 = $pole7;

        return $this;
    }

    /**
     * Get pole7
     *
     * @return string
     */
    public function getPole7()
    {
        return $this->pole7;
    }

    /**
     * Set pole8
     *
     * @param string $pole8
     *
     * @return Kontrahent
     */
    public function setPole8($pole8)
    {
        $this->pole8 = $pole8;

        return $this;
    }

    /**
     * Get pole8
     *
     * @return string
     */
    public function getPole8()
    {
        return $this->pole8;
    }

    /**
     * Set pole9
     *
     * @param string $pole9
     *
     * @return Kontrahent
     */
    public function setPole9($pole9)
    {
        $this->pole9 = $pole9;

        return $this;
    }

    /**
     * Get pole9
     *
     * @return string
     */
    public function getPole9()
    {
        return $this->pole9;
    }

    /**
     * Set pole10
     *
     * @param string $pole10
     *
     * @return Kontrahent
     */
    public function setPole10($pole10)
    {
        $this->pole10 = $pole10;

        return $this;
    }

    /**
     * Get pole10
     *
     * @return string
     */
    public function getPole10()
    {
        return $this->pole10;
    }

    /**
     * Set kontrahentue
     *
     * @param integer $kontrahentue
     *
     * @return Kontrahent
     */
    public function setKontrahentue($kontrahentue)
    {
        $this->kontrahentue = $kontrahentue;

        return $this;
    }

    /**
     * Get kontrahentue
     *
     * @return integer
     */
    public function getKontrahentue()
    {
        return $this->kontrahentue;
    }

    /**
     * Set klucz
     *
     * @param string $klucz
     *
     * @return Kontrahent
     */
    public function setKlucz($klucz)
    {
        $this->klucz = $klucz;

        return $this;
    }

    /**
     * Get klucz
     *
     * @return string
     */
    public function getKlucz()
    {
        return $this->klucz;
    }

    /**
     * Set utworzonyWSystemieZewnetrznym
     *
     * @param integer $utworzonyWSystemieZewnetrznym
     *
     * @return Kontrahent
     */
    public function setUtworzonyWSystemieZewnetrznym($utworzonyWSystemieZewnetrznym)
    {
        $this->utworzonyWSystemieZewnetrznym = $utworzonyWSystemieZewnetrznym;

        return $this;
    }

    /**
     * Get utworzonyWSystemieZewnetrznym
     *
     * @return integer
     */
    public function getUtworzonyWSystemieZewnetrznym()
    {
        return $this->utworzonyWSystemieZewnetrznym;
    }

    /**
     * Set symKrajuKor
     *
     * @param string $symKrajuKor
     *
     * @return Kontrahent
     */
    public function setSymKrajuKor($symKrajuKor)
    {
        $this->symKrajuKor = $symKrajuKor;

        return $this;
    }

    /**
     * Get symKrajuKor
     *
     * @return string
     */
    public function getSymKrajuKor()
    {
        return $this->symKrajuKor;
    }

    /**
     * Set kodPocztowyKor
     *
     * @param string $kodPocztowyKor
     *
     * @return Kontrahent
     */
    public function setKodPocztowyKor($kodPocztowyKor)
    {
        $this->kodPocztowyKor = $kodPocztowyKor;

        return $this;
    }

    /**
     * Get kodPocztowyKor
     *
     * @return string
     */
    public function getKodPocztowyKor()
    {
        return $this->kodPocztowyKor;
    }

    /**
     * Set miejscowoscKor
     *
     * @param string $miejscowoscKor
     *
     * @return Kontrahent
     */
    public function setMiejscowoscKor($miejscowoscKor)
    {
        $this->miejscowoscKor = $miejscowoscKor;

        return $this;
    }

    /**
     * Get miejscowoscKor
     *
     * @return string
     */
    public function getMiejscowoscKor()
    {
        return $this->miejscowoscKor;
    }

    /**
     * Set ulicaLokalKor
     *
     * @param string $ulicaLokalKor
     *
     * @return Kontrahent
     */
    public function setUlicaLokalKor($ulicaLokalKor)
    {
        $this->ulicaLokalKor = $ulicaLokalKor;

        return $this;
    }

    /**
     * Get ulicaLokalKor
     *
     * @return string
     */
    public function getUlicaLokalKor()
    {
        return $this->ulicaLokalKor;
    }

    /**
     * Set wojewodztwoKor
     *
     * @param string $wojewodztwoKor
     *
     * @return Kontrahent
     */
    public function setWojewodztwoKor($wojewodztwoKor)
    {
        $this->wojewodztwoKor = $wojewodztwoKor;

        return $this;
    }

    /**
     * Get wojewodztwoKor
     *
     * @return string
     */
    public function getWojewodztwoKor()
    {
        return $this->wojewodztwoKor;
    }

    /**
     * Set pesel
     *
     * @param string $pesel
     *
     * @return Kontrahent
     */
    public function setPesel($pesel)
    {
        $this->pesel = $pesel;

        return $this;
    }

    /**
     * Get pesel
     *
     * @return string
     */
    public function getPesel()
    {
        return $this->pesel;
    }

    /**
     * Set dokumentTozsamosciNazwa
     *
     * @param string $dokumentTozsamosciNazwa
     *
     * @return Kontrahent
     */
    public function setDokumentTozsamosciNazwa($dokumentTozsamosciNazwa)
    {
        $this->dokumentTozsamosciNazwa = $dokumentTozsamosciNazwa;

        return $this;
    }

    /**
     * Get dokumentTozsamosciNazwa
     *
     * @return string
     */
    public function getDokumentTozsamosciNazwa()
    {
        return $this->dokumentTozsamosciNazwa;
    }

    /**
     * Set dokumentTozsamosciNumer
     *
     * @param string $dokumentTozsamosciNumer
     *
     * @return Kontrahent
     */
    public function setDokumentTozsamosciNumer($dokumentTozsamosciNumer)
    {
        $this->dokumentTozsamosciNumer = $dokumentTozsamosciNumer;

        return $this;
    }

    /**
     * Get dokumentTozsamosciNumer
     *
     * @return string
     */
    public function getDokumentTozsamosciNumer()
    {
        return $this->dokumentTozsamosciNumer;
    }

    /**
     * Set dokumentWydanyPrzez
     *
     * @param string $dokumentWydanyPrzez
     *
     * @return Kontrahent
     */
    public function setDokumentWydanyPrzez($dokumentWydanyPrzez)
    {
        $this->dokumentWydanyPrzez = $dokumentWydanyPrzez;

        return $this;
    }

    /**
     * Get dokumentWydanyPrzez
     *
     * @return string
     */
    public function getDokumentWydanyPrzez()
    {
        return $this->dokumentWydanyPrzez;
    }

    /**
     * Set dokumentDataWydania
     *
     * @param integer $dokumentDataWydania
     *
     * @return Kontrahent
     */
    public function setDokumentDataWydania($dokumentDataWydania)
    {
        $this->dokumentDataWydania = $dokumentDataWydania;

        return $this;
    }

    /**
     * Get dokumentDataWydania
     *
     * @return integer
     */
    public function getDokumentDataWydania()
    {
        return $this->dokumentDataWydania;
    }

    /**
     * Set raksKodKontrahenta
     *
     * @param string $raksKodKontrahenta
     *
     * @return Kontrahent
     */
    public function setRaksKodKontrahenta($raksKodKontrahenta)
    {
        $this->raksKodKontrahenta = $raksKodKontrahenta;

        return $this;
    }

    /**
     * Get raksKodKontrahenta
     *
     * @return string
     */
    public function getRaksKodKontrahenta()
    {
        return $this->raksKodKontrahenta;
    }

    /**
     * Set blokowanie
     *
     * @param integer $blokowanie
     *
     * @return Kontrahent
     */
    public function setBlokowanie($blokowanie)
    {
        $this->blokowanie = $blokowanie;

        return $this;
    }

    /**
     * Get blokowanie
     *
     * @return integer
     */
    public function getBlokowanie()
    {
        return $this->blokowanie;
    }

    /**
     * Set kpIdZdarzenia
     *
     * @param string $kpIdZdarzenia
     *
     * @return Kontrahent
     */
    public function setKpIdZdarzenia($kpIdZdarzenia)
    {
        $this->kpIdZdarzenia = $kpIdZdarzenia;

        return $this;
    }

    /**
     * Get kpIdZdarzenia
     *
     * @return string
     */
    public function getKpIdZdarzenia()
    {
        return $this->kpIdZdarzenia;
    }

    /**
     * Set incydentalny
     *
     * @param integer $incydentalny
     *
     * @return Kontrahent
     */
    public function setIncydentalny($incydentalny)
    {
        $this->incydentalny = $incydentalny;

        return $this;
    }

    /**
     * Get incydentalny
     *
     * @return integer
     */
    public function getIncydentalny()
    {
        return $this->incydentalny;
    }

    /**
     * Set zablokowany
     *
     * @param string $zablokowany
     *
     * @return Kontrahent
     */
    public function setZablokowany($zablokowany)
    {
        $this->zablokowany = $zablokowany;

        return $this;
    }

    /**
     * Get zablokowany
     *
     * @return string
     */
    public function getZablokowany()
    {
        return $this->zablokowany;
    }

    /**
     * Set autofiskalizacja
     *
     * @param string $autofiskalizacja
     *
     * @return Kontrahent
     */
    public function setAutofiskalizacja($autofiskalizacja)
    {
        $this->autofiskalizacja = $autofiskalizacja;

        return $this;
    }

    /**
     * Get autofiskalizacja
     *
     * @return string
     */
    public function getAutofiskalizacja()
    {
        return $this->autofiskalizacja;
    }

    /**
     * Set zbiorczePlatnosci
     *
     * @param string $zbiorczePlatnosci
     *
     * @return Kontrahent
     */
    public function setZbiorczePlatnosci($zbiorczePlatnosci)
    {
        $this->zbiorczePlatnosci = $zbiorczePlatnosci;

        return $this;
    }

    /**
     * Get zbiorczePlatnosci
     *
     * @return string
     */
    public function getZbiorczePlatnosci()
    {
        return $this->zbiorczePlatnosci;
    }

    /**
     * Set lojalPkt
     *
     * @param integer $lojalPkt
     *
     * @return Kontrahent
     */
    public function setLojalPkt($lojalPkt)
    {
        $this->lojalPkt = $lojalPkt;

        return $this;
    }

    /**
     * Get lojalPkt
     *
     * @return integer
     */
    public function getLojalPkt()
    {
        return $this->lojalPkt;
    }

    /**
     * Set lojalWartosc
     *
     * @param string $lojalWartosc
     *
     * @return Kontrahent
     */
    public function setLojalWartosc($lojalWartosc)
    {
        $this->lojalWartosc = $lojalWartosc;

        return $this;
    }

    /**
     * Get lojalWartosc
     *
     * @return string
     */
    public function getLojalWartosc()
    {
        return $this->lojalWartosc;
    }

    /**
     * Set mp
     *
     * @param integer $mp
     *
     * @return Kontrahent
     */
    public function setMp($mp)
    {
        $this->mp = $mp;

        return $this;
    }

    /**
     * Get mp
     *
     * @return integer
     */
    public function getMp()
    {
        return $this->mp;
    }

    /**
     * Set podlegaPromocji
     *
     * @param string $podlegaPromocji
     *
     * @return Kontrahent
     */
    public function setPodlegaPromocji($podlegaPromocji)
    {
        $this->podlegaPromocji = $podlegaPromocji;

        return $this;
    }

    /**
     * Get podlegaPromocji
     *
     * @return string
     */
    public function getPodlegaPromocji()
    {
        return $this->podlegaPromocji;
    }

    /**
     * Set wewnetrzny
     *
     * @param string $wewnetrzny
     *
     * @return Kontrahent
     */
    public function setWewnetrzny($wewnetrzny)
    {
        $this->wewnetrzny = $wewnetrzny;

        return $this;
    }

    /**
     * Get wewnetrzny
     *
     * @return string
     */
    public function getWewnetrzny()
    {
        return $this->wewnetrzny;
    }

    /**
     * Set operatorPlatnosci
     *
     * @param string $operatorPlatnosci
     *
     * @return Kontrahent
     */
    public function setOperatorPlatnosci($operatorPlatnosci)
    {
        $this->operatorPlatnosci = $operatorPlatnosci;

        return $this;
    }

    /**
     * Get operatorPlatnosci
     *
     * @return string
     */
    public function getOperatorPlatnosci()
    {
        return $this->operatorPlatnosci;
    }

    /**
     * Set zgodaNaFakturyElektroniczne
     *
     * @param string $zgodaNaFakturyElektroniczne
     *
     * @return Kontrahent
     */
    public function setZgodaNaFakturyElektroniczne($zgodaNaFakturyElektroniczne)
    {
        $this->zgodaNaFakturyElektroniczne = $zgodaNaFakturyElektroniczne;

        return $this;
    }

    /**
     * Get zgodaNaFakturyElektroniczne
     *
     * @return string
     */
    public function getZgodaNaFakturyElektroniczne()
    {
        return $this->zgodaNaFakturyElektroniczne;
    }

    /**
     * Set idFormyDostawyDom
     *
     * @param string $idFormyDostawyDom
     *
     * @return Kontrahent
     */
    public function setIdFormyDostawyDom($idFormyDostawyDom)
    {
        $this->idFormyDostawyDom = $idFormyDostawyDom;

        return $this;
    }

    /**
     * Get idFormyDostawyDom
     *
     * @return string
     */
    public function getIdFormyDostawyDom()
    {
        return $this->idFormyDostawyDom;
    }

    /**
     * Set idMiejscaDostawyDom
     *
     * @param string $idMiejscaDostawyDom
     *
     * @return Kontrahent
     */
    public function setIdMiejscaDostawyDom($idMiejscaDostawyDom)
    {
        $this->idMiejscaDostawyDom = $idMiejscaDostawyDom;

        return $this;
    }

    /**
     * Get idMiejscaDostawyDom
     *
     * @return string
     */
    public function getIdMiejscaDostawyDom()
    {
        return $this->idMiejscaDostawyDom;
    }

    /**
     * Set idEtykiety
     *
     * @param string $idEtykiety
     *
     * @return Kontrahent
     */
    public function setIdEtykiety($idEtykiety)
    {
        $this->idEtykiety = $idEtykiety;

        return $this;
    }

    /**
     * Get idEtykiety
     *
     * @return string
     */
    public function getIdEtykiety()
    {
        return $this->idEtykiety;
    }

    /**
     * Set nrAkcyzowy
     *
     * @param string $nrAkcyzowy
     *
     * @return Kontrahent
     */
    public function setNrAkcyzowy($nrAkcyzowy)
    {
        $this->nrAkcyzowy = $nrAkcyzowy;

        return $this;
    }

    /**
     * Get nrAkcyzowy
     *
     * @return string
     */
    public function getNrAkcyzowy()
    {
        return $this->nrAkcyzowy;
    }

    /**
     * Set akcyzaZwolniony
     *
     * @param integer $akcyzaZwolniony
     *
     * @return Kontrahent
     */
    public function setAkcyzaZwolniony($akcyzaZwolniony)
    {
        $this->akcyzaZwolniony = $akcyzaZwolniony;

        return $this;
    }

    /**
     * Get akcyzaZwolniony
     *
     * @return integer
     */
    public function getAkcyzaZwolniony()
    {
        return $this->akcyzaZwolniony;
    }

    /**
     * Set domSymWal
     *
     * @param string $domSymWal
     *
     * @return Kontrahent
     */
    public function setDomSymWal($domSymWal)
    {
        $this->domSymWal = $domSymWal;

        return $this;
    }

    /**
     * Get domSymWal
     *
     * @return string
     */
    public function getDomSymWal()
    {
        return $this->domSymWal;
    }

    /**
     * Set vatCzynny
     *
     * @param string $vatCzynny
     *
     * @return Kontrahent
     */
    public function setVatCzynny($vatCzynny)
    {
        $this->vatCzynny = $vatCzynny;

        return $this;
    }

    /**
     * Get vatCzynny
     *
     * @return string
     */
    public function getVatCzynny()
    {
        return $this->vatCzynny;
    }

    /**
     * Set telefonFirmowy
     *
     * @param string $telefonFirmowy
     *
     * @return Kontrahent
     */
    public function setTelefonFirmowy($telefonFirmowy)
    {
        $this->telefonFirmowy = $telefonFirmowy;

        return $this;
    }

    /**
     * Get telefonFirmowy
     *
     * @return string
     */
    public function getTelefonFirmowy()
    {
        return $this->telefonFirmowy;
    }

    /**
     * Set ktoryMailDoRaportow
     *
     * @param integer $ktoryMailDoRaportow
     *
     * @return Kontrahent
     */
    public function setKtoryMailDoRaportow($ktoryMailDoRaportow)
    {
        $this->ktoryMailDoRaportow = $ktoryMailDoRaportow;

        return $this;
    }

    /**
     * Get ktoryMailDoRaportow
     *
     * @return integer
     */
    public function getKtoryMailDoRaportow()
    {
        return $this->ktoryMailDoRaportow;
    }

    /**
     * Set dostepnyWB2b
     *
     * @param integer $dostepnyWB2b
     *
     * @return Kontrahent
     */
    public function setDostepnyWB2b($dostepnyWB2b)
    {
        $this->dostepnyWB2b = $dostepnyWB2b;

        return $this;
    }

    /**
     * Get dostepnyWB2b
     *
     * @return integer
     */
    public function getDostepnyWB2b()
    {
        return $this->dostepnyWB2b;
    }

    /**
     * Set powiat
     *
     * @param string $powiat
     *
     * @return Kontrahent
     */
    public function setPowiat($powiat)
    {
        $this->powiat = $powiat;

        return $this;
    }

    /**
     * Get powiat
     *
     * @return string
     */
    public function getPowiat()
    {
        return $this->powiat;
    }

    /**
     * Set powiatKor
     *
     * @param string $powiatKor
     *
     * @return Kontrahent
     */
    public function setPowiatKor($powiatKor)
    {
        $this->powiatKor = $powiatKor;

        return $this;
    }

    /**
     * Get powiatKor
     *
     * @return string
     */
    public function getPowiatKor()
    {
        return $this->powiatKor;
    }

    /**
     * Set idAllegro
     *
     * @param string $idAllegro
     *
     * @return Kontrahent
     */
    public function setIdAllegro($idAllegro)
    {
        $this->idAllegro = $idAllegro;

        return $this;
    }

    /**
     * Get idAllegro
     *
     * @return string
     */
    public function getIdAllegro()
    {
        return $this->idAllegro;
    }

    /**
     * Set loginAllegro
     *
     * @param string $loginAllegro
     *
     * @return Kontrahent
     */
    public function setLoginAllegro($loginAllegro)
    {
        $this->loginAllegro = $loginAllegro;

        return $this;
    }

    /**
     * Get loginAllegro
     *
     * @return string
     */
    public function getLoginAllegro()
    {
        return $this->loginAllegro;
    }

    /**
     * Set prgLojal
     *
     * @param integer $prgLojal
     *
     * @return Kontrahent
     */
    public function setPrgLojal($prgLojal)
    {
        $this->prgLojal = $prgLojal;

        return $this;
    }

    /**
     * Get prgLojal
     *
     * @return integer
     */
    public function getPrgLojal()
    {
        return $this->prgLojal;
    }

    /**
     * Set prgLojalKwota
     *
     * @param string $prgLojalKwota
     *
     * @return Kontrahent
     */
    public function setPrgLojalKwota($prgLojalKwota)
    {
        $this->prgLojalKwota = $prgLojalKwota;

        return $this;
    }

    /**
     * Get prgLojalKwota
     *
     * @return string
     */
    public function getPrgLojalKwota()
    {
        return $this->prgLojalKwota;
    }

    /**
     * Set dniPoTerminie
     *
     * @param integer $dniPoTerminie
     *
     * @return Kontrahent
     */
    public function setDniPoTerminie($dniPoTerminie)
    {
        $this->dniPoTerminie = $dniPoTerminie;

        return $this;
    }

    /**
     * Get dniPoTerminie
     *
     * @return integer
     */
    public function getDniPoTerminie()
    {
        return $this->dniPoTerminie;
    }
}
