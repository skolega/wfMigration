<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RaportUzytkownika
 *
 * @ORM\Table(name="RAPORT_UZYTKOWNIKA", indexes={@ORM\Index(name="IDX_B73758B1812AD6A8", columns={"ID_UZYTKOWNIKA"}), @ORM\Index(name="IDX_B73758B1AF99967F", columns={"ID_RAPORTU"})})
 * @ORM\Entity
 */
class RaportUzytkownika
{
    /**
     * @var \WfMagConnectionBundle\Entity\Uzytkownik
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\Uzytkownik")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_UZYTKOWNIKA", referencedColumnName="ID_UZYTKOWNIKA")
     * })
     */
    private $idUzytkownika;

    /**
     * @var \WfMagConnectionBundle\Entity\Raport
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\Raport")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_RAPORTU", referencedColumnName="ID_RAPORTU")
     * })
     */
    private $idRaportu;


}

