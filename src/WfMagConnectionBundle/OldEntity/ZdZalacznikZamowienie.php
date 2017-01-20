<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdZalacznikZamowienie
 *
 * @ORM\Table(name="ZD_ZALACZNIK_ZAMOWIENIE")
 * @ORM\Entity
 */
class ZdZalacznikZamowienie
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAMOWIENIA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idZamowienia;

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

