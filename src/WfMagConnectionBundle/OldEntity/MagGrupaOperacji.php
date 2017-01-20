<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagGrupaOperacji
 *
 * @ORM\Table(name="MAG_GRUPA_OPERACJI")
 * @ORM\Entity
 */
class MagGrupaOperacji
{
    /**
     * @var string
     *
     * @ORM\Column(name="KOD", type="string", length=50, nullable=false)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;


}

