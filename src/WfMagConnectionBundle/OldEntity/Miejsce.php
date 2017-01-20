<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Miejsce
 *
 * @ORM\Table(name="MIEJSCE")
 * @ORM\Entity
 */
class Miejsce
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="KODMIEJ", type="string", length=20, nullable=false)
     */
    private $kodmiej;

    /**
     * @var string
     *
     * @ORM\Column(name="TREE", type="string", length=40, nullable=true)
     */
    private $tree;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=false)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="POZIOM", type="integer", nullable=true)
     */
    private $poziom;

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

