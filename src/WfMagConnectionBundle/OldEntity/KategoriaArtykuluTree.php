<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KategoriaArtykuluTree
 *
 * @ORM\Table(name="KATEGORIA_ARTYKULU_TREE", uniqueConstraints={@ORM\UniqueConstraint(name="PO_TREE", columns={"ID_FIRMY", "ID_MAGAZYNU", "KOD_TREE"})}, indexes={@ORM\Index(name="PO_NAZWIE", columns={"ID_FIRMY", "ID_MAGAZYNU", "NAZWA"})})
 * @ORM\Entity
 */
class KategoriaArtykuluTree
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="string", length=9, nullable=false)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KATEGORII_TREE", type="string", length=9, nullable=false)
     */
    private $idKategoriiTree;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_TREE", type="string", length=30, nullable=true)
     */
    private $kodTree;

    /**
     * @var integer
     *
     * @ORM\Column(name="POZIOM", type="integer", nullable=true)
     */
    private $poziom;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROZWIN_ZWIN", type="integer", nullable=true)
     */
    private $rozwinZwin = '1';

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="GUID_KATEGORIA_TREE", type="uniqueidentifier", nullable=true)
     */
    private $guidKategoriaTree;


}

