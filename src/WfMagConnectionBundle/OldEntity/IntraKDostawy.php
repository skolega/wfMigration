<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IntraKDostawy
 *
 * @ORM\Table(name="INTRA_K_DOSTAWY")
 * @ORM\Entity
 */
class IntraKDostawy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOSTAWY", type="string", length=9, nullable=false)
     */
    private $idDostawy;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_DOSTAWY", type="string", length=10, nullable=false)
     */
    private $kodDostawy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=200, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY", type="string", length=1, nullable=false)
     */
    private $domyslny = '0';


}

