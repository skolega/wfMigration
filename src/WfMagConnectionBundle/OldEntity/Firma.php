<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Firma
 *
 * @ORM\Table(name="FIRMA", uniqueConstraints={@ORM\UniqueConstraint(name="AK_FIRMA_SEMAFOR_FIRMA", columns={"SEMAFOR", "ID_FIRMY"}), @ORM\UniqueConstraint(name="FIRMA_NAZWA", columns={"NAZWA"})})
 * @ORM\Entity
 */
class Firma
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_PELNA", type="string", length=100, nullable=true)
     */
    private $nazwaPelna;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLATNIK_VAT", type="smallint", nullable=true)
     */
    private $platnikVat;

    /**
     * @var string
     *
     * @ORM\Column(name="NKP", type="string", length=50, nullable=true)
     */
    private $nkp;

    /**
     * @var string
     *
     * @ORM\Column(name="EKD", type="string", length=4, nullable=true)
     */
    private $ekd;

    /**
     * @var string
     *
     * @ORM\Column(name="STRUKT_WL_FIRMY", type="string", length=30, nullable=true)
     */
    private $struktWlFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ_PLATNIKA", type="string", length=40, nullable=true)
     */
    private $rodzajPlatnika;

    /**
     * @var string
     *
     * @ORM\Column(name="NIP", type="string", length=20, nullable=true)
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(name="REGON", type="string", length=20, nullable=true)
     */
    private $regon;

    /**
     * @var integer
     *
     * @ORM\Column(name="RODZAJ_DZIAL_U", type="smallint", nullable=true)
     */
    private $rodzajDzialU;

    /**
     * @var integer
     *
     * @ORM\Column(name="RODZAJ_DZIAL_P", type="smallint", nullable=true)
     */
    private $rodzajDzialP;

    /**
     * @var integer
     *
     * @ORM\Column(name="RODZAJ_DZIAL_H", type="smallint", nullable=true)
     */
    private $rodzajDzialH;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ADRESU_DOMYSLNEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idAdresuDomyslnego;

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
     * @ORM\Column(name="ORGAN_ZAL", type="string", length=100, nullable=true)
     */
    private $organZal;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_REJ", type="string", length=100, nullable=true)
     */
    private $nazwaRej;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_REJ", type="integer", nullable=true)
     */
    private $dataRej;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_W_REJ", type="string", length=25, nullable=true)
     */
    private $nrWRej;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_ROZP_DZIAL", type="integer", nullable=true)
     */
    private $dataRozpDzial;

    /**
     * @var integer
     *
     * @ORM\Column(name="AKTYWNA", type="smallint", nullable=true)
     */
    private $aktywna;

    /**
     * @var string
     *
     * @ORM\Column(name="NAGLOWEK", type="string", length=500, nullable=true)
     */
    private $naglowek;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=500, nullable=true)
     */
    private $uwagi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="KP_DATA_REJ", type="datetime", nullable=true)
     */
    private $kpDataRej;

    /**
     * @var integer
     *
     * @ORM\Column(name="KP_TRYB_NUMERACJI", type="smallint", nullable=true)
     */
    private $kpTrybNumeracji = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="KP_MIESIAC_AKTUALNY", type="datetime", nullable=true)
     */
    private $kpMiesiacAktualny;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="KP_DATA_ROZP_DZIAL", type="datetime", nullable=true)
     */
    private $kpDataRozpDzial;

    /**
     * @var integer
     *
     * @ORM\Column(name="FAKIR", type="smallint", nullable=true)
     */
    private $fakir = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="KAPER", type="smallint", nullable=true)
     */
    private $kaper = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MAG", type="smallint", nullable=true)
     */
    private $mag = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="EST2000", type="smallint", nullable=true)
     */
    private $est2000;

    /**
     * @var integer
     *
     * @ORM\Column(name="KP_OSOBA_FIZYCZNA", type="smallint", nullable=true)
     */
    private $kpOsobaFizyczna = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="KP_NUMER_STARTOWY", type="integer", nullable=true)
     */
    private $kpNumerStartowy;

    /**
     * @var string
     *
     * @ORM\Column(name="LOGO_FIRMY", type="string", length=255, nullable=true)
     */
    private $logoFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="KP_ID_RODZAJU", type="smallint", nullable=true)
     */
    private $kpIdRodzaju;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $semafor;

    /**
     * @var integer
     *
     * @ORM\Column(name="KP_RCA", type="smallint", nullable=true)
     */
    private $kpRca = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="KWARTALNY_VAT", type="smallint", nullable=true)
     */
    private $kwartalnyVat = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="MP", type="smallint", nullable=true)
     */
    private $mp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRachunku;

    /**
     * @var boolean
     *
     * @ORM\Column(name="KP_WLASCICIEL_PLATNIKIEM_ZUS", type="boolean", nullable=true)
     */
    private $kpWlascicielPlatnikiemZus;

    /**
     * @var boolean
     *
     * @ORM\Column(name="KP_Odliczenie_ZUS_DW", type="boolean", nullable=true)
     */
    private $kpOdliczenieZusDw;

    /**
     * @var integer
     *
     * @ORM\Column(name="kp_aktywna", type="integer", nullable=true)
     */
    private $kpAktywna = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="NR_FK_PULA_OD", type="integer", nullable=true)
     */
    private $nrFkPulaOd = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="NR_FK_PULA_DO", type="integer", nullable=true)
     */
    private $nrFkPulaDo = '99999999';

    /**
     * @var integer
     *
     * @ORM\Column(name="NR_FK_PULA_AKTUALNY", type="integer", nullable=true)
     */
    private $nrFkPulaAktualny = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="FLAGA_STANU", type="smallint", nullable=true)
     */
    private $flagaStanu = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="GANG", type="smallint", nullable=true)
     */
    private $gang = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KATALOG", type="string", length=260, nullable=true)
     */
    private $katalog;

    /**
     * @var string
     *
     * @ORM\Column(name="METODA_KASOWA", type="string", length=1, nullable=true)
     */
    private $metodaKasowa = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="LOGO_FIRMY_BLOB", type="blob", nullable=true)
     */
    private $logoFirmyBlob;

    /**
     * @var string
     *
     * @ORM\Column(name="PKD", type="string", length=15, nullable=true)
     */
    private $pkd;

    /**
     * @var string
     *
     * @ORM\Column(name="KP_KDU_PATH", type="string", length=300, nullable=true)
     */
    private $kpKduPath;

    /**
     * @var string
     *
     * @ORM\Column(name="NAGLOWEK2", type="string", length=500, nullable=true)
     */
    private $naglowek2;


}

