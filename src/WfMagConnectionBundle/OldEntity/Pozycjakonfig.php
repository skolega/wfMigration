<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pozycjakonfig
 *
 * @ORM\Table(name="POZYCJAKONFIG", indexes={@ORM\Index(name="POZYCJAKONFIG_IDNAG_KOD", columns={"ID_NAGLOWKA", "KOD"})})
 * @ORM\Entity
 */
class Pozycjakonfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI", type="string", length=9, nullable=false)
     */
    private $idPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_NAGLOWKA", type="string", length=9, nullable=true)
     */
    private $idNaglowka;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD", type="string", length=20, nullable=false)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="MASKA", type="string", length=20, nullable=true)
     */
    private $maska = '@s20';

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSCI", type="string", length=200, nullable=true)
     */
    private $wartosci;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPKONTROLKI", type="string", length=1, nullable=true)
     */
    private $typkontrolki;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_WERSJI", type="string", length=4, nullable=true)
     */
    private $kodWersji = '1111';

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC_DOM", type="string", length=200, nullable=true)
     */
    private $wartoscDom = '';


}

