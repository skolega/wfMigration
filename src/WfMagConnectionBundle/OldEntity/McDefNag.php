<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * McDefNag
 *
 * @ORM\Table(name="MC_DEF_NAG")
 * @ORM\Entity
 */
class McDefNag
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MC_DEF_NAG", type="string", length=9, nullable=false)
     */
    private $idMcDefNag;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=255, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="STRONA_KODOWA", type="string", length=50, nullable=true)
     */
    private $stronaKodowa;


}

