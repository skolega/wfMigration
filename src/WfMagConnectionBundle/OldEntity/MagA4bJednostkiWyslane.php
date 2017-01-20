<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagA4bJednostkiWyslane
 *
 * @ORM\Table(name="MAG_A4B_JEDNOSTKI_WYSLANE")
 * @ORM\Entity
 */
class MagA4bJednostkiWyslane
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_jednostki", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idJednostki;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAzwa", type="string", length=20, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="Skrot", type="string", length=10, nullable=false)
     */
    private $skrot;

    /**
     * @var integer
     *
     * @ORM\Column(name="PODZIELNA", type="smallint", nullable=false)
     */
    private $podzielna;


}

