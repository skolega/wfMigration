<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WfmIntA4bKonfiguracja
 *
 * @ORM\Table(name="WFM_INT_A4B_KONFIGURACJA", uniqueConstraints={@ORM\UniqueConstraint(name="IDX_WFM_INT_A4B_KONFIGURACJA_KOLEJNOSC_KIERUNEK", columns={"Kolejnosc", "Kierunek", "Aktywny"})})
 * @ORM\Entity
 */
class WfmIntA4bKonfiguracja
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Konf", type="integer", nullable=false)
     */
    private $idKonf;

    /**
     * @var string
     *
     * @ORM\Column(name="Kierunek", type="string", length=1, nullable=false)
     */
    private $kierunek;

    /**
     * @var integer
     *
     * @ORM\Column(name="Kolejnosc", type="integer", nullable=true)
     */
    private $kolejnosc;

    /**
     * @var string
     *
     * @ORM\Column(name="Komunikat", type="string", length=20, nullable=false)
     */
    private $komunikat;

    /**
     * @var integer
     *
     * @ORM\Column(name="Aktywny", type="smallint", nullable=false)
     */
    private $aktywny = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="Transakcja", type="smallint", nullable=false)
     */
    private $transakcja = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Wersja", type="string", length=50, nullable=true)
     */
    private $wersja;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data_przetworzenia", type="datetime", nullable=true)
     */
    private $dataPrzetworzenia;

    /**
     * @var string
     *
     * @ORM\Column(name="Opis", type="string", length=1000, nullable=true)
     */
    private $opis;


}

