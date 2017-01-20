<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagsrcTypyFunkcji
 *
 * @ORM\Table(name="MAGSRC_TYPY_FUNKCJI")
 * @ORM\Entity
 */
class MagsrcTypyFunkcji
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_TYPU", type="integer", nullable=false)
     */
    private $idTypu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;


}

