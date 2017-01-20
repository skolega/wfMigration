<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kraje
 *
 * @ORM\Table(name="KRAJE", uniqueConstraints={@ORM\UniqueConstraint(name="AK_KRAJE_NAZWA_KRAJE", columns={"NAZWA"})})
 * @ORM\Entity
 */
class Kraje
{
    /**
     * @var string
     *
     * @ORM\Column(name="SYM_KRAJU", type="string", length=3, nullable=false)
     */
    private $symKraju;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="KRAJUE", type="smallint", nullable=true)
     */
    private $krajue = '0';


}

