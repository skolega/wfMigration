<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WfmIntSystemTablice
 *
 * @ORM\Table(name="WFM_INT_SYSTEM_TABLICE")
 * @ORM\Entity
 */
class WfmIntSystemTablice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Tablicy", type="integer", nullable=false)
     */
    private $idTablicy;

    /**
     * @var string
     *
     * @ORM\Column(name="NazwaTablicy", type="string", length=500, nullable=false)
     */
    private $nazwatablicy;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Systemu", type="integer", nullable=false)
     */
    private $idSystemu;

    /**
     * @var integer
     *
     * @ORM\Column(name="SUBSYSTEM", type="smallint", nullable=false)
     */
    private $subsystem = '0';


}

