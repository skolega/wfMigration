<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnalizaPlynnosciPozDost
 *
 * @ORM\Table(name="ANALIZA_PLYNNOSCI_POZ_DOST")
 * @ORM\Entity
 */
class AnalizaPlynnosciPozDost
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
     * @ORM\Column(name="ID_POZ_DOSTAWY", type="string", length=9, nullable=false)
     */
    private $idPozDostawy;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_DOSTAWY", type="string", length=4, nullable=true)
     */
    private $dataDostawy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=true)
     */
    private $idKontrahenta;

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

    /**
     * @var string
     *
     * @ORM\Column(name="KOREKTA", type="string", length=1, nullable=true)
     */
    private $korekta = '0';


}

