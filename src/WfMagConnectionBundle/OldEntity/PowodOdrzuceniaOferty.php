<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PowodOdrzuceniaOferty
 *
 * @ORM\Table(name="POWOD_ODRZUCENIA_OFERTY", indexes={@ORM\Index(name="POWOD_ODRZUCENIA_OFERTY_OPIS", columns={"POWOD_OPIS"})})
 * @ORM\Entity
 */
class PowodOdrzuceniaOferty
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POWODU", type="string", length=9, nullable=false)
     */
    private $idPowodu;

    /**
     * @var string
     *
     * @ORM\Column(name="POWOD_OPIS", type="string", length=300, nullable=true)
     */
    private $powodOpis;


}

