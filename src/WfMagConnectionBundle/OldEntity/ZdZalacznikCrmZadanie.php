<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdZalacznikCrmZadanie
 *
 * @ORM\Table(name="ZD_ZALACZNIK_CRM_ZADANIE")
 * @ORM\Entity
 */
class ZdZalacznikCrmZadanie
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZADANIA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idZadania;

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

