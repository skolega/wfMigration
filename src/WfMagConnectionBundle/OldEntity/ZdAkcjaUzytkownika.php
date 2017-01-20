<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdAkcjaUzytkownika
 *
 * @ORM\Table(name="ZD_AKCJA_UZYTKOWNIKA")
 * @ORM\Entity
 */
class ZdAkcjaUzytkownika
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_AKCJI_UZYTKOWNIKA", type="bigint", nullable=false)
     */
    private $idAkcjiUzytkownika;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA", type="datetime", nullable=false)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROGRAMU_WF", type="smallint", nullable=true)
     */
    private $idProgramuWf;


}

