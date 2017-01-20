<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupaKlasyfikatorTabela
 *
 * @ORM\Table(name="GRUPA_KLASYFIKATOR_TABELA", indexes={@ORM\Index(name="IDX_EE5297D5A7EE903", columns={"ID_TABELI"})})
 * @ORM\Entity
 */
class GrupaKlasyfikatorTabela
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="string", length=9, nullable=false)
     */
    private $idGrupy;

    /**
     * @var \WfMagConnectionBundle\Entity\KlasyfikatorTabela
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\KlasyfikatorTabela")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_TABELI", referencedColumnName="ID_TABELI")
     * })
     */
    private $idTabeli;


}

