<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KlasyfikatorTabelaDostep
 *
 * @ORM\Table(name="KLASYFIKATOR_TABELA_DOSTEP")
 * @ORM\Entity
 */
class KlasyfikatorTabelaDostep
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
     * @ORM\Column(name="ID_UPR", type="string", length=9, nullable=false)
     */
    private $idUpr;


}

