<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CenaGrupy
 *
 * @ORM\Table(name="CENA_GRUPY", uniqueConstraints={@ORM\UniqueConstraint(name="UIDX_ID_CENA_GRUPY", columns={"ID_CENA_GRUPY"})}, indexes={@ORM\Index(name="CENA_GRU_IDCENY", columns={"ID_CENY"}), @ORM\Index(name="CENA_GRU_IDKAT", columns={"ID_KATEGORII"}), @ORM\Index(name="CENA_GRU_IDGRU_IDKAT", columns={"ID_GRUPY", "ID_KATEGORII"})})
 * @ORM\Entity
 */
class CenaGrupy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KATEGORII", type="string", length=9, nullable=false)
     */
    private $idKategorii;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="string", length=9, nullable=false)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENY", type="string", length=9, nullable=true)
     */
    private $idCeny;

    /**
     * @var string
     *
     * @ORM\Column(name="NARZUT", type="string", length=5, nullable=true)
     */
    private $narzut;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENA_GRUPY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idCenaGrupy;


}

