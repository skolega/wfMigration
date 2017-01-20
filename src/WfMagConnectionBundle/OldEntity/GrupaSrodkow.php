<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupaSrodkow
 *
 * @ORM\Table(name="GRUPA_SRODKOW")
 * @ORM\Entity
 */
class GrupaSrodkow
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_GRUPY", type="string", length=50, nullable=true)
     */
    private $nazwaGrupy;

    /**
     * @var integer
     *
     * @ORM\Column(name="POZIOM", type="integer", nullable=true)
     */
    private $poziom;

    /**
     * @var string
     *
     * @ORM\Column(name="TREE", type="string", length=40, nullable=true)
     */
    private $tree;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=200, nullable=true)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="NR", type="integer", nullable=true)
     */
    private $nr;


}

