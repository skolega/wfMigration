<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Waluty
 *
 * @ORM\Table(name="WALUTY")
 * @ORM\Entity
 */
class Waluty
{
    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WALUTY", type="string", length=3, nullable=false)
     */
    private $symWaluty;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_KRAJU", type="string", length=3, nullable=true)
     */
    private $symKraju;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=30, nullable=true)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUMER", type="integer", nullable=true)
     */
    private $numer;

    /**
     * @var integer
     *
     * @ORM\Column(name="MNOZNIK_WALUTY", type="integer", nullable=true)
     */
    private $mnoznikWaluty;


}

