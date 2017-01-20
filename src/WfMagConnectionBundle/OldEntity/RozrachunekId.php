<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RozrachunekId
 *
 * @ORM\Table(name="ROZRACHUNEK_ID")
 * @ORM\Entity
 */
class RozrachunekId
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idRozrachunku;

    /**
     * @var integer
     *
     * @ORM\Column(name="SPID", type="integer", nullable=true)
     */
    private $spid = '@@spid';


}

