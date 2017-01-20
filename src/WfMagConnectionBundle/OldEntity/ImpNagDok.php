<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpNagDok
 *
 * @ORM\Table(name="IMP_NAG_DOK", indexes={@ORM\Index(name="idx_IMP_NAG_DOK", columns={"ID_DOKUMENTU_ORYG", "RODZAJ_DOKUMENTU"}), @ORM\Index(name="idx_IMP_NAG_DOK_NUMER_DOKUMENTU", columns={"NUMER_DOKUMENTU"})})
 * @ORM\Entity
 */
class ImpNagDok
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_TRANSAKCJI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idTransakcji;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_MK_ZRDANYCH", type="integer", nullable=true)
     */
    private $idMkZrdanych;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_ZBIOR", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokumentuZbior;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOK_ZBIOR", type="smallint", nullable=true)
     */
    private $dokZbior = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PLATNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPlatnika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRACOWNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPracownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OPERATORA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idOperatora;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DOKUMENTU", type="string", length=5, nullable=true)
     */
    private $typDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_DOKUMENTU", type="string", length=30, nullable=true)
     */
    private $numerDokumentu;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_WYSTAWIENIA", type="integer", nullable=true)
     */
    private $dataWystawienia;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=500, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_ORYG", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokumentuOryg;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_DOKUMENTU", type="string", length=5, nullable=true)
     */
    private $rodzajDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="ZAKUP_SPRZEDAZ", type="string", length=2, nullable=true)
     */
    private $zakupSprzedaz;

    /**
     * @var string
     *
     * @ORM\Column(name="OBLICZANIE_WG_CEN", type="string", length=6, nullable=true)
     */
    private $obliczanieWgCen;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_SPRZEDAZY", type="integer", nullable=true)
     */
    private $dataSprzedazy;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_WPLYWU", type="integer", nullable=true)
     */
    private $dataWplywu;

    /**
     * @var integer
     *
     * @ORM\Column(name="TERMIN_PLATNOSCI", type="integer", nullable=true)
     */
    private $terminPlatnosci;

    /**
     * @var string
     *
     * @ORM\Column(name="NETTO_SPRZEDAZY", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $nettoSprzedazy;

    /**
     * @var string
     *
     * @ORM\Column(name="BRUTTO_SPRZEDAZY", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $bruttoSprzedazy;

    /**
     * @var string
     *
     * @ORM\Column(name="NETTO_SPRZEDAZY_WALUTA", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $nettoSprzedazyWaluta;

    /**
     * @var string
     *
     * @ORM\Column(name="BRUTTO_SPRZEDAZY_WALUTA", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $bruttoSprzedazyWaluta;

    /**
     * @var string
     *
     * @ORM\Column(name="SUMA_NETTO_POZ_FAKTURA_ZAL", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $sumaNettoPozFakturaZal;

    /**
     * @var string
     *
     * @ORM\Column(name="SUMA_NETTO_POZ_FZAL_WAL", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $sumaNettoPozFzalWal;

    /**
     * @var string
     *
     * @ORM\Column(name="KURS_WALUTY", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $kursWaluty = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="KURS_WALUTY_PZ", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $kursWalutyPz = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_FAKTURA_ZALICZKOWA", type="smallint", nullable=true)
     */
    private $czyFakturaZaliczkowa;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_FAKTURA_KONCOWA", type="smallint", nullable=true)
     */
    private $czyFakturaKoncowa;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_KOREKTA_FZAL", type="smallint", nullable=true)
     */
    private $czyKorektaFzal;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_KOREKTA_FZAL_KONCOWEJ", type="smallint", nullable=true)
     */
    private $czyKorektaFzalKoncowej;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_FISKALNY", type="smallint", nullable=true)
     */
    private $czyFiskalny = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_FZAL_100_PROCENT_BEZ_WZ", type="smallint", nullable=true)
     */
    private $czyFzal100ProcentBezWz = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_FZAL_100_PROCENT_Z_WZ", type="smallint", nullable=true)
     */
    private $czyFzal100ProcentZWz = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NETTO_ZAKUPU", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $nettoZakupu;

    /**
     * @var string
     *
     * @ORM\Column(name="BRUTTO_ZAKUPU", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $bruttoZakupu;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOD_PRACOWNIKA", type="integer", nullable=true)
     */
    private $kodPracownika;

    /**
     * @var string
     *
     * @ORM\Column(name="SYMBOL_MAGAZYNU", type="string", length=10, nullable=true)
     */
    private $symbolMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="SYMBOL_MAGAZYNU_DOCELOWEGO", type="string", length=10, nullable=true)
     */
    private $symbolMagazynuDocelowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU_DOCELOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idMagazynuDocelowego;

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
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_PODSTAWY", type="string", length=30, nullable=true)
     */
    private $nrPodstawy;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_KASY", type="integer", nullable=true)
     */
    private $idKasy;

    /**
     * @var string
     *
     * @ORM\Column(name="SYMBOL_KASY", type="string", length=5, nullable=true)
     */
    private $symbolKasy;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_RACHUNKU", type="integer", nullable=true)
     */
    private $idRachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_RACHUNKU", type="string", length=100, nullable=true)
     */
    private $numerRachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_PLATNIKA", type="string", length=1, nullable=true)
     */
    private $typPlatnika;

    /**
     * @var integer
     *
     * @ORM\Column(name="POTWIERDZONY_UE", type="smallint", nullable=true)
     */
    private $potwierdzonyUe = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DOK_KOREKTY", type="smallint", nullable=true)
     */
    private $dokKorekty = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="WYROZNIK_DOKUMENTU", type="string", length=20, nullable=true)
     */
    private $wyroznikDokumentu;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_DOK_MAG_DO_FZAL", type="smallint", nullable=true)
     */
    private $czyDokMagDoFzal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FZAL_ORG", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFzalOrg = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_DOK_ZAFAKTUROWANY", type="smallint", nullable=true)
     */
    private $czyDokZafakturowany = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_OPERACJI_FIN", type="string", length=5, nullable=true)
     */
    private $kodOperacjiFin;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_RODZAJU_OPERACJI_FIN", type="string", length=50, nullable=true)
     */
    private $nazwaRodzajuOperacjiFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_POZ_KOSZTOWE_BAZOWE", type="smallint", nullable=true)
     */
    private $czyPozKosztoweBazowe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_DOK_KORYG", type="string", length=30, nullable=true)
     */
    private $numerDokKoryg;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=true)
     */
    private $kodVat;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROZRACH_NB", type="smallint", nullable=true)
     */
    private $rozrachNb;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_WYCIAGU", type="string", length=50, nullable=true)
     */
    private $nrWyciagu;

    /**
     * @var integer
     *
     * @ORM\Column(name="POZ_WAL_BAZOWE", type="smallint", nullable=true)
     */
    private $pozWalBazowe = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FORMY_PLATNOSCI", type="integer", nullable=true)
     */
    private $idFormyPlatnosci;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMA_PLATNOSCI", type="string", length=50, nullable=true)
     */
    private $formaPlatnosci;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_DOKH", type="string", length=30, nullable=true)
     */
    private $nrDokh;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_DOKM", type="string", length=500, nullable=true)
     */
    private $nrDokm;

    /**
     * @var string
     *
     * @ORM\Column(name="KW_ROZRACH", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $kwRozrach;

    /**
     * @var string
     *
     * @ORM\Column(name="KW_ROZRACH_W", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $kwRozrachW;

    /**
     * @var integer
     *
     * @ORM\Column(name="MP", type="smallint", nullable=true)
     */
    private $mp;

    /**
     * @var integer
     *
     * @ORM\Column(name="ZALICZKA_ODROCZONA", type="smallint", nullable=true)
     */
    private $zaliczkaOdroczona;

    /**
     * @var integer
     *
     * @ORM\Column(name="TROJSTRONNY_UE", type="smallint", nullable=true)
     */
    private $trojstronnyUe;

    /**
     * @var integer
     *
     * @ORM\Column(name="WEWNETRZNY", type="smallint", nullable=true)
     */
    private $wewnetrzny;

    /**
     * @var integer
     *
     * @ORM\Column(name="METODA_KASOWA", type="smallint", nullable=true)
     */
    private $metodaKasowa;

    /**
     * @var integer
     *
     * @ORM\Column(name="ODWROTNY", type="smallint", nullable=true)
     */
    private $odwrotny;


}

