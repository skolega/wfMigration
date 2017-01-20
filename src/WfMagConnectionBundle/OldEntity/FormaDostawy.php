<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormaDostawy
 *
 * @ORM\Table(name="FORMA_DOSTAWY")
 * @ORM\Entity
 */
class FormaDostawy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FORMY_DOSTAWY", type="string", length=9, nullable=false)
     */
    private $idFormyDostawy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DOSTAWY", type="string", length=10, nullable=true)
     */
    private $typDostawy;

    /**
     * @var integer
     *
     * @ORM\Column(name="SYSTEMOWA", type="smallint", nullable=false)
     */
    private $systemowa = '0';


}

