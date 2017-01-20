<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WfmIntA4bNumerKomunikatu
 *
 * @ORM\Table(name="WFM_INT_A4B_NUMER_KOMUNIKATU")
 * @ORM\Entity
 */
class WfmIntA4bNumerKomunikatu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Obiektu", type="bigint", nullable=false)
     */
    private $idObiektu;

    /**
     * @var string
     *
     * @ORM\Column(name="NumerKomunikatu", type="string", length=1, nullable=true)
     */
    private $numerkomunikatu;


}

