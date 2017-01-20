<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpPracownik
 *
 * @ORM\Table(name="IMP_PRACOWNIK", uniqueConstraints={@ORM\UniqueConstraint(name="IMP_PRAC_ID_IDTRANS", columns={"ID_TRANSAKCJI", "ID_PRACOWNIKA"})})
 * @ORM\Entity
 */
class ImpPracownik
{
    /**
     * @var string
     *
     * @ORM\Column(name="IMP_ID_PRACOWNIKA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $impIdPracownika;

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
     * @ORM\Column(name="ID_PRACOWNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPracownika;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWISKO", type="string", length=40, nullable=true)
     */
    private $nazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="IMIE_1", type="string", length=30, nullable=true)
     */
    private $imie1;

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
     * @var integer
     *
     * @ORM\Column(name="KOD_PRACOWNIKA", type="integer", nullable=true)
     */
    private $kodPracownika;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_URODZENIA", type="integer", nullable=true)
     */
    private $dataUrodzenia;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_EWIDENCYJNY", type="string", length=30, nullable=true)
     */
    private $nrEwidencyjny;

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


}

