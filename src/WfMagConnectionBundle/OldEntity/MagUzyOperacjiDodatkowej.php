<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagUzyOperacjiDodatkowej
 *
 * @ORM\Table(name="MAG_UZY_OPERACJI_DODATKOWEJ")
 * @ORM\Entity
 */
class MagUzyOperacjiDodatkowej
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OPERACJI", type="string", length=9, nullable=false)
     */
    private $idOperacji;


}

