<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Majatek
 *
 * @ORM\Table(name="MAJATEK", uniqueConstraints={@ORM\UniqueConstraint(name="WG_NRINWENT", columns={"NRINWENT", "ID_FIRMY"})}, indexes={@ORM\Index(name="WG_KODMIEJ", columns={"ID_FIRMY", "KODMIEJ", "NRINWENT"}), @ORM\Index(name="WG_NAZWY", columns={"NAZWA", "ID_FIRMY"})})
 * @ORM\Entity
 */
class Majatek
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAJATEK", type="string", length=9, nullable=false)
     */
    private $idMajatek;

    /**
     * @var string
     *
     * @ORM\Column(name="NRINWENT", type="string", length=40, nullable=false)
     */
    private $nrinwent;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="STAWKA", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $stawka;

    /**
     * @var string
     *
     * @ORM\Column(name="STAWKA_POD", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $stawkaPod;

    /**
     * @var string
     *
     * @ORM\Column(name="WSPOLCZ", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $wspolcz;

    /**
     * @var string
     *
     * @ORM\Column(name="WSPOLCZ_POD", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $wspolczPod;

    /**
     * @var integer
     *
     * @ORM\Column(name="LP", type="integer", nullable=false)
     */
    private $lp;

    /**
     * @var integer
     *
     * @ORM\Column(name="STATUS", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="ECU", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $ecu;

    /**
     * @var integer
     *
     * @ORM\Column(name="DPRZYJ", type="integer", nullable=true)
     */
    private $dprzyj;

    /**
     * @var integer
     *
     * @ORM\Column(name="DZAKUP", type="integer", nullable=true)
     */
    private $dzakup;

    /**
     * @var integer
     *
     * @ORM\Column(name="NOWUZY", type="integer", nullable=true)
     */
    private $nowuzy;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOSTAM", type="integer", nullable=true)
     */
    private $dostam;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $wartosc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ILMIESUZ", type="integer", nullable=true)
     */
    private $ilmiesuz;

    /**
     * @var integer
     *
     * @ORM\Column(name="RODZAM", type="integer", nullable=true)
     */
    private $rodzam;

    /**
     * @var integer
     *
     * @ORM\Column(name="RODZAM_POD", type="integer", nullable=true)
     */
    private $rodzamPod = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="MIESUZ", type="string", length=12, nullable=true)
     */
    private $miesuz;

    /**
     * @var string
     *
     * @ORM\Column(name="NRKLASYF", type="string", length=10, nullable=true)
     */
    private $nrklasyf;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="KODMIEJ", type="string", length=20, nullable=true)
     */
    private $kodmiej;

    /**
     * @var string
     *
     * @ORM\Column(name="GRUPA", type="string", length=10, nullable=true)
     */
    private $grupa;

    /**
     * @var string
     *
     * @ORM\Column(name="NRSER", type="string", length=50, nullable=true)
     */
    private $nrser;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=500, nullable=true)
     */
    private $uwagi;

    /**
     * @var string
     *
     * @ORM\Column(name="CHARAKT", type="string", length=500, nullable=true)
     */
    private $charakt;

    /**
     * @var string
     *
     * @ORM\Column(name="OSOODP", type="string", length=50, nullable=true)
     */
    private $osoodp;

    /**
     * @var integer
     *
     * @ORM\Column(name="TYP", type="smallint", nullable=true)
     */
    private $typ;

    /**
     * @var string
     *
     * @ORM\Column(name="KBN", type="string", length=20, nullable=true)
     */
    private $kbn;

    /**
     * @var string
     *
     * @ORM\Column(name="UMBILTMP", type="string", length=9, nullable=true)
     */
    private $umbiltmp;

    /**
     * @var string
     *
     * @ORM\Column(name="UMPODTMP", type="string", length=9, nullable=true)
     */
    private $umpodtmp;

    /**
     * @var integer
     *
     * @ORM\Column(name="DKONC", type="integer", nullable=true)
     */
    private $dkonc;

    /**
     * @var string
     *
     * @ORM\Column(name="WARAKT", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $warakt;

    /**
     * @var string
     *
     * @ORM\Column(name="SUMPOD", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $sumpod;

    /**
     * @var string
     *
     * @ORM\Column(name="SUMBIL", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $sumbil;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA1AMO", type="integer", nullable=true)
     */
    private $data1amo = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ROKPRODUKCJI", type="integer", nullable=true)
     */
    private $rokprodukcji;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE1", type="string", length=100, nullable=true)
     */
    private $pole1;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE3", type="string", length=100, nullable=true)
     */
    private $pole3;

    /**
     * @var string
     *
     * @ORM\Column(name="POLE2", type="string", length=100, nullable=true)
     */
    private $pole2;

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
     * @var boolean
     *
     * @ORM\Column(name="CZY_PODATKOWA", type="boolean", nullable=true)
     */
    private $czyPodatkowa = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="KOD_SRODKA", type="integer", nullable=true)
     */
    private $kodSrodka;

    /**
     * @var string
     *
     * @ORM\Column(name="DOS_KOD", type="string", length=10, nullable=true)
     */
    private $dosKod;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_WZORCA_BIL", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idWzorcaBil;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_WZORCA_POD", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idWzorcaPod;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_ODPIS_30", type="integer", nullable=true)
     */
    private $czyOdpis30 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LIMIT_AMORTYZACJI", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $limitAmortyzacji = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NISKOCENNY_BIL", type="smallint", nullable=true)
     */
    private $niskocennyBil = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NISKOCENNY_POD", type="smallint", nullable=true)
     */
    private $niskocennyPod = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRACOWNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPracownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRESKOWY", type="string", length=50, nullable=true)
     */
    private $kodKreskowy;

    /**
     * @var integer
     *
     * @ORM\Column(name="TYP_ODPISU_BILANSOWEGO", type="integer", nullable=true)
     */
    private $typOdpisuBilansowego;

    /**
     * @var integer
     *
     * @ORM\Column(name="TYP_ODPISU_PODATKOWEGO", type="integer", nullable=true)
     */
    private $typOdpisuPodatkowego;

    /**
     * @var boolean
     *
     * @ORM\Column(name="SPOSOB_DEKRETOWANIA", type="boolean", nullable=true)
     */
    private $sposobDekretowania;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AMORTYZACJA_WYLACZONA_BIL", type="boolean", nullable=true)
     */
    private $amortyzacjaWylaczonaBil;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AMORTYZACJA_WYLACZONA_POD", type="boolean", nullable=true)
     */
    private $amortyzacjaWylaczonaPod;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZERWA_SEZONOWA_BIL", type="string", length=30, nullable=true)
     */
    private $przerwaSezonowaBil;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZERWA_SEZONOWA_POD", type="string", length=30, nullable=true)
     */
    private $przerwaSezonowaPod;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $semafor;

    /**
     * @var integer
     *
     * @ORM\Column(name="FLAGA_STANU", type="integer", nullable=true)
     */
    private $flagaStanu = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="PLAN_AKTUALNY", type="smallint", nullable=true)
     */
    private $planAktualny = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_NIEAMORT_BIL", type="decimal", precision=14, scale=2, nullable=false)
     */
    private $kwotaNieamortBil = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NIEAMORT_BIL_NIE_ZMNIEJ_ODPISOW", type="smallint", nullable=false)
     */
    private $nieamortBilNieZmniejOdpisow = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_NIEAMORT_POD", type="decimal", precision=14, scale=2, nullable=false)
     */
    private $kwotaNieamortPod = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NIEAMORT_POD_NIE_ZMNIEJ_ODPISOW", type="smallint", nullable=false)
     */
    private $nieamortPodNieZmniejOdpisow = '0';


}

