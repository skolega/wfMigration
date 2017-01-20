<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagjpkSlownikOpisow
 *
 * @ORM\Table(name="MAGJPK_SLOWNIK_OPISOW")
 * @ORM\Entity
 */
class MagjpkSlownikOpisow
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_JPK_SLOWNIK_OPISOW", type="string", length=9, nullable=false)
     */
    private $idJpkSlownikOpisow;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOD_ZWOLNIENIA", type="smallint", nullable=false)
     */
    private $kodZwolnienia = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_ZWOLNIENIA", type="string", length=500, nullable=false)
     */
    private $opisZwolnienia;


}

