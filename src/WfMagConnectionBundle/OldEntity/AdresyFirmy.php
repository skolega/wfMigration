<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdresyFirmy
 *
 * @ORM\Table(name="ADRESY_FIRMY", indexes={@ORM\Index(name="ADRESY_FIRMY_IDF_TY_DATA", columns={"ID_FIRMY", "TYP_ADRESU", "DATA_OD"})})
 * @ORM\Entity
 */
class AdresyFirmy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ADRESY_FIRMY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idAdresyFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_KRAJU", type="string", length=3, nullable=true)
     */
    private $symKraju;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_OD", type="integer", nullable=true)
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
     * @ORM\Column(name="TYP_ADRESU", type="string", length=1, nullable=true)
     */
    private $typAdresu = 'S';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="KP_DATA_OD", type="datetime", nullable=true)
     */
    private $kpDataOd;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_URZEDU_SKARBOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUrzeduSkarbowego;

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

    /**
     * @var integer
     *
     * @ORM\Column(name="ZAKONCZENIE", type="smallint", nullable=true)
     */
    private $zakonczenie;


}

