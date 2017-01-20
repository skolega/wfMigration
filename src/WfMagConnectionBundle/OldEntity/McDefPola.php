<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * McDefPola
 *
 * @ORM\Table(name="MC_DEF_POLA")
 * @ORM\Entity
 */
class McDefPola
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MC_DEF_POLA", type="string", length=9, nullable=false)
     */
    private $idMcDefPola;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC", type="string", length=100, nullable=true)
     */
    private $wartosc;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP", type="string", length=1, nullable=true)
     */
    private $typ;


}

