<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagListySzablonowDokser
 *
 * @ORM\Table(name="MAG_LISTY_SZABLONOW_DOKSER", indexes={@ORM\Index(name="IDX_D2556B6D676378B", columns={"id_listy"})})
 * @ORM\Entity
 */
class MagListySzablonowDokser
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_szablonu", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSzablonu;

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

