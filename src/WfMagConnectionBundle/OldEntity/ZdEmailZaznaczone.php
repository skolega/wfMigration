<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdEmailZaznaczone
 *
 * @ORM\Table(name="ZD_EMAIL_ZAZNACZONE")
 * @ORM\Entity
 */
class ZdEmailZaznaczone
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Sesji", type="integer", nullable=false)
     */
    private $idSesji;

    /**
     * @var integer
     *
     * @ORM\Column(name="Uzycie", type="integer", nullable=false)
     */
    private $uzycie;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Id2", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $id2 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Auto", type="integer", nullable=false)
     */
    private $idAuto;


}

