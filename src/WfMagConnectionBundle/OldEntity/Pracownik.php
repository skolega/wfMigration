<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pracownik
 *
 * @ORM\Table(name="PRACOWNIK", uniqueConstraints={@ORM\UniqueConstraint(name="AK_PRACOWNIK_SEMAFOR_PRACOWNI", columns={"SEMAFOR", "ID_PRACOWNIKA"}), @ORM\UniqueConstraint(name="AK_PRACOWNIK_IDFIR_NR_PRACOWNI", columns={"ID_FIRMY", "NR_EWIDENCYJNY"}), @ORM\UniqueConstraint(name="PRACOWNIK_KOD", columns={"KOD_PRACOWNIKA", "ID_FIRMY"})}, indexes={@ORM\Index(name="PRACOWNIK_IDFIR_NAZWISKO_IMIE", columns={"ID_FIRMY", "NAZWISKO", "IMIE_1"}), @ORM\Index(name="IDX_DE209371112AD683", columns={"ID_STRUKTURY"}), @ORM\Index(name="IDX_DE209371BFC38A08", columns={"ID_KALENDARZA"}), @ORM\Index(name="IDX_DE209371FC9A213E", columns={"ID_SCHEMATU"})})
 * @ORM\Entity
 */
class Pracownik
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRACOWNIKA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPracownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOD_PRACOWNIKA", type="integer", nullable=true)
     */
    private $kodPracownika;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWISKO", type="string", length=40, nullable=true)
     */
    private $nazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWISKO_RODOWE", type="string", length=40, nullable=true)
     */
    private $nazwiskoRodowe;

    /**
     * @var string
     *
     * @ORM\Column(name="IMIE_1", type="string", length=30, nullable=true)
     */
    private $imie1;

    /**
     * @var string
     *
     * @ORM\Column(name="IMIE_2", type="string", length=30, nullable=true)
     */
    private $imie2;

    /**
     * @var string
     *
     * @ORM\Column(name="IMIE_OJCA", type="string", length=30, nullable=true)
     */
    private $imieOjca;

    /**
     * @var string
     *
     * @ORM\Column(name="IMIE_MATKI", type="string", length=30, nullable=true)
     */
    private $imieMatki;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWISKO_MATKI", type="string", length=40, nullable=true)
     */
    private $nazwiskoMatki;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCE_URODZ", type="string", length=30, nullable=true)
     */
    private $miejsceUrodz;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_URODZENIA", type="integer", nullable=true)
     */
    private $dataUrodzenia;

    /**
     * @var string
     *
     * @ORM\Column(name="PLEC", type="string", length=10, nullable=true)
     */
    private $plec;

    /**
     * @var string
     *
     * @ORM\Column(name="PESEL", type="string", length=20, nullable=true)
     */
    private $pesel;

    /**
     * @var string
     *
     * @ORM\Column(name="NIP", type="string", length=20, nullable=true)
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(name="DOWOD", type="string", length=20, nullable=true)
     */
    private $dowod;

    /**
     * @var string
     *
     * @ORM\Column(name="WYDANY", type="string", length=50, nullable=true)
     */
    private $wydany;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_WYDANIA", type="integer", nullable=true)
     */
    private $dataWydania;

    /**
     * @var string
     *
     * @ORM\Column(name="PASZPORT", type="string", length=20, nullable=true)
     */
    private $paszport;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_EWIDENCYJNY", type="string", length=30, nullable=true)
     */
    private $nrEwidencyjny;

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
     * @ORM\Column(name="ID_ZUS", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idZus;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_US", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUs;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="KP_DATA_WYDANIA", type="datetime", nullable=true)
     */
    private $kpDataWydania;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="KP_DATA_URODZENIA", type="datetime", nullable=true)
     */
    private $kpDataUrodzenia;

    /**
     * @var string
     *
     * @ORM\Column(name="DOS_KOD", type="string", length=5, nullable=true)
     */
    private $dosKod;

    /**
     * @var string
     *
     * @ORM\Column(name="TREE_STRUKTURY", type="string", length=50, nullable=true)
     */
    private $treeStruktury;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_ANALITYKI", type="string", length=20, nullable=true)
     */
    private $nrAnalityki;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFON", type="string", length=30, nullable=true)
     */
    private $telefon;

    /**
     * @var integer
     *
     * @ORM\Column(name="ARCHIWUM", type="smallint", nullable=false)
     */
    private $archiwum = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="RODZAJ_PRACOWNIKA", type="integer", nullable=true)
     */
    private $rodzajPracownika = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_WPROWADZENIA_DANYCH", type="integer", nullable=true)
     */
    private $dataWprowadzeniaDanych;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_MODYFIKACJI_DANYCH", type="integer", nullable=true)
     */
    private $dataModyfikacjiDanych;

    /**
     * @var string
     *
     * @ORM\Column(name="UZYTKOWNIK_WPROWADZ", type="string", length=30, nullable=true)
     */
    private $uzytkownikWprowadz;

    /**
     * @var string
     *
     * @ORM\Column(name="UZYTKOWNIK_MODYFIK", type="string", length=30, nullable=true)
     */
    private $uzytkownikModyfik;

    /**
     * @var integer
     *
     * @ORM\Column(name="FUNDUSZ_BEZOSOBOWY", type="smallint", nullable=true)
     */
    private $funduszBezosobowy = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="AUTONUMER", type="integer", nullable=true)
     */
    private $autonumer;

    /**
     * @var integer
     *
     * @ORM\Column(name="GANG", type="smallint", nullable=true)
     */
    private $gang = '0';

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
     * @ORM\Column(name="CRM_KALENDARZ_AKTYWNY", type="string", length=1, nullable=true)
     */
    private $crmKalendarzAktywny = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="CRM_GRAFIK_KOLOR", type="integer", nullable=true)
     */
    private $crmGrafikKolor = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_CRM_KALENDARZ", type="string", length=9, nullable=true)
     */
    private $idCrmKalendarz = '0';

    /**
     * @var \WfMagConnectionBundle\Entity\StrukturaOrganizacyjna
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\StrukturaOrganizacyjna")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_STRUKTURY", referencedColumnName="ID_STRUKTURY")
     * })
     */
    private $idStruktury;

    /**
     * @var \WfMagConnectionBundle\Entity\Kalendarz
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\Kalendarz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_KALENDARZA", referencedColumnName="ID_KALENDARZA")
     * })
     */
    private $idKalendarza;

    /**
     * @var \WfMagConnectionBundle\Entity\GSchematKsiegowania
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\GSchematKsiegowania")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_SCHEMATU", referencedColumnName="ID_SCHEMATU")
     * })
     */
    private $idSchematu;


}

