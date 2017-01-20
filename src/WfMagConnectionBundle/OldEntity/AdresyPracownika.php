<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdresyPracownika
 *
 * @ORM\Table(name="ADRESY_PRACOWNIKA", uniqueConstraints={@ORM\UniqueConstraint(name="AK_ADRESY_PRAC_IDPRAC_ADRESY_P", columns={"ID_PRACOWNIKA", "DATA_OD", "TYP_ADRESU"})})
 * @ORM\Entity
 */
class AdresyPracownika
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ADRESY_PRAC", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idAdresyPrac;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_OD", type="integer", nullable=false)
     */
    private $dataOd;

    /**
     * @var string
     *
     * @ORM\Column(name="WOJEWODZTWO", type="string", length=30, nullable=true)
     */
    private $wojewodztwo;

    /**
     * @var string
     *
     * @ORM\Column(name="POWIAT", type="string", length=40, nullable=true)
     */
    private $powiat;

    /**
     * @var string
     *
     * @ORM\Column(name="GMINA", type="string", length=40, nullable=true)
     */
    private $gmina;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCOWOSC", type="string", length=40, nullable=true)
     */
    private $miejscowosc;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_POCZTOWY", type="string", length=20, nullable=true)
     */
    private $kodPocztowy;

    /**
     * @var string
     *
     * @ORM\Column(name="POCZTA", type="string", length=40, nullable=true)
     */
    private $poczta;

    /**
     * @var string
     *
     * @ORM\Column(name="ULICA", type="string", length=40, nullable=true)
     */
    private $ulica;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_DOMU", type="string", length=10, nullable=true)
     */
    private $nrDomu;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_LOKALU", type="string", length=10, nullable=true)
     */
    private $nrLokalu;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFON", type="string", length=50, nullable=true)
     */
    private $telefon;

    /**
     * @var string
     *
     * @ORM\Column(name="FAKS", type="string", length=50, nullable=true)
     */
    private $faks;

    /**
     * @var string
     *
     * @ORM\Column(name="E_MAIL", type="string", length=50, nullable=true)
     */
    private $eMail;

    /**
     * @var string
     *
     * @ORM\Column(name="SKRYTKA", type="string", length=10, nullable=true)
     */
    private $skrytka;

    /**
     * @var integer
     *
     * @ORM\Column(name="AKTYWNY", type="smallint", nullable=true)
     */
    private $aktywny;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRACOWNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPracownika;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_KRAJU", type="string", length=3, nullable=true)
     */
    private $symKraju;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="KP_DATA_OD", type="datetime", nullable=true)
     */
    private $kpDataOd;

    /**
     * @var string
     *
     * @ORM\Column(name="KP_ID_URZEDU_SKARBOWEGO", type="string", length=9, nullable=true)
     */
    private $kpIdUrzeduSkarbowego;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_ADRESU", type="string", length=1, nullable=true)
     */
    private $typAdresu = 'M';

    /**
     * @var string
     *
     * @ORM\Column(name="TELEX", type="string", length=50, nullable=true)
     */
    private $telex;

    /**
     * @var string
     *
     * @ORM\Column(name="KRAJ", type="string", length=50, nullable=true)
     */
    private $kraj;


}

