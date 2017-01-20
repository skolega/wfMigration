<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagGrupaOperacjiDodatkowej
 *
 * @ORM\Table(name="MAG_GRUPA_OPERACJI_DODATKOWEJ")
 * @ORM\Entity
 */
class MagGrupaOperacjiDodatkowej
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="string", length=9, nullable=false)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OPERACJI", type="string", length=9, nullable=false)
     */
    private $idOperacji;


}

