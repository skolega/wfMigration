<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MkPracownik
 *
 * @ORM\Table(name="MK_PRACOWNIK")
 * @ORM\Entity
 */
class MkPracownik
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
     * @ORM\Column(name="ID_TRANSAKCJI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idTransakcji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
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
     * @ORM\Column(name="MIEJSCE_URODZ", type="string", length=20, nullable=true)
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
    private $flagaStanu;

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
     * @var string
     *
     * @ORM\Column(name="DOS_KOD", type="string", length=5, nullable=true)
     */
    private $dosKod;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KARTOTEKI", type="string", length=9, nullable=true)
     */
    private $idKartoteki;


}

