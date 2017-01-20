<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZaznaczoneMaggen
 *
 * @ORM\Table(name="ZAZNACZONE_MAGGEN")
 * @ORM\Entity
 */
class ZaznaczoneMaggen
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_TABELI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idTabeli;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SESJI", type="string", length=9, nullable=false)
     */
    private $idSesji;

    /**
     * @var integer
     *
     * @ORM\Column(name="UZYCIE", type="integer", nullable=false)
     */
    private $uzycie;

    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=9, nullable=false)
     */
    private $id;


}

