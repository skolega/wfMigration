<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menuraportu
 *
 * @ORM\Table(name="MENURAPORTU")
 * @ORM\Entity
 */
class Menuraportu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MENU", type="string", length=50, nullable=false)
     */
    private $idMenu;


}

