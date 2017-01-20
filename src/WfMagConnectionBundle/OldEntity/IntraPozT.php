<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IntraPozT
 *
 * @ORM\Table(name="INTRA_POZ_T")
 * @ORM\Entity
 */
class IntraPozT
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPoz;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_INTRASTATU", type="string", length=9, nullable=true)
     */
    private $idIntrastatu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_CN", type="string", length=10, nullable=true)
     */
    private $kodCn;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_TRANSPORTU", type="string", length=10, nullable=true)
     */
    private $kodTransportu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_TRANSAKCJI", type="string", length=10, nullable=true)
     */
    private $kodTransakcji;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_DOSTAWY", type="string", length=10, nullable=true)
     */
    private $kodDostawy;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_TOWARU", type="string", length=100, nullable=true)
     */
    private $opisTowaru;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_POZYCJI", type="string", length=9, nullable=true)
     */
    private $nrPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRAJU_PRZEZ_WYS", type="string", length=3, nullable=true)
     */
    private $kodKrajuPrzezWys;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KRAJU_POCH", type="string", length=3, nullable=true)
     */
    private $kodKrajuPoch;

    /**
     * @var string
     *
     * @ORM\Column(name="MASA_NETTO", type="decimal", precision=16, scale=3, nullable=true)
     */
    private $masaNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC_W_JED_MIARY", type="string", length=9, nullable=true)
     */
    private $iloscWJedMiary;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_FAKTURY", type="string", length=9, nullable=true)
     */
    private $wartoscFaktury;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_STAT", type="string", length=9, nullable=true)
     */
    private $wartoscStat;

    /**
     * @var string
     *
     * @ORM\Column(name="WALIDACJA_OK", type="string", length=20, nullable=true)
     */
    private $walidacjaOk = 'replicate(\'1\',(20))';


}

