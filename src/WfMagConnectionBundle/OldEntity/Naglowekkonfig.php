<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Naglowekkonfig
 *
 * @ORM\Table(name="NAGLOWEKKONFIG")
 * @ORM\Entity
 */
class Naglowekkonfig
{
    /**
     * @var string
     *
     * @ORM\Column(name="TYP_KONFIG", type="string", length=1, nullable=true)
     */
    private $typKonfig;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_NAGLOWKA", type="string", length=9, nullable=false)
     */
    private $idNaglowka;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="POZIOM", type="smallint", nullable=true)
     */
    private $poziom;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_WERSJI", type="string", length=4, nullable=true)
     */
    private $kodWersji = '1111';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_TREE", type="string", length=50, nullable=true)
     */
    private $kodTree;


}

