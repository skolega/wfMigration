<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KlasyfikatorKolumna
 *
 * @ORM\Table(name="KLASYFIKATOR_KOLUMNA", indexes={@ORM\Index(name="KOL_LIST_IDTAB_KOL", columns={"ID_TABELI", "KOLEJNOSC"}), @ORM\Index(name="IDX_B3472DDE246CF5AC", columns={"ID_ATRYBUTU"})})
 * @ORM\Entity
 */
class KlasyfikatorKolumna
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_TABELI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idTabeli;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOLEJNOSC", type="integer", nullable=false)
     */
    private $kolejnosc;

    /**
     * @var string
     *
     * @ORM\Column(name="NAGLOWEK", type="string", length=50, nullable=false)
     */
    private $naglowek;

    /**
     * @var integer
     *
     * @ORM\Column(name="SZEROKOSC", type="integer", nullable=false)
     */
    private $szerokosc;

    /**
     * @var string
     *
     * @ORM\Column(name="WYROWNANIE", type="string", length=20, nullable=true)
     */
    private $wyrownanie;

    /**
     * @var \WfMagConnectionBundle\Entity\KlasyfikatorAtrybut
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\KlasyfikatorAtrybut")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ATRYBUTU", referencedColumnName="ID_ATRYBUTU")
     * })
     */
    private $idAtrybutu;


}

