<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpKontrahent
 *
 * @ORM\Table(name="IMP_KONTRAHENT")
 * @ORM\Entity
 */
class ImpKontrahent
{
    /**
     * @var string
     *
     * @ORM\Column(name="IMP_ID_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $impIdKontrahenta;

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
     * @ORM\Column(name="ID_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idKontrahenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOD_KONTRAHENTA", type="integer", nullable=true)
     */
    private $kodKontrahenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOD_PLATNIKA", type="integer", nullable=true)
     */
    private $kodPlatnika;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_PELNA", type="string", length=200, nullable=true)
     */
    private $nazwaPelna;

    /**
     * @var string
     *
     * @ORM\Column(name="ADRES", type="string", length=200, nullable=true)
     */
    private $adres;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_POCZTOWY", type="string", length=200, nullable=true)
     */
    private $kodPocztowy;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCOWOSC", type="string", length=200, nullable=true)
     */
    private $miejscowosc;

    /**
     * @var string
     *
     * @ORM\Column(name="ULICA_LOKAL", type="string", length=200, nullable=true)
     */
    private $ulicaLokal;

    /**
     * @var string
     *
     * @ORM\Column(name="NIP", type="string", length=30, nullable=true)
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KLASYFIKACJI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idKlasyfikacji;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_KLASYFIKACJI", type="string", length=50, nullable=true)
     */
    private $nazwaKlasyfikacji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_GRUPY", type="string", length=50, nullable=true)
     */
    private $nazwaGrupy;

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
     * @ORM\Column(name="SYM_KRAJU", type="string", length=3, nullable=true)
     */
    private $symKraju;

    /**
     * @var integer
     *
     * @ORM\Column(name="VAT_CZYNNY", type="smallint", nullable=true)
     */
    private $vatCzynny;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_KONTRAHENT_UE", type="smallint", nullable=true)
     */
    private $czyKontrahentUe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RAKS_KOD_KONTRAHENTA", type="string", length=70, nullable=true)
     */
    private $raksKodKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="PESEL", type="string", length=20, nullable=true)
     */
    private $pesel;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLATNIK_VAT", type="smallint", nullable=true)
     */
    private $platnikVat;


}

