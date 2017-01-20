<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Odsetki
 *
 * @ORM\Table(name="ODSETKI")
 * @ORM\Entity
 */
class Odsetki
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_TABELI_ODSETEK", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idTabeliOdsetek;

    /**
     * @var integer
     *
     * @ORM\Column(name="OD_DNIA", type="integer", nullable=false)
     */
    private $odDnia;

    /**
     * @var integer
     *
     * @ORM\Column(name="DO_DNIA", type="integer", nullable=true)
     */
    private $doDnia;

    /**
     * @var string
     *
     * @ORM\Column(name="STOPA", type="decimal", precision=8, scale=4, nullable=true)
     */
    private $stopa;

    /**
     * @var integer
     *
     * @ORM\Column(name="ZA_OKRES", type="integer", nullable=true)
     */
    private $zaOkres;


}

