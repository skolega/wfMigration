<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KlasyfikatorTabelaUpr
 *
 * @ORM\Table(name="KLASYFIKATOR_TABELA_UPR", indexes={@ORM\Index(name="PO_TREE", columns={"KODTREE"})})
 * @ORM\Entity
 */
class KlasyfikatorTabelaUpr
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_UPR", type="string", length=9, nullable=false)
     */
    private $idUpr;

    /**
     * @var string
     *
     * @ORM\Column(name="KODTREE", type="string", length=53, nullable=false)
     */
    private $kodtree;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_SERWER", type="string", length=50, nullable=false)
     */
    private $nazwaSerwer;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="POZIOM", type="string", length=1, nullable=true)
     */
    private $poziom = '0';


}

