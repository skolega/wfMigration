<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zaznaczone
 *
 * @ORM\Table(name="ZAZNACZONE")
 * @ORM\Entity
 */
class Zaznaczone
{
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

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=true)
     */
    private $ilosc;

    /**
     * @var string
     *
     * @ORM\Column(name="ID2", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $id2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_AUTO", type="string", length=9, nullable=false)
     */
    private $idAuto;


}

