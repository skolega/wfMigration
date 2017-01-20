<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdZalacznikSerwisUrzadzenie
 *
 * @ORM\Table(name="ZD_ZALACZNIK_SERWIS_URZADZENIE")
 * @ORM\Entity
 */
class ZdZalacznikSerwisUrzadzenie
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_URZADZENIA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idUrzadzenia;

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

