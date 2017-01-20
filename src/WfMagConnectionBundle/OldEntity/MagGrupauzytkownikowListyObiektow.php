<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagGrupauzytkownikowListyObiektow
 *
 * @ORM\Table(name="MAG_GRUPAUZYTKOWNIKOW_LISTY_OBIEKTOW", indexes={@ORM\Index(name="IDX_96B8119DC7E9AEF1", columns={"ID_LISTY"})})
 * @ORM\Entity
 */
class MagGrupauzytkownikowListyObiektow
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="string", length=9, nullable=false)
     */
    private $idGrupy;

    /**
     * @var \WfMagConnectionBundle\Entity\MagListaObiektow
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\MagListaObiektow")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_LISTY", referencedColumnName="id_listy")
     * })
     */
    private $idListy;


}

