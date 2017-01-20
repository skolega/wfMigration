<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagFunkcja
 *
 * @ORM\Table(name="MAG_FUNKCJA")
 * @ORM\Entity
 */
class MagFunkcja
{
    /**
     * @var string
     *
     * @ORM\Column(name="KOD_FUNKCJI", type="string", length=20, nullable=false)
     */
    private $kodFunkcji;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_FUNKCJI", type="string", length=50, nullable=false)
     */
    private $nazwaFunkcji;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_FUNKCJI", type="string", length=200, nullable=true)
     */
    private $opisFunkcji;

    /**
     * @var string
     *
     * @ORM\Column(name="HASLO", type="string", length=20, nullable=true)
     */
    private $haslo;


}

