<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdZalacznikPracownik
 *
 * @ORM\Table(name="ZD_ZALACZNIK_PRACOWNIK")
 * @ORM\Entity
 */
class ZdZalacznikPracownik
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRACOWNIKA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPracownika;

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

