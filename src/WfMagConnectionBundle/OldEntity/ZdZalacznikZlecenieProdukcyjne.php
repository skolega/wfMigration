<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdZalacznikZlecenieProdukcyjne
 *
 * @ORM\Table(name="ZD_ZALACZNIK_ZLECENIE_PRODUKCYJNE")
 * @ORM\Entity
 */
class ZdZalacznikZlecenieProdukcyjne
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZLECENIA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idZlecenia;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRGKOD", type="smallint", nullable=false)
     */
    private $prgkod;

    /**
     * @var integer
     *
     * @ORM\Column(name="LICZBA_ZALACZNIKOW", type="integer", nullable=false)
     */
    private $liczbaZalacznikow;


}

