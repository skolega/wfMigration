<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intermagazyngrupa
 *
 * @ORM\Table(name="INTERMAGAZYNGRUPA", indexes={@ORM\Index(name="FK_MAGAZYN", columns={"ID_MAGAZYNU"}), @ORM\Index(name="FK_GRUPAUZYTKOWNIKOW", columns={"ID_GRUPY"})})
 * @ORM\Entity
 */
class Intermagazyngrupa
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=false)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="string", length=9, nullable=false)
     */
    private $idGrupy;


}

