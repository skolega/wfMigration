<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProgiRabatowe
 *
 * @ORM\Table(name="PROGI_RABATOWE")
 * @ORM\Entity
 */
class ProgiRabatowe
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="PROG", type="string", length=9, nullable=false)
     */
    private $prog;

    /**
     * @var string
     *
     * @ORM\Column(name="RABAT", type="string", length=5, nullable=true)
     */
    private $rabat;


}

