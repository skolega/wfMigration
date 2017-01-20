<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Waproprgini
 *
 * @ORM\Table(name="WaproPrgINI")
 * @ORM\Entity
 */
class Waproprgini
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PRGKOD", type="smallint", nullable=false)
     */
    private $prgkod;

    /**
     * @var string
     *
     * @ORM\Column(name="AZDATA", type="string", length=16, nullable=true)
     */
    private $azdata;

    /**
     * @var integer
     *
     * @ORM\Column(name="AZOKRES", type="smallint", nullable=false)
     */
    private $azokres = '3';


}

