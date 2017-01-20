<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnalizaPlynnosciPoz
 *
 * @ORM\Table(name="ANALIZA_PLYNNOSCI_POZ")
 * @ORM\Entity
 */
class AnalizaPlynnosciPoz
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ANALIZY", type="string", length=9, nullable=false)
     */
    private $idAnalizy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="SUMA_PRZYCHODOW", type="string", length=9, nullable=true)
     */
    private $sumaPrzychodow;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZAS_DO_PIERW_SPRZED", type="integer", nullable=true)
     */
    private $czasDoPierwSprzed;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZAS_SPRZED", type="integer", nullable=true)
     */
    private $czasSprzed;

    /**
     * @var string
     *
     * @ORM\Column(name="STAN_DOSTAW", type="string", length=9, nullable=true)
     */
    private $stanDostaw;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_DOSTAW", type="string", length=9, nullable=true)
     */
    private $wartoscDostaw;

    /**
     * @var string
     *
     * @ORM\Column(name="SPRZED_NA_TYDZ", type="string", length=9, nullable=true)
     */
    private $sprzedNaTydz;

    /**
     * @var string
     *
     * @ORM\Column(name="CZAS_SPRZED_NA_JM", type="string", length=9, nullable=true)
     */
    private $czasSprzedNaJm;


}

