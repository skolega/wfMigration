<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdEpocztaWersja
 *
 * @ORM\Table(name="ZD_EPOCZTA_WERSJA")
 * @ORM\Entity
 */
class ZdEpocztaWersja
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="WERSJA", type="string", length=200, nullable=true)
     */
    private $wersja;


}

