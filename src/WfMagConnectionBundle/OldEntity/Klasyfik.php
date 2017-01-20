<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Klasyfik
 *
 * @ORM\Table(name="KLASYFIK")
 * @ORM\Entity
 */
class Klasyfik
{
    /**
     * @var string
     *
     * @ORM\Column(name="NRKLASYF", type="string", length=10, nullable=false)
     */
    private $nrklasyf;

    /**
     * @var string
     *
     * @ORM\Column(name="PRNT", type="string", length=10, nullable=true)
     */
    private $prnt;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=150, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="STAWKA", type="decimal", precision=14, scale=2, nullable=true)
     */
    private $stawka;

    /**
     * @var integer
     *
     * @ORM\Column(name="POZIOM", type="integer", nullable=true)
     */
    private $poziom;


}

