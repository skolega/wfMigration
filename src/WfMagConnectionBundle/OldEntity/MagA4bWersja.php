<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagA4bWersja
 *
 * @ORM\Table(name="MAG_A4B_WERSJA")
 * @ORM\Entity
 */
class MagA4bWersja
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_A4B_WERSJA", type="integer", nullable=false)
     */
    private $idA4bWersja;

    /**
     * @var string
     *
     * @ORM\Column(name="NumerWersji", type="string", length=50, nullable=true)
     */
    private $numerwersji;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataRejestracji", type="datetime", nullable=false)
     */
    private $datarejestracji;

    /**
     * @var string
     *
     * @ORM\Column(name="CCWersja", type="string", length=50, nullable=true)
     */
    private $ccwersja;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataZmianyCCWersja", type="datetime", nullable=false)
     */
    private $datazmianyccwersja = 'CURRENT_TIMESTAMP';


}

