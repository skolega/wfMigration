<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaproDrzewoWynikow
 *
 * @ORM\Table(name="WAPRO_DRZEWO_WYNIKOW", indexes={@ORM\Index(name="IDX_WAPRO_DRZEWO_WYNIKOW_UZYCIE_ID_SESJI_ID_OBIEKTU", columns={"ID_SESJI", "UZYCIE", "ID_OBIEKTU"}), @ORM\Index(name="IDX_WAPRO_DRZEWO_WYNIKOW_ID_ZAPISU_RODZIC", columns={"ID_ZAPISU_RODZIC"}), @ORM\Index(name="IDX_WAPRO_DRZEWO_WYNIKOW_KOLEJNOSC", columns={"ID_SESJI", "UZYCIE", "KOLEJNOSC"}), @ORM\Index(name="IDX_WAPRO_DRZEWO_WYNIKOW_KODTREE", columns={"KOD_TREE"}), @ORM\Index(name="IDX_WAPRO_DRZEWO_WYNIKOW_OPIS_RODZIC", columns={"OPIS", "ID_ZAPISU_RODZIC"})})
 * @ORM\Entity
 */
class WaproDrzewoWynikow
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAPISU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idZapisu;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=255, nullable=false)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="KOLEJNOSC", type="string", length=300, nullable=true)
     */
    private $kolejnosc;

    /**
     * @var integer
     *
     * @ORM\Column(name="POZIOM", type="integer", nullable=false)
     */
    private $poziom = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAPISU_RODZIC", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idZapisuRodzic;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_TREE", type="string", length=255, nullable=true)
     */
    private $kodTree;

    /**
     * @var integer
     *
     * @ORM\Column(name="LP", type="integer", nullable=false)
     */
    private $lp = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IKONA", type="integer", nullable=false)
     */
    private $ikona = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="UZYCIE", type="integer", nullable=false)
     */
    private $uzycie = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SESJI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSesji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OBIEKTU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idObiektu;


}

