<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagGenzamListazm
 *
 * @ORM\Table(name="MAG_GENZAM_LISTAZM")
 * @ORM\Entity
 */
class MagGenzamListazm
{
    /**
     * @var string
     *
     * @ORM\Column(name="ZMIENNA", type="string", length=41, nullable=false)
     */
    private $zmienna;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=255, nullable=true)
     */
    private $opis;


}

