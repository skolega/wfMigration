<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaproClrAsemblacje
 *
 * @ORM\Table(name="WAPRO_CLR_Asemblacje")
 * @ORM\Entity
 */
class WaproClrAsemblacje
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ASEMBLACJI", type="integer", nullable=false)
     */
    private $idAsemblacji;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_ASEMBLACJI", type="string", length=100, nullable=true)
     */
    private $nazwaAsemblacji;

    /**
     * @var string
     *
     * @ORM\Column(name="WERSJA", type="string", length=10, nullable=true)
     */
    private $wersja;


}

