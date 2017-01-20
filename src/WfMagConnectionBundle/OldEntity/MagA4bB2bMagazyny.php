<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagA4bB2bMagazyny
 *
 * @ORM\Table(name="MAG_A4B_B2B_MAGAZYNY")
 * @ORM\Entity
 */
class MagA4bB2bMagazyny
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_A4B", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idMagazynu;


}

