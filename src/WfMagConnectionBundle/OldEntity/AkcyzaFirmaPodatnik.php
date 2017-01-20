<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AkcyzaFirmaPodatnik
 *
 * @ORM\Table(name="AKCYZA_FIRMA_PODATNIK")
 * @ORM\Entity
 */
class AkcyzaFirmaPodatnik
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PODATNIKA", type="string", length=9, nullable=false)
     */
    private $idPodatnika;

    /**
     * @var string
     *
     * @ORM\Column(name="IMIE", type="string", length=30, nullable=true)
     */
    private $imie;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWISKO", type="string", length=50, nullable=true)
     */
    private $nazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_KRAJU", type="string", length=3, nullable=true)
     */
    private $symKraju;

    /**
     * @var string
     *
     * @ORM\Column(name="WOJEWODZTWO", type="string", length=30, nullable=true)
     */
    private $wojewodztwo;

    /**
     * @var string
     *
     * @ORM\Column(name="POWIAT", type="string", length=30, nullable=true)
     */
    private $powiat;

    /**
     * @var string
     *
     * @ORM\Column(name="GMINA", type="string", length=30, nullable=true)
     */
    private $gmina;

    /**
     * @var string
     *
     * @ORM\Column(name="ULICA", type="string", length=50, nullable=false)
     */
    private $ulica;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_DOMU", type="string", length=5, nullable=true)
     */
    private $nrDomu;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_LOKALU", type="string", length=5, nullable=true)
     */
    private $nrLokalu;

    /**
     * @var string
     *
     * @ORM\Column(name="MIEJSCOWOSC", type="string", length=50, nullable=false)
     */
    private $miejscowosc;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_POCZTOWY", type="string", length=6, nullable=true)
     */
    private $kodPocztowy;

    /**
     * @var string
     *
     * @ORM\Column(name="POCZTA", type="string", length=30, nullable=true)
     */
    private $poczta;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_URODZENIA", type="string", length=4, nullable=true)
     */
    private $dataUrodzenia;


}

