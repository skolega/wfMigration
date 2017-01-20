<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TrybPracy
 *
 * @ORM\Table(name="TRYB_PRACY")
 * @ORM\Entity
 */
class TrybPracy
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PRGKOD", type="integer", nullable=false)
     */
    private $prgkod;

    /**
     * @var integer
     *
     * @ORM\Column(name="STATUS", type="smallint", nullable=true)
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="PARAMETRY", type="string", length=100, nullable=true)
     */
    private $parametry;


}

