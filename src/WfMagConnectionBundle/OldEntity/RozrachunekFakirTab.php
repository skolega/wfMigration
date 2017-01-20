<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RozrachunekFakirTab
 *
 * @ORM\Table(name="ROZRACHUNEK_FAKIR_TAB", uniqueConstraints={@ORM\UniqueConstraint(name="ROZRACHUNEK_NAZWAKONTA", columns={"NAZWA_KONTA", "ID_ROZRACHUNKU"}), @ORM\UniqueConstraint(name="ROZRACHUNEK_NAZWAKONTA_DESC", columns={"NAZWA_KONTA", "ID_ROZRACHUNKU"})}, indexes={@ORM\Index(name="ROZRACHUNEK_IDNAGDOKF_TYPDOK", columns={"ID_NAG_DOK_F", "TYP_DOK"}), @ORM\Index(name="ROZRACHUNEK_SEMAFOR", columns={"SEMAFOR", "FLAGA_STANU"}), @ORM\Index(name="ROZRACHUNEK_IDNAGDOKM_TYPDOK", columns={"ID_NAG_DOK_M", "TYP_DOK"}), @ORM\Index(name="ROZRACHUNEK_IDPOZDOKF_STRONA", columns={"ID_POZ_DOK_F", "STRONA"}), @ORM\Index(name="ROZRACHUNEK_IDPOZDOKM_STRONA", columns={"ID_POZ_DOK_M", "STRONA"}), @ORM\Index(name="ROZRACHUNEK_NRKONTA", columns={"NR_KONTA"}), @ORM\Index(name="ROZRACHUNEK_SYMBOL", columns={"SYMBOL"}), @ORM\Index(name="ROZRACHUNEK_TERMINPLATNOSCI", columns={"TERMIN_PLATNOSCI"}), @ORM\Index(name="ROZRACHUNEK_DATADOK", columns={"DATA_DOK"}), @ORM\Index(name="ROZRACHUNEK_NRDOK", columns={"NR_DOK"}), @ORM\Index(name="ROZRACHUNEK_KWOTA", columns={"KWOTA"}), @ORM\Index(name="ROZRACHUNEK_KWOTAW", columns={"KWOTA_W"}), @ORM\Index(name="ROZRACHUNEK_OPIS", columns={"OPIS"}), @ORM\Index(name="ROZRACHUNEK_FAKIR_TAB_ID_APLIKACJA_STATUS", columns={"ID_ROZRACHUNKU", "APLIKACJA_STATUS"}), @ORM\Index(name="ROZRACHUNEK_AGREGAT", columns={"AGREGAT"}), @ORM\Index(name="ROZRACHUNEK_IDNAGDOKF", columns={"ID_NAG_DOK_F"}), @ORM\Index(name="ROZRACHUNEK_IDPOZDOKF", columns={"ID_POZ_DOK_F"}), @ORM\Index(name="ROZRACHUNEK_IDKONTRAHENTA_TYPKARTOTEKI", columns={"ID_KONTRAHENTA", "TYP_KARTOTEKI"})})
 * @ORM\Entity
 */
class RozrachunekFakirTab
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU", type="string", length=9, nullable=false)
     */
    private $idRozrachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_NAG_DOK_F", type="string", length=9, nullable=true)
     */
    private $idNagDokF = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK_F", type="string", length=9, nullable=true)
     */
    private $idPozDokF = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_NAG_DOK_M", type="string", length=9, nullable=true)
     */
    private $idNagDokM = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK_M", type="string", length=9, nullable=true)
     */
    private $idPozDokM = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DOK", type="string", length=1, nullable=true)
     */
    private $typDok = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRACOWNIKA", type="string", length=9, nullable=true)
     */
    private $idPracownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNEK_KLASYFIKACJA", type="string", length=9, nullable=true)
     */
    private $idRozrachunekKlasyfikacja = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=true)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_KARTOTEKI", type="string", length=1, nullable=true)
     */
    private $typKartoteki;

    /**
     * @var string
     *
     * @ORM\Column(name="KARTOTEKA", type="string", length=10, nullable=true)
     */
    private $kartoteka = '';

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $kwota = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_W", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $kwotaW = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="POZOSTALO", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $pozostalo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="POZOSTALO_W", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $pozostaloW = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="POZOSTALO_K", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $pozostaloK = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="POZOSTALO_W_K", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $pozostaloWK = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WALUTY", type="string", length=3, nullable=true)
     */
    private $symWaluty = 'PLN';

    /**
     * @var string
     *
     * @ORM\Column(name="STRONA", type="string", length=2, nullable=true)
     */
    private $strona;

    /**
     * @var string
     *
     * @ORM\Column(name="SYMBOL", type="string", length=30, nullable=true)
     */
    private $symbol = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NR_DOK", type="string", length=30, nullable=true)
     */
    private $nrDok = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_DOK", type="integer", nullable=true)
     */
    private $dataDok = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="TERMIN_PLATNOSCI", type="integer", nullable=true)
     */
    private $terminPlatnosci = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ", type="string", length=1, nullable=true)
     */
    private $rodzaj;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=50, nullable=true)
     */
    private $opis = '';

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=1000, nullable=true)
     */
    private $uwagi = '';

    /**
     * @var string
     *
     * @ORM\Column(name="FORMA_PLATNOSCI", type="string", length=50, nullable=true)
     */
    private $formaPlatnosci = 'gotówka';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_ROZLICZONY", type="smallint", nullable=true)
     */
    private $czyRozliczony = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_ROZLICZONY_K", type="smallint", nullable=true)
     */
    private $czyRozliczonyK = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_PRZETERMINOWANY", type="smallint", nullable=true)
     */
    private $czyPrzeterminowany = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_PRZETERMINOWANY_K", type="smallint", nullable=true)
     */
    private $czyPrzeterminowanyK = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_KOREKTA", type="smallint", nullable=true)
     */
    private $czyKorekta = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_RK", type="smallint", nullable=true)
     */
    private $czyRk = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_BO", type="smallint", nullable=true)
     */
    private $czyBo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_KOMPENSATA", type="smallint", nullable=true)
     */
    private $czyKompensata = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NR_KONTA", type="string", length=60, nullable=true)
     */
    private $nrKonta = '';

    /**
     * @var string
     *
     * @ORM\Column(name="AGREGAT", type="string", length=60, nullable=true)
     */
    private $agregat = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_KONTA", type="string", length=150, nullable=true)
     */
    private $nazwaKonta = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ZNACZNIK_TRANSAKCJI", type="string", length=30, nullable=true)
     */
    private $znacznikTransakcji = '';

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
     * @ORM\Column(name="KIERUNEK_ZAPLATY", type="integer", nullable=true)
     */
    private $kierunekZaplaty;

    /**
     * @var string
     *
     * @ORM\Column(name="SUMA_ODSETEK", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $sumaOdsetek = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FAKTURY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFaktury;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAMOWIENIA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idZamowienia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ETYKIETY", type="string", length=9, nullable=true)
     */
    private $idEtykiety = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU", type="string", length=9, nullable=true)
     */
    private $idRachunku = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_OST_ROZL", type="integer", nullable=true)
     */
    private $dataOstRozl = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="APLIKACJA_STATUS", type="integer", nullable=true)
     */
    private $aplikacjaStatus = '0';


}

