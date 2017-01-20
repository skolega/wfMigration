<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagUzytkownikFiltrow
 *
 * @ORM\Table(name="MAG_UZYTKOWNIK_FILTROW", indexes={@ORM\Index(name="IDX_FA2EE16E53B108CB", columns={"ID_FILTRA"})})
 * @ORM\Entity
 */
class MagUzytkownikFiltrow
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var \WfMagConnectionBundle\Entity\MagDefinicjaFiltra
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\MagDefinicjaFiltra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_FILTRA", referencedColumnName="id_filtra")
     * })
     */
    private $idFiltra;


}

