<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artykul
 *
 * @ORM\Table(name="ARTYKUL", uniqueConstraints={@ORM\UniqueConstraint(name="AK_ARTYKUL_SEMAFOR_ARTYKUL", columns={"SEMAFOR", "ID_ARTYKULU"}), @ORM\UniqueConstraint(name="AK_ARTYKUL_IDMAG_IKAT_ARTYKUL", columns={"ID_MAGAZYNU", "INDEKS_KATALOGOWY"})}, indexes={@ORM\Index(name="ARTYKUL_IDMAG_NAZWA", columns={"ID_MAGAZYNU", "NAZWA"}), @ORM\Index(name="ARTYKUL_IDMAG_NAZWA2", columns={"ID_MAGAZYNU", "NAZWA", "NAZWA2"}), @ORM\Index(name="ARTYKUL_IDMAG_NAZWA_CALA", columns={"ID_MAGAZYNU", "NAZWA_CALA"}), @ORM\Index(name="ARTYKUL_IDMAG_IDKAT_NAZWA", columns={"ID_MAGAZYNU", "ID_KATEGORII", "NAZWA"}), @ORM\Index(name="ARTYKUL_IDMAG_RODZ_NAZWA", columns={"ID_MAGAZYNU", "RODZAJ", "NAZWA"}), @ORM\Index(name="ARTYKUL_IDMAG_IHANDL", columns={"ID_MAGAZYNU", "INDEKS_HANDLOWY", "INDEKS_KATALOGOWY"}), @ORM\Index(name="ARTYKUL_IDMAG_IKATAL", columns={"ID_MAGAZYNU", "INDEKS_KATALOGOWY"}), @ORM\Index(name="IDX_ARTYKUL_IKATAL", columns={"INDEKS_KATALOGOWY", "ID_MAGAZYNU"}), @ORM\Index(name="ARTYKUL_IDMAG_PLU", columns={"ID_MAGAZYNU", "PLU"}), @ORM\Index(name="ARTYKUL_IDMAG_STAN", columns={"ID_MAGAZYNU", "STAN"}), @ORM\Index(name="ARTYKUL_IDMAG_ZAM", columns={"ID_MAGAZYNU", "DO_ODBIORCOW", "OD_DOSTAWCOW"}), @ORM\Index(name="ARTYKUL_IDMAG_PROD", columns={"ID_MAGAZYNU", "ID_ARTYKULU_PROD"}), @ORM\Index(name="ARTYKUL_IDMAG_IKATTOOWZAST", columns={"ID_MAGAZYNU", "IND_KAT_TOWAR_ZAST"}), @ORM\Index(name="ARTYKUL_IDCENDOM", columns={"ID_CENY_DOM"}), @ORM\Index(name="ARTYKUL_NAZWAORG_IDM", columns={"NAZWA_ORYG", "ID_MAGAZYNU"}), @ORM\Index(name="ARTYKUL_IDMAG_KODKRESK", columns={"ID_MAGAZYNU", "KOD_KRESKOWY"}), @ORM\Index(name="ARTYKUL_IDMAG_MINMAX", columns={"ID_MAGAZYNU", "STAN_MAKSYMALNY", "STAN_MINIMALNY"}), @ORM\Index(name="ARTYKUL_IDKAT", columns={"ID_KATEGORII"}), @ORM\Index(name="ARTYKUL_IDMAG_WYROZNIK", columns={"ID_MAGAZYNU", "WYROZNIK"}), @ORM\Index(name="ARTYKUL_IDMAG_LOKAL", columns={"ID_MAGAZYNU", "LOKALIZACJA"}), @ORM\Index(name="ARTYKUL_IDMAGZAMRODZ", columns={"ID_MAGAZYNU", "ZAMOWIONO", "RODZAJ"}), @ORM\Index(name="ARTYKUL_ID_ART_PROD", columns={"ID_ARTYKULU_PROD"}), @ORM\Index(name="IDX_ARTYKUL_IDOBJREF", columns={"ID_OPAKOWANIA_REF"}), @ORM\Index(name="IDX_ARTYKUL_IDKATTREE", columns={"ID_KATEGORII_TREE"}), @ORM\Index(name="GUID_ARTYKUL_INDEX", columns={"GUID_ARTYKUL"}), @ORM\Index(name="ARTYKUL_DOSTEPNY_W_SKLEPIE_INTER", columns={"ID_ARTYKULU", "INDEKS_KATALOGOWY", "ID_MAGAZYNU", "DOSTEPNY_W_SKLEPIE_INTER"})})
 * @ORM\Entity
 */
class Artykul
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_ARTYKULU", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KATEGORII", type="string", length=9, nullable=true)
     */
    private $idKategorii;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENY_DOM", type="string", length=9, nullable=true)
     */
    private $idCenyDom;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_JEDNOSTKI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idJednostki;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_JEDNOSTKI_ZAK", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idJednostkiZak;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_JEDNOSTKI_SPRZ", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idJednostkiSprz;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_ZAKUPU", type="string", length=3, nullable=true)
     */
    private $vatZakupu;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_SPRZEDAZY", type="string", length=3, nullable=true)
     */
    private $vatSprzedazy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=40, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_ORYG", type="string", length=100, nullable=true)
     */
    private $nazwaOryg;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA2", type="string", length=40, nullable=true)
     */
    private $nazwa2;

    /**
     * @var string
     *
     * @ORM\Column(name="STAN", type="string", length=9, nullable=true)
     */
    private $stan = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC_EDYTOWANA", type="string", length=9, nullable=true)
     */
    private $iloscEdytowana = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZAMOWIONO", type="string", length=9, nullable=true)
     */
    private $zamowiono = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DO_REZERWACJI", type="string", length=9, nullable=true)
     */
    private $doRezerwacji = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZAREZERWOWANO", type="decimal", precision=16, scale=6, nullable=false)
     */
    private $zarezerwowano = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="OD_DOSTAWCOW", type="decimal", precision=16, scale=6, nullable=true)
     */
    private $odDostawcow;

    /**
     * @var string
     *
     * @ORM\Column(name="DO_ODBIORCOW", type="decimal", precision=16, scale=6, nullable=true)
     */
    private $doOdbiorcow;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEKS_KATALOGOWY", type="string", length=20, nullable=false)
     */
    private $indeksKatalogowy = '';

    /**
     * @var string
     *
     * @ORM\Column(name="IND_KAT_TOWAR_ZAST", type="string", length=20, nullable=true)
     */
    private $indKatTowarZast;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEKS_HANDLOWY", type="string", length=20, nullable=false)
     */
    private $indeksHandlowy = '';

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ", type="string", length=10, nullable=true)
     */
    private $rodzaj;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLU", type="integer", nullable=true)
     */
    private $plu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SWWKU", type="string", length=10, nullable=true)
     */
    private $swwku;

    /**
     * @var string
     *
     * @ORM\Column(name="PKWIU", type="string", length=14, nullable=true)
     */
    private $pkwiu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=20, nullable=true)
     */
    private $kodKreskowy = '';

    /**
     * @var string
     *
     * @ORM\Column(name="STAN_MINIMALNY", type="string", length=9, nullable=true)
     */
    private $stanMinimalny;

    /**
     * @var string
     *
     * @ORM\Column(name="STAN_MAKSYMALNY", type="string", length=9, nullable=true)
     */
    private $stanMaksymalny;

    /**
     * @var string
     *
     * @ORM\Column(name="CERTYFIKAT", type="string", length=1, nullable=true)
     */
    private $certyfikat;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_CERTYFIKATU", type="string", length=4, nullable=true)
     */
    private $dataCertyfikatu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_CERTYFIKATU", type="string", length=50, nullable=true)
     */
    private $nazwaCertyfikatu;

    /**
     * @var string
     *
     * @ORM\Column(name="LOKALIZACJA", type="string", length=30, nullable=true)
     */
    private $lokalizacja = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_ZAKUPU_BRUTTO", type="string", length=9, nullable=true)
     */
    private $cenaZakupuBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_ZAKUPU_NETTO", type="string", length=9, nullable=true)
     */
    private $cenaZakupuNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_ZM_CZ", type="string", length=4, nullable=false)
     */
    private $dataZmCz = '36163';

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=1000, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="OSTRZEZENIE", type="string", length=500, nullable=true)
     */
    private $ostrzezenie;

    /**
     * @var string
     *
     * @ORM\Column(name="POKAZUJ_OSTRZEZENIE", type="string", length=1, nullable=true)
     */
    private $pokazujOstrzezenie;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="string", length=9, nullable=true)
     */
    private $semafor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="FLAGA_STANU", type="string", length=1, nullable=true)
     */
    private $flagaStanu = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU_PROD", type="string", length=9, nullable=true)
     */
    private $idArtykuluProd;

    /**
     * @var string
     *
     * @ORM\Column(name="JEDNOSTKA_PROD", type="string", length=10, nullable=true)
     */
    private $jednostkaProd;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_PROD", type="string", length=9, nullable=true)
     */
    private $przelicznikProd;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC_PROD", type="string", length=9, nullable=true)
     */
    private $iloscProd;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=1000, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="KRAJ_POCHODZENIA", type="string", length=3, nullable=true)
     */
    private $krajPochodzenia;

    /**
     * @var string
     *
     * @ORM\Column(name="WAGA", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $waga;

    /**
     * @var string
     *
     * @ORM\Column(name="JED_WAGI", type="string", length=10, nullable=true)
     */
    private $jedWagi;

    /**
     * @var string
     *
     * @ORM\Column(name="WYMIAR_W", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $wymiarW;

    /**
     * @var string
     *
     * @ORM\Column(name="WYMIAR_S", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $wymiarS;

    /**
     * @var string
     *
     * @ORM\Column(name="WYMIAR_G", type="decimal", precision=20, scale=3, nullable=true)
     */
    private $wymiarG;

    /**
     * @var string
     *
     * @ORM\Column(name="JED_WYMIARU", type="string", length=10, nullable=true)
     */
    private $jedWymiaru;

    /**
     * @var string
     *
     * @ORM\Column(name="WYROZNIK", type="string", length=50, nullable=true)
     */
    private $wyroznik = '';

    /**
     * @var string
     *
     * @ORM\Column(name="C_ZAKUPU_NETTO_WAL", type="string", length=9, nullable=true)
     */
    private $cZakupuNettoWal;

    /**
     * @var string
     *
     * @ORM\Column(name="C_ZAKUPU_BRUTTO_WAL", type="string", length=9, nullable=true)
     */
    private $cZakupuBruttoWal;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal;

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
     * @var uniqueidentifier
     *
     * @ORM\Column(name="GUID_ARTYKUL", type="uniqueidentifier", nullable=true)
     */
    private $guidArtykul = 'newid()';

    /**
     * @var string
     *
     * @ORM\Column(name="PODLEGA_RABATOWANIU", type="string", length=1, nullable=true)
     */
    private $podlegaRabatowaniu = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_CN", type="string", length=20, nullable=true)
     */
    private $kodCn;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_INTRASTAT", type="string", length=50, nullable=true)
     */
    private $nazwaIntrastat = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_JEDNOSTKI_REF", type="string", length=9, nullable=true)
     */
    private $idJednostkiRef;

    /**
     * @var string
     *
     * @ORM\Column(name="PROMOCJA_OD", type="string", length=4, nullable=true)
     */
    private $promocjaOd;

    /**
     * @var string
     *
     * @ORM\Column(name="PROMOCJA_DO", type="string", length=4, nullable=true)
     */
    private $promocjaDo;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_PROMOCJI_N", type="string", length=9, nullable=true)
     */
    private $cenaPromocjiN;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_PROMOCJI_B", type="string", length=9, nullable=true)
     */
    private $cenaPromocjiB;

    /**
     * @var string
     *
     * @ORM\Column(name="PROMOCJA_PROCENT", type="string", length=5, nullable=true)
     */
    private $promocjaProcent = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PROMOCJA_RABAT", type="string", length=1, nullable=true)
     */
    private $promocjaRabat = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZABLOKOWANY", type="string", length=1, nullable=true)
     */
    private $zablokowany = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WYLACZ_CENY_IND", type="string", length=10, nullable=true)
     */
    private $wylaczCenyInd = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AKT_CEN_PRZY_DOSTAWIE", type="string", length=1, nullable=true)
     */
    private $aktCenPrzyDostawie = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="PRODUCENT", type="string", length=50, nullable=true)
     */
    private $producent;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OPAKOWANIA_REF", type="string", length=9, nullable=true)
     */
    private $idOpakowaniaRef;

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
     * @var integer
     *
     * @ORM\Column(name="JEST_ZDJECIE", type="smallint", nullable=true)
     */
    private $jestZdjecie = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AKTYWNY_DLA_SYS_ZEW", type="string", length=1, nullable=false)
     */
    private $aktywnyDlaSysZew = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MIN_NARZUT", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $minNarzut = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WYMUSZAJ_DOSTAWY", type="string", length=1, nullable=true)
     */
    private $wymuszajDostawy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FPROM", type="string", length=9, nullable=true)
     */
    private $idFprom;

    /**
     * @var string
     *
     * @ORM\Column(name="MARZOWY", type="string", length=1, nullable=true)
     */
    private $marzowy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY_VAT_ZA_GRANICA", type="string", length=1, nullable=true)
     */
    private $domyslnyVatZaGranica = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DOSTEPNY_W_SKLEPIE_INTER", type="string", length=1, nullable=true)
     */
    private $dostepnyWSklepieInter = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ZASADA_ZDEJMOWANIA_ZE_STANU", type="string", length=10, nullable=true)
     */
    private $zasadaZdejmowaniaZeStanu = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ETYKIETY", type="string", length=9, nullable=true)
     */
    private $idEtykiety = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AKCYZA", type="string", length=1, nullable=true)
     */
    private $akcyza = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AKCYZA_JM", type="string", length=10, nullable=true)
     */
    private $akcyzaJm = '';

    /**
     * @var string
     *
     * @ORM\Column(name="AKCYZA_PRZELICZNIK", type="decimal", precision=14, scale=6, nullable=true)
     */
    private $akcyzaPrzelicznik = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="AKCYZA_STAWKA_ZA_JM", type="string", length=9, nullable=true)
     */
    private $akcyzaStawkaZaJm = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ODWROTNY", type="string", length=1, nullable=true)
     */
    private $odwrotny = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRODUCENTA", type="string", length=9, nullable=true)
     */
    private $idProducenta;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOSTAWCY_PREFEROWANEGO", type="string", length=9, nullable=true)
     */
    private $idDostawcyPreferowanego;

    /**
     * @var string
     *
     * @ORM\Column(name="DOSTEPNY_W_AUKCJACH", type="string", length=1, nullable=true)
     */
    private $dostepnyWAukcjach = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_CALA", type="string", length=100, nullable=true)
     */
    private $nazwaCala;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KATEGORII_TREE", type="string", length=9, nullable=true)
     */
    private $idKategoriiTree;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRG_LOJAL", type="smallint", nullable=true)
     */
    private $prgLojal = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="PRG_ILOSC", type="integer", nullable=true)
     */
    private $prgIlosc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AKCYZA_PRZELICZNIK_JM_JA", type="decimal", precision=14, scale=6, nullable=true)
     */
    private $akcyzaPrzelicznikJmJa = '1';



    /**
     * Get idArtykulu
     *
     * @return integer
     */
    public function getIdArtykulu()
    {
        return $this->idArtykulu;
    }

    /**
     * Set idMagazynu
     *
     * @param string $idMagazynu
     *
     * @return Artykul
     */
    public function setIdMagazynu($idMagazynu)
    {
        $this->idMagazynu = $idMagazynu;

        return $this;
    }

    /**
     * Get idMagazynu
     *
     * @return string
     */
    public function getIdMagazynu()
    {
        return $this->idMagazynu;
    }

    /**
     * Set idKategorii
     *
     * @param string $idKategorii
     *
     * @return Artykul
     */
    public function setIdKategorii($idKategorii)
    {
        $this->idKategorii = $idKategorii;

        return $this;
    }

    /**
     * Get idKategorii
     *
     * @return string
     */
    public function getIdKategorii()
    {
        return $this->idKategorii;
    }

    /**
     * Set idCenyDom
     *
     * @param string $idCenyDom
     *
     * @return Artykul
     */
    public function setIdCenyDom($idCenyDom)
    {
        $this->idCenyDom = $idCenyDom;

        return $this;
    }

    /**
     * Get idCenyDom
     *
     * @return string
     */
    public function getIdCenyDom()
    {
        return $this->idCenyDom;
    }

    /**
     * Set idJednostki
     *
     * @param string $idJednostki
     *
     * @return Artykul
     */
    public function setIdJednostki($idJednostki)
    {
        $this->idJednostki = $idJednostki;

        return $this;
    }

    /**
     * Get idJednostki
     *
     * @return string
     */
    public function getIdJednostki()
    {
        return $this->idJednostki;
    }

    /**
     * Set idJednostkiZak
     *
     * @param string $idJednostkiZak
     *
     * @return Artykul
     */
    public function setIdJednostkiZak($idJednostkiZak)
    {
        $this->idJednostkiZak = $idJednostkiZak;

        return $this;
    }

    /**
     * Get idJednostkiZak
     *
     * @return string
     */
    public function getIdJednostkiZak()
    {
        return $this->idJednostkiZak;
    }

    /**
     * Set idJednostkiSprz
     *
     * @param string $idJednostkiSprz
     *
     * @return Artykul
     */
    public function setIdJednostkiSprz($idJednostkiSprz)
    {
        $this->idJednostkiSprz = $idJednostkiSprz;

        return $this;
    }

    /**
     * Get idJednostkiSprz
     *
     * @return string
     */
    public function getIdJednostkiSprz()
    {
        return $this->idJednostkiSprz;
    }

    /**
     * Set vatZakupu
     *
     * @param string $vatZakupu
     *
     * @return Artykul
     */
    public function setVatZakupu($vatZakupu)
    {
        $this->vatZakupu = $vatZakupu;

        return $this;
    }

    /**
     * Get vatZakupu
     *
     * @return string
     */
    public function getVatZakupu()
    {
        return $this->vatZakupu;
    }

    /**
     * Set vatSprzedazy
     *
     * @param string $vatSprzedazy
     *
     * @return Artykul
     */
    public function setVatSprzedazy($vatSprzedazy)
    {
        $this->vatSprzedazy = $vatSprzedazy;

        return $this;
    }

    /**
     * Get vatSprzedazy
     *
     * @return string
     */
    public function getVatSprzedazy()
    {
        return $this->vatSprzedazy;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return Artykul
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
     * Set nazwaOryg
     *
     * @param string $nazwaOryg
     *
     * @return Artykul
     */
    public function setNazwaOryg($nazwaOryg)
    {
        $this->nazwaOryg = $nazwaOryg;

        return $this;
    }

    /**
     * Get nazwaOryg
     *
     * @return string
     */
    public function getNazwaOryg()
    {
        return $this->nazwaOryg;
    }

    /**
     * Set nazwa2
     *
     * @param string $nazwa2
     *
     * @return Artykul
     */
    public function setNazwa2($nazwa2)
    {
        $this->nazwa2 = $nazwa2;

        return $this;
    }

    /**
     * Get nazwa2
     *
     * @return string
     */
    public function getNazwa2()
    {
        return $this->nazwa2;
    }

    /**
     * Set stan
     *
     * @param string $stan
     *
     * @return Artykul
     */
    public function setStan($stan)
    {
        $this->stan = $stan;

        return $this;
    }

    /**
     * Get stan
     *
     * @return string
     */
    public function getStan()
    {
        return $this->stan;
    }

    /**
     * Set iloscEdytowana
     *
     * @param string $iloscEdytowana
     *
     * @return Artykul
     */
    public function setIloscEdytowana($iloscEdytowana)
    {
        $this->iloscEdytowana = $iloscEdytowana;

        return $this;
    }

    /**
     * Get iloscEdytowana
     *
     * @return string
     */
    public function getIloscEdytowana()
    {
        return $this->iloscEdytowana;
    }

    /**
     * Set zamowiono
     *
     * @param string $zamowiono
     *
     * @return Artykul
     */
    public function setZamowiono($zamowiono)
    {
        $this->zamowiono = $zamowiono;

        return $this;
    }

    /**
     * Get zamowiono
     *
     * @return string
     */
    public function getZamowiono()
    {
        return $this->zamowiono;
    }

    /**
     * Set doRezerwacji
     *
     * @param string $doRezerwacji
     *
     * @return Artykul
     */
    public function setDoRezerwacji($doRezerwacji)
    {
        $this->doRezerwacji = $doRezerwacji;

        return $this;
    }

    /**
     * Get doRezerwacji
     *
     * @return string
     */
    public function getDoRezerwacji()
    {
        return $this->doRezerwacji;
    }

    /**
     * Set zarezerwowano
     *
     * @param string $zarezerwowano
     *
     * @return Artykul
     */
    public function setZarezerwowano($zarezerwowano)
    {
        $this->zarezerwowano = $zarezerwowano;

        return $this;
    }

    /**
     * Get zarezerwowano
     *
     * @return string
     */
    public function getZarezerwowano()
    {
        return $this->zarezerwowano;
    }

    /**
     * Set odDostawcow
     *
     * @param string $odDostawcow
     *
     * @return Artykul
     */
    public function setOdDostawcow($odDostawcow)
    {
        $this->odDostawcow = $odDostawcow;

        return $this;
    }

    /**
     * Get odDostawcow
     *
     * @return string
     */
    public function getOdDostawcow()
    {
        return $this->odDostawcow;
    }

    /**
     * Set doOdbiorcow
     *
     * @param string $doOdbiorcow
     *
     * @return Artykul
     */
    public function setDoOdbiorcow($doOdbiorcow)
    {
        $this->doOdbiorcow = $doOdbiorcow;

        return $this;
    }

    /**
     * Get doOdbiorcow
     *
     * @return string
     */
    public function getDoOdbiorcow()
    {
        return $this->doOdbiorcow;
    }

    /**
     * Set indeksKatalogowy
     *
     * @param string $indeksKatalogowy
     *
     * @return Artykul
     */
    public function setIndeksKatalogowy($indeksKatalogowy)
    {
        $this->indeksKatalogowy = $indeksKatalogowy;

        return $this;
    }

    /**
     * Get indeksKatalogowy
     *
     * @return string
     */
    public function getIndeksKatalogowy()
    {
        return $this->indeksKatalogowy;
    }

    /**
     * Set indKatTowarZast
     *
     * @param string $indKatTowarZast
     *
     * @return Artykul
     */
    public function setIndKatTowarZast($indKatTowarZast)
    {
        $this->indKatTowarZast = $indKatTowarZast;

        return $this;
    }

    /**
     * Get indKatTowarZast
     *
     * @return string
     */
    public function getIndKatTowarZast()
    {
        return $this->indKatTowarZast;
    }

    /**
     * Set indeksHandlowy
     *
     * @param string $indeksHandlowy
     *
     * @return Artykul
     */
    public function setIndeksHandlowy($indeksHandlowy)
    {
        $this->indeksHandlowy = $indeksHandlowy;

        return $this;
    }

    /**
     * Get indeksHandlowy
     *
     * @return string
     */
    public function getIndeksHandlowy()
    {
        return $this->indeksHandlowy;
    }

    /**
     * Set rodzaj
     *
     * @param string $rodzaj
     *
     * @return Artykul
     */
    public function setRodzaj($rodzaj)
    {
        $this->rodzaj = $rodzaj;

        return $this;
    }

    /**
     * Get rodzaj
     *
     * @return string
     */
    public function getRodzaj()
    {
        return $this->rodzaj;
    }

    /**
     * Set plu
     *
     * @param integer $plu
     *
     * @return Artykul
     */
    public function setPlu($plu)
    {
        $this->plu = $plu;

        return $this;
    }

    /**
     * Get plu
     *
     * @return integer
     */
    public function getPlu()
    {
        return $this->plu;
    }

    /**
     * Set swwku
     *
     * @param string $swwku
     *
     * @return Artykul
     */
    public function setSwwku($swwku)
    {
        $this->swwku = $swwku;

        return $this;
    }

    /**
     * Get swwku
     *
     * @return string
     */
    public function getSwwku()
    {
        return $this->swwku;
    }

    /**
     * Set pkwiu
     *
     * @param string $pkwiu
     *
     * @return Artykul
     */
    public function setPkwiu($pkwiu)
    {
        $this->pkwiu = $pkwiu;

        return $this;
    }

    /**
     * Get pkwiu
     *
     * @return string
     */
    public function getPkwiu()
    {
        return $this->pkwiu;
    }

    /**
     * Set kodKreskowy
     *
     * @param string $kodKreskowy
     *
     * @return Artykul
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
     * Set stanMinimalny
     *
     * @param string $stanMinimalny
     *
     * @return Artykul
     */
    public function setStanMinimalny($stanMinimalny)
    {
        $this->stanMinimalny = $stanMinimalny;

        return $this;
    }

    /**
     * Get stanMinimalny
     *
     * @return string
     */
    public function getStanMinimalny()
    {
        return $this->stanMinimalny;
    }

    /**
     * Set stanMaksymalny
     *
     * @param string $stanMaksymalny
     *
     * @return Artykul
     */
    public function setStanMaksymalny($stanMaksymalny)
    {
        $this->stanMaksymalny = $stanMaksymalny;

        return $this;
    }

    /**
     * Get stanMaksymalny
     *
     * @return string
     */
    public function getStanMaksymalny()
    {
        return $this->stanMaksymalny;
    }

    /**
     * Set certyfikat
     *
     * @param string $certyfikat
     *
     * @return Artykul
     */
    public function setCertyfikat($certyfikat)
    {
        $this->certyfikat = $certyfikat;

        return $this;
    }

    /**
     * Get certyfikat
     *
     * @return string
     */
    public function getCertyfikat()
    {
        return $this->certyfikat;
    }

    /**
     * Set dataCertyfikatu
     *
     * @param string $dataCertyfikatu
     *
     * @return Artykul
     */
    public function setDataCertyfikatu($dataCertyfikatu)
    {
        $this->dataCertyfikatu = $dataCertyfikatu;

        return $this;
    }

    /**
     * Get dataCertyfikatu
     *
     * @return string
     */
    public function getDataCertyfikatu()
    {
        return $this->dataCertyfikatu;
    }

    /**
     * Set nazwaCertyfikatu
     *
     * @param string $nazwaCertyfikatu
     *
     * @return Artykul
     */
    public function setNazwaCertyfikatu($nazwaCertyfikatu)
    {
        $this->nazwaCertyfikatu = $nazwaCertyfikatu;

        return $this;
    }

    /**
     * Get nazwaCertyfikatu
     *
     * @return string
     */
    public function getNazwaCertyfikatu()
    {
        return $this->nazwaCertyfikatu;
    }

    /**
     * Set lokalizacja
     *
     * @param string $lokalizacja
     *
     * @return Artykul
     */
    public function setLokalizacja($lokalizacja)
    {
        $this->lokalizacja = $lokalizacja;

        return $this;
    }

    /**
     * Get lokalizacja
     *
     * @return string
     */
    public function getLokalizacja()
    {
        return $this->lokalizacja;
    }

    /**
     * Set cenaZakupuBrutto
     *
     * @param string $cenaZakupuBrutto
     *
     * @return Artykul
     */
    public function setCenaZakupuBrutto($cenaZakupuBrutto)
    {
        $this->cenaZakupuBrutto = $cenaZakupuBrutto;

        return $this;
    }

    /**
     * Get cenaZakupuBrutto
     *
     * @return string
     */
    public function getCenaZakupuBrutto()
    {
        return $this->cenaZakupuBrutto;
    }

    /**
     * Set cenaZakupuNetto
     *
     * @param string $cenaZakupuNetto
     *
     * @return Artykul
     */
    public function setCenaZakupuNetto($cenaZakupuNetto)
    {
        $this->cenaZakupuNetto = $cenaZakupuNetto;

        return $this;
    }

    /**
     * Get cenaZakupuNetto
     *
     * @return string
     */
    public function getCenaZakupuNetto()
    {
        return $this->cenaZakupuNetto;
    }

    /**
     * Set dataZmCz
     *
     * @param string $dataZmCz
     *
     * @return Artykul
     */
    public function setDataZmCz($dataZmCz)
    {
        $this->dataZmCz = $dataZmCz;

        return $this;
    }

    /**
     * Get dataZmCz
     *
     * @return string
     */
    public function getDataZmCz()
    {
        return $this->dataZmCz;
    }

    /**
     * Set opis
     *
     * @param string $opis
     *
     * @return Artykul
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set ostrzezenie
     *
     * @param string $ostrzezenie
     *
     * @return Artykul
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
     * Set pokazujOstrzezenie
     *
     * @param string $pokazujOstrzezenie
     *
     * @return Artykul
     */
    public function setPokazujOstrzezenie($pokazujOstrzezenie)
    {
        $this->pokazujOstrzezenie = $pokazujOstrzezenie;

        return $this;
    }

    /**
     * Get pokazujOstrzezenie
     *
     * @return string
     */
    public function getPokazujOstrzezenie()
    {
        return $this->pokazujOstrzezenie;
    }

    /**
     * Set semafor
     *
     * @param string $semafor
     *
     * @return Artykul
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
     * @param string $flagaStanu
     *
     * @return Artykul
     */
    public function setFlagaStanu($flagaStanu)
    {
        $this->flagaStanu = $flagaStanu;

        return $this;
    }

    /**
     * Get flagaStanu
     *
     * @return string
     */
    public function getFlagaStanu()
    {
        return $this->flagaStanu;
    }

    /**
     * Set idArtykuluProd
     *
     * @param string $idArtykuluProd
     *
     * @return Artykul
     */
    public function setIdArtykuluProd($idArtykuluProd)
    {
        $this->idArtykuluProd = $idArtykuluProd;

        return $this;
    }

    /**
     * Get idArtykuluProd
     *
     * @return string
     */
    public function getIdArtykuluProd()
    {
        return $this->idArtykuluProd;
    }

    /**
     * Set jednostkaProd
     *
     * @param string $jednostkaProd
     *
     * @return Artykul
     */
    public function setJednostkaProd($jednostkaProd)
    {
        $this->jednostkaProd = $jednostkaProd;

        return $this;
    }

    /**
     * Get jednostkaProd
     *
     * @return string
     */
    public function getJednostkaProd()
    {
        return $this->jednostkaProd;
    }

    /**
     * Set przelicznikProd
     *
     * @param string $przelicznikProd
     *
     * @return Artykul
     */
    public function setPrzelicznikProd($przelicznikProd)
    {
        $this->przelicznikProd = $przelicznikProd;

        return $this;
    }

    /**
     * Get przelicznikProd
     *
     * @return string
     */
    public function getPrzelicznikProd()
    {
        return $this->przelicznikProd;
    }

    /**
     * Set iloscProd
     *
     * @param string $iloscProd
     *
     * @return Artykul
     */
    public function setIloscProd($iloscProd)
    {
        $this->iloscProd = $iloscProd;

        return $this;
    }

    /**
     * Get iloscProd
     *
     * @return string
     */
    public function getIloscProd()
    {
        return $this->iloscProd;
    }

    /**
     * Set uwagi
     *
     * @param string $uwagi
     *
     * @return Artykul
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
     * Set krajPochodzenia
     *
     * @param string $krajPochodzenia
     *
     * @return Artykul
     */
    public function setKrajPochodzenia($krajPochodzenia)
    {
        $this->krajPochodzenia = $krajPochodzenia;

        return $this;
    }

    /**
     * Get krajPochodzenia
     *
     * @return string
     */
    public function getKrajPochodzenia()
    {
        return $this->krajPochodzenia;
    }

    /**
     * Set waga
     *
     * @param string $waga
     *
     * @return Artykul
     */
    public function setWaga($waga)
    {
        $this->waga = $waga;

        return $this;
    }

    /**
     * Get waga
     *
     * @return string
     */
    public function getWaga()
    {
        return $this->waga;
    }

    /**
     * Set jedWagi
     *
     * @param string $jedWagi
     *
     * @return Artykul
     */
    public function setJedWagi($jedWagi)
    {
        $this->jedWagi = $jedWagi;

        return $this;
    }

    /**
     * Get jedWagi
     *
     * @return string
     */
    public function getJedWagi()
    {
        return $this->jedWagi;
    }

    /**
     * Set wymiarW
     *
     * @param string $wymiarW
     *
     * @return Artykul
     */
    public function setWymiarW($wymiarW)
    {
        $this->wymiarW = $wymiarW;

        return $this;
    }

    /**
     * Get wymiarW
     *
     * @return string
     */
    public function getWymiarW()
    {
        return $this->wymiarW;
    }

    /**
     * Set wymiarS
     *
     * @param string $wymiarS
     *
     * @return Artykul
     */
    public function setWymiarS($wymiarS)
    {
        $this->wymiarS = $wymiarS;

        return $this;
    }

    /**
     * Get wymiarS
     *
     * @return string
     */
    public function getWymiarS()
    {
        return $this->wymiarS;
    }

    /**
     * Set wymiarG
     *
     * @param string $wymiarG
     *
     * @return Artykul
     */
    public function setWymiarG($wymiarG)
    {
        $this->wymiarG = $wymiarG;

        return $this;
    }

    /**
     * Get wymiarG
     *
     * @return string
     */
    public function getWymiarG()
    {
        return $this->wymiarG;
    }

    /**
     * Set jedWymiaru
     *
     * @param string $jedWymiaru
     *
     * @return Artykul
     */
    public function setJedWymiaru($jedWymiaru)
    {
        $this->jedWymiaru = $jedWymiaru;

        return $this;
    }

    /**
     * Get jedWymiaru
     *
     * @return string
     */
    public function getJedWymiaru()
    {
        return $this->jedWymiaru;
    }

    /**
     * Set wyroznik
     *
     * @param string $wyroznik
     *
     * @return Artykul
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
     * Set cZakupuNettoWal
     *
     * @param string $cZakupuNettoWal
     *
     * @return Artykul
     */
    public function setCZakupuNettoWal($cZakupuNettoWal)
    {
        $this->cZakupuNettoWal = $cZakupuNettoWal;

        return $this;
    }

    /**
     * Get cZakupuNettoWal
     *
     * @return string
     */
    public function getCZakupuNettoWal()
    {
        return $this->cZakupuNettoWal;
    }

    /**
     * Set cZakupuBruttoWal
     *
     * @param string $cZakupuBruttoWal
     *
     * @return Artykul
     */
    public function setCZakupuBruttoWal($cZakupuBruttoWal)
    {
        $this->cZakupuBruttoWal = $cZakupuBruttoWal;

        return $this;
    }

    /**
     * Get cZakupuBruttoWal
     *
     * @return string
     */
    public function getCZakupuBruttoWal()
    {
        return $this->cZakupuBruttoWal;
    }

    /**
     * Set symWal
     *
     * @param string $symWal
     *
     * @return Artykul
     */
    public function setSymWal($symWal)
    {
        $this->symWal = $symWal;

        return $this;
    }

    /**
     * Get symWal
     *
     * @return string
     */
    public function getSymWal()
    {
        return $this->symWal;
    }

    /**
     * Set pole1
     *
     * @param string $pole1
     *
     * @return Artykul
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
     * @return Artykul
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
     * @return Artykul
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
     * @return Artykul
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
     * @return Artykul
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
     * @return Artykul
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
     * @return Artykul
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
     * @return Artykul
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
     * @return Artykul
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
     * @return Artykul
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
     * Set guidArtykul
     *
     * @param uniqueidentifier $guidArtykul
     *
     * @return Artykul
     */
    public function setGuidArtykul($guidArtykul)
    {
        $this->guidArtykul = $guidArtykul;

        return $this;
    }

    /**
     * Get guidArtykul
     *
     * @return uniqueidentifier
     */
    public function getGuidArtykul()
    {
        return $this->guidArtykul;
    }

    /**
     * Set podlegaRabatowaniu
     *
     * @param string $podlegaRabatowaniu
     *
     * @return Artykul
     */
    public function setPodlegaRabatowaniu($podlegaRabatowaniu)
    {
        $this->podlegaRabatowaniu = $podlegaRabatowaniu;

        return $this;
    }

    /**
     * Get podlegaRabatowaniu
     *
     * @return string
     */
    public function getPodlegaRabatowaniu()
    {
        return $this->podlegaRabatowaniu;
    }

    /**
     * Set kodCn
     *
     * @param string $kodCn
     *
     * @return Artykul
     */
    public function setKodCn($kodCn)
    {
        $this->kodCn = $kodCn;

        return $this;
    }

    /**
     * Get kodCn
     *
     * @return string
     */
    public function getKodCn()
    {
        return $this->kodCn;
    }

    /**
     * Set nazwaIntrastat
     *
     * @param string $nazwaIntrastat
     *
     * @return Artykul
     */
    public function setNazwaIntrastat($nazwaIntrastat)
    {
        $this->nazwaIntrastat = $nazwaIntrastat;

        return $this;
    }

    /**
     * Get nazwaIntrastat
     *
     * @return string
     */
    public function getNazwaIntrastat()
    {
        return $this->nazwaIntrastat;
    }

    /**
     * Set idJednostkiRef
     *
     * @param string $idJednostkiRef
     *
     * @return Artykul
     */
    public function setIdJednostkiRef($idJednostkiRef)
    {
        $this->idJednostkiRef = $idJednostkiRef;

        return $this;
    }

    /**
     * Get idJednostkiRef
     *
     * @return string
     */
    public function getIdJednostkiRef()
    {
        return $this->idJednostkiRef;
    }

    /**
     * Set promocjaOd
     *
     * @param string $promocjaOd
     *
     * @return Artykul
     */
    public function setPromocjaOd($promocjaOd)
    {
        $this->promocjaOd = $promocjaOd;

        return $this;
    }

    /**
     * Get promocjaOd
     *
     * @return string
     */
    public function getPromocjaOd()
    {
        return $this->promocjaOd;
    }

    /**
     * Set promocjaDo
     *
     * @param string $promocjaDo
     *
     * @return Artykul
     */
    public function setPromocjaDo($promocjaDo)
    {
        $this->promocjaDo = $promocjaDo;

        return $this;
    }

    /**
     * Get promocjaDo
     *
     * @return string
     */
    public function getPromocjaDo()
    {
        return $this->promocjaDo;
    }

    /**
     * Set cenaPromocjiN
     *
     * @param string $cenaPromocjiN
     *
     * @return Artykul
     */
    public function setCenaPromocjiN($cenaPromocjiN)
    {
        $this->cenaPromocjiN = $cenaPromocjiN;

        return $this;
    }

    /**
     * Get cenaPromocjiN
     *
     * @return string
     */
    public function getCenaPromocjiN()
    {
        return $this->cenaPromocjiN;
    }

    /**
     * Set cenaPromocjiB
     *
     * @param string $cenaPromocjiB
     *
     * @return Artykul
     */
    public function setCenaPromocjiB($cenaPromocjiB)
    {
        $this->cenaPromocjiB = $cenaPromocjiB;

        return $this;
    }

    /**
     * Get cenaPromocjiB
     *
     * @return string
     */
    public function getCenaPromocjiB()
    {
        return $this->cenaPromocjiB;
    }

    /**
     * Set promocjaProcent
     *
     * @param string $promocjaProcent
     *
     * @return Artykul
     */
    public function setPromocjaProcent($promocjaProcent)
    {
        $this->promocjaProcent = $promocjaProcent;

        return $this;
    }

    /**
     * Get promocjaProcent
     *
     * @return string
     */
    public function getPromocjaProcent()
    {
        return $this->promocjaProcent;
    }

    /**
     * Set promocjaRabat
     *
     * @param string $promocjaRabat
     *
     * @return Artykul
     */
    public function setPromocjaRabat($promocjaRabat)
    {
        $this->promocjaRabat = $promocjaRabat;

        return $this;
    }

    /**
     * Get promocjaRabat
     *
     * @return string
     */
    public function getPromocjaRabat()
    {
        return $this->promocjaRabat;
    }

    /**
     * Set zablokowany
     *
     * @param string $zablokowany
     *
     * @return Artykul
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
     * Set wylaczCenyInd
     *
     * @param string $wylaczCenyInd
     *
     * @return Artykul
     */
    public function setWylaczCenyInd($wylaczCenyInd)
    {
        $this->wylaczCenyInd = $wylaczCenyInd;

        return $this;
    }

    /**
     * Get wylaczCenyInd
     *
     * @return string
     */
    public function getWylaczCenyInd()
    {
        return $this->wylaczCenyInd;
    }

    /**
     * Set aktCenPrzyDostawie
     *
     * @param string $aktCenPrzyDostawie
     *
     * @return Artykul
     */
    public function setAktCenPrzyDostawie($aktCenPrzyDostawie)
    {
        $this->aktCenPrzyDostawie = $aktCenPrzyDostawie;

        return $this;
    }

    /**
     * Get aktCenPrzyDostawie
     *
     * @return string
     */
    public function getAktCenPrzyDostawie()
    {
        return $this->aktCenPrzyDostawie;
    }

    /**
     * Set producent
     *
     * @param string $producent
     *
     * @return Artykul
     */
    public function setProducent($producent)
    {
        $this->producent = $producent;

        return $this;
    }

    /**
     * Get producent
     *
     * @return string
     */
    public function getProducent()
    {
        return $this->producent;
    }

    /**
     * Set idOpakowaniaRef
     *
     * @param string $idOpakowaniaRef
     *
     * @return Artykul
     */
    public function setIdOpakowaniaRef($idOpakowaniaRef)
    {
        $this->idOpakowaniaRef = $idOpakowaniaRef;

        return $this;
    }

    /**
     * Get idOpakowaniaRef
     *
     * @return string
     */
    public function getIdOpakowaniaRef()
    {
        return $this->idOpakowaniaRef;
    }

    /**
     * Set cenaNKgo
     *
     * @param string $cenaNKgo
     *
     * @return Artykul
     */
    public function setCenaNKgo($cenaNKgo)
    {
        $this->cenaNKgo = $cenaNKgo;

        return $this;
    }

    /**
     * Get cenaNKgo
     *
     * @return string
     */
    public function getCenaNKgo()
    {
        return $this->cenaNKgo;
    }

    /**
     * Set cenaBKgo
     *
     * @param string $cenaBKgo
     *
     * @return Artykul
     */
    public function setCenaBKgo($cenaBKgo)
    {
        $this->cenaBKgo = $cenaBKgo;

        return $this;
    }

    /**
     * Get cenaBKgo
     *
     * @return string
     */
    public function getCenaBKgo()
    {
        return $this->cenaBKgo;
    }

    /**
     * Set jestZdjecie
     *
     * @param integer $jestZdjecie
     *
     * @return Artykul
     */
    public function setJestZdjecie($jestZdjecie)
    {
        $this->jestZdjecie = $jestZdjecie;

        return $this;
    }

    /**
     * Get jestZdjecie
     *
     * @return integer
     */
    public function getJestZdjecie()
    {
        return $this->jestZdjecie;
    }

    /**
     * Set aktywnyDlaSysZew
     *
     * @param string $aktywnyDlaSysZew
     *
     * @return Artykul
     */
    public function setAktywnyDlaSysZew($aktywnyDlaSysZew)
    {
        $this->aktywnyDlaSysZew = $aktywnyDlaSysZew;

        return $this;
    }

    /**
     * Get aktywnyDlaSysZew
     *
     * @return string
     */
    public function getAktywnyDlaSysZew()
    {
        return $this->aktywnyDlaSysZew;
    }

    /**
     * Set minNarzut
     *
     * @param string $minNarzut
     *
     * @return Artykul
     */
    public function setMinNarzut($minNarzut)
    {
        $this->minNarzut = $minNarzut;

        return $this;
    }

    /**
     * Get minNarzut
     *
     * @return string
     */
    public function getMinNarzut()
    {
        return $this->minNarzut;
    }

    /**
     * Set wymuszajDostawy
     *
     * @param string $wymuszajDostawy
     *
     * @return Artykul
     */
    public function setWymuszajDostawy($wymuszajDostawy)
    {
        $this->wymuszajDostawy = $wymuszajDostawy;

        return $this;
    }

    /**
     * Get wymuszajDostawy
     *
     * @return string
     */
    public function getWymuszajDostawy()
    {
        return $this->wymuszajDostawy;
    }

    /**
     * Set idFprom
     *
     * @param string $idFprom
     *
     * @return Artykul
     */
    public function setIdFprom($idFprom)
    {
        $this->idFprom = $idFprom;

        return $this;
    }

    /**
     * Get idFprom
     *
     * @return string
     */
    public function getIdFprom()
    {
        return $this->idFprom;
    }

    /**
     * Set marzowy
     *
     * @param string $marzowy
     *
     * @return Artykul
     */
    public function setMarzowy($marzowy)
    {
        $this->marzowy = $marzowy;

        return $this;
    }

    /**
     * Get marzowy
     *
     * @return string
     */
    public function getMarzowy()
    {
        return $this->marzowy;
    }

    /**
     * Set domyslnyVatZaGranica
     *
     * @param string $domyslnyVatZaGranica
     *
     * @return Artykul
     */
    public function setDomyslnyVatZaGranica($domyslnyVatZaGranica)
    {
        $this->domyslnyVatZaGranica = $domyslnyVatZaGranica;

        return $this;
    }

    /**
     * Get domyslnyVatZaGranica
     *
     * @return string
     */
    public function getDomyslnyVatZaGranica()
    {
        return $this->domyslnyVatZaGranica;
    }

    /**
     * Set dostepnyWSklepieInter
     *
     * @param string $dostepnyWSklepieInter
     *
     * @return Artykul
     */
    public function setDostepnyWSklepieInter($dostepnyWSklepieInter)
    {
        $this->dostepnyWSklepieInter = $dostepnyWSklepieInter;

        return $this;
    }

    /**
     * Get dostepnyWSklepieInter
     *
     * @return string
     */
    public function getDostepnyWSklepieInter()
    {
        return $this->dostepnyWSklepieInter;
    }

    /**
     * Set zasadaZdejmowaniaZeStanu
     *
     * @param string $zasadaZdejmowaniaZeStanu
     *
     * @return Artykul
     */
    public function setZasadaZdejmowaniaZeStanu($zasadaZdejmowaniaZeStanu)
    {
        $this->zasadaZdejmowaniaZeStanu = $zasadaZdejmowaniaZeStanu;

        return $this;
    }

    /**
     * Get zasadaZdejmowaniaZeStanu
     *
     * @return string
     */
    public function getZasadaZdejmowaniaZeStanu()
    {
        return $this->zasadaZdejmowaniaZeStanu;
    }

    /**
     * Set idEtykiety
     *
     * @param string $idEtykiety
     *
     * @return Artykul
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
     * Set akcyza
     *
     * @param string $akcyza
     *
     * @return Artykul
     */
    public function setAkcyza($akcyza)
    {
        $this->akcyza = $akcyza;

        return $this;
    }

    /**
     * Get akcyza
     *
     * @return string
     */
    public function getAkcyza()
    {
        return $this->akcyza;
    }

    /**
     * Set akcyzaJm
     *
     * @param string $akcyzaJm
     *
     * @return Artykul
     */
    public function setAkcyzaJm($akcyzaJm)
    {
        $this->akcyzaJm = $akcyzaJm;

        return $this;
    }

    /**
     * Get akcyzaJm
     *
     * @return string
     */
    public function getAkcyzaJm()
    {
        return $this->akcyzaJm;
    }

    /**
     * Set akcyzaPrzelicznik
     *
     * @param string $akcyzaPrzelicznik
     *
     * @return Artykul
     */
    public function setAkcyzaPrzelicznik($akcyzaPrzelicznik)
    {
        $this->akcyzaPrzelicznik = $akcyzaPrzelicznik;

        return $this;
    }

    /**
     * Get akcyzaPrzelicznik
     *
     * @return string
     */
    public function getAkcyzaPrzelicznik()
    {
        return $this->akcyzaPrzelicznik;
    }

    /**
     * Set akcyzaStawkaZaJm
     *
     * @param string $akcyzaStawkaZaJm
     *
     * @return Artykul
     */
    public function setAkcyzaStawkaZaJm($akcyzaStawkaZaJm)
    {
        $this->akcyzaStawkaZaJm = $akcyzaStawkaZaJm;

        return $this;
    }

    /**
     * Get akcyzaStawkaZaJm
     *
     * @return string
     */
    public function getAkcyzaStawkaZaJm()
    {
        return $this->akcyzaStawkaZaJm;
    }

    /**
     * Set odwrotny
     *
     * @param string $odwrotny
     *
     * @return Artykul
     */
    public function setOdwrotny($odwrotny)
    {
        $this->odwrotny = $odwrotny;

        return $this;
    }

    /**
     * Get odwrotny
     *
     * @return string
     */
    public function getOdwrotny()
    {
        return $this->odwrotny;
    }

    /**
     * Set idProducenta
     *
     * @param string $idProducenta
     *
     * @return Artykul
     */
    public function setIdProducenta($idProducenta)
    {
        $this->idProducenta = $idProducenta;

        return $this;
    }

    /**
     * Get idProducenta
     *
     * @return string
     */
    public function getIdProducenta()
    {
        return $this->idProducenta;
    }

    /**
     * Set idDostawcyPreferowanego
     *
     * @param string $idDostawcyPreferowanego
     *
     * @return Artykul
     */
    public function setIdDostawcyPreferowanego($idDostawcyPreferowanego)
    {
        $this->idDostawcyPreferowanego = $idDostawcyPreferowanego;

        return $this;
    }

    /**
     * Get idDostawcyPreferowanego
     *
     * @return string
     */
    public function getIdDostawcyPreferowanego()
    {
        return $this->idDostawcyPreferowanego;
    }

    /**
     * Set dostepnyWAukcjach
     *
     * @param string $dostepnyWAukcjach
     *
     * @return Artykul
     */
    public function setDostepnyWAukcjach($dostepnyWAukcjach)
    {
        $this->dostepnyWAukcjach = $dostepnyWAukcjach;

        return $this;
    }

    /**
     * Get dostepnyWAukcjach
     *
     * @return string
     */
    public function getDostepnyWAukcjach()
    {
        return $this->dostepnyWAukcjach;
    }

    /**
     * Set nazwaCala
     *
     * @param string $nazwaCala
     *
     * @return Artykul
     */
    public function setNazwaCala($nazwaCala)
    {
        $this->nazwaCala = $nazwaCala;

        return $this;
    }

    /**
     * Get nazwaCala
     *
     * @return string
     */
    public function getNazwaCala()
    {
        return $this->nazwaCala;
    }

    /**
     * Set idKategoriiTree
     *
     * @param string $idKategoriiTree
     *
     * @return Artykul
     */
    public function setIdKategoriiTree($idKategoriiTree)
    {
        $this->idKategoriiTree = $idKategoriiTree;

        return $this;
    }

    /**
     * Get idKategoriiTree
     *
     * @return string
     */
    public function getIdKategoriiTree()
    {
        return $this->idKategoriiTree;
    }

    /**
     * Set prgLojal
     *
     * @param integer $prgLojal
     *
     * @return Artykul
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
     * Set prgIlosc
     *
     * @param integer $prgIlosc
     *
     * @return Artykul
     */
    public function setPrgIlosc($prgIlosc)
    {
        $this->prgIlosc = $prgIlosc;

        return $this;
    }

    /**
     * Get prgIlosc
     *
     * @return integer
     */
    public function getPrgIlosc()
    {
        return $this->prgIlosc;
    }

    /**
     * Set akcyzaPrzelicznikJmJa
     *
     * @param string $akcyzaPrzelicznikJmJa
     *
     * @return Artykul
     */
    public function setAkcyzaPrzelicznikJmJa($akcyzaPrzelicznikJmJa)
    {
        $this->akcyzaPrzelicznikJmJa = $akcyzaPrzelicznikJmJa;

        return $this;
    }

    /**
     * Get akcyzaPrzelicznikJmJa
     *
     * @return string
     */
    public function getAkcyzaPrzelicznikJmJa()
    {
        return $this->akcyzaPrzelicznikJmJa;
    }
}
