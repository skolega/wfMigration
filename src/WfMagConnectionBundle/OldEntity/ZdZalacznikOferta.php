<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdZalacznikOferta
 *
 * @ORM\Table(name="ZD_ZALACZNIK_OFERTA")
 * @ORM\Entity
 */
class ZdZalacznikOferta
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_OFERTY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idOferty;

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

