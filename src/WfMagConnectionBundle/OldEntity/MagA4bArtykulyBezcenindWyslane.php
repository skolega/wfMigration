<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagA4bArtykulyBezcenindWyslane
 *
 * @ORM\Table(name="MAG_A4B_ARTYKULY_BEZCENIND_WYSLANE", indexes={@ORM\Index(name="IDX_MAG_A4B_ARTYKULY_BEZCENIND_WYSLANE", columns={"ID_ARTYKULU"})})
 * @ORM\Entity
 */
class MagA4bArtykulyBezcenindWyslane
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_A4B", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idA4b;


}

