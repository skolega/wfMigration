<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Uzytkownikgrupy
 *
 * @ORM\Table(name="UZYTKOWNIKGRUPY", indexes={@ORM\Index(name="UZYTKOWNIKGRUPY_ID_GRUPY", columns={"ID_GRUPY"}), @ORM\Index(name="UZYTKOWNIKGRUPY_ID_UZYTKOWNIK", columns={"ID_UZYTKOWNIKA"})})
 * @ORM\Entity
 */
class Uzytkownikgrupy
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
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;


}

