<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RodzajOperacjiFin
 *
 * @ORM\Table(name="RODZAJ_OPERACJI_FIN")
 * @ORM\Entity
 */
class RodzajOperacjiFin
{
    /**
     * @var string
     *
     * @ORM\Column(name="KOD_OPERACJI", type="string", length=5, nullable=false)
     */
    private $kodOperacji;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=true)
     */
    private $nazwa;


}

