<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdZalacznikSerwisZlecenie
 *
 * @ORM\Table(name="ZD_ZALACZNIK_SERWIS_ZLECENIE")
 * @ORM\Entity
 */
class ZdZalacznikSerwisZlecenie
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SERWIS_ZLECENIE", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSerwisZlecenie;

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

