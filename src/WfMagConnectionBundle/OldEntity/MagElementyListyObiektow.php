<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagElementyListyObiektow
 *
 * @ORM\Table(name="MAG_ELEMENTY_LISTY_OBIEKTOW", indexes={@ORM\Index(name="IDX_F0BDE8DA676378B", columns={"id_listy"})})
 * @ORM\Entity
 */
class MagElementyListyObiektow
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_elementu", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idElementu;

    /**
     * @var \WfMagConnectionBundle\Entity\MagListaObiektow
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\MagListaObiektow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_listy", referencedColumnName="id_listy")
     * })
     */
    private $idListy;


}

