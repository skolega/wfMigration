<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stanowisko
 *
 * @ORM\Table(name="STANOWISKO")
 * @ORM\Entity
 */
class Stanowisko
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_STANOWISKA", type="string", length=9, nullable=false)
     */
    private $idStanowiska;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=true)
     */
    private $nazwa;


}

