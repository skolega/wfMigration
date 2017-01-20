<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterRaportmenu
 *
 * @ORM\Table(name="INTER_RAPORTMENU", uniqueConstraints={@ORM\UniqueConstraint(name="AK_INTERRAPMEN_MEN_KO_INTER_RA", columns={"ID_MENU", "KOLEJNOSC", "ID_RAPORTU"})})
 * @ORM\Entity
 */
class InterRaportmenu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_MENU", type="string", length=50, nullable=false)
     */
    private $idMenu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RAPORTU", type="string", length=9, nullable=false)
     */
    private $idRaportu;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOLEJNOSC", type="integer", nullable=true)
     */
    private $kolejnosc;

    /**
     * @var string
     *
     * @ORM\Column(name="DRUKUJ", type="string", length=1, nullable=true)
     */
    private $drukuj;


}

