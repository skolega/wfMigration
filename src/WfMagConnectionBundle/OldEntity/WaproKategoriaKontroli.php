<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaproKategoriaKontroli
 *
 * @ORM\Table(name="WAPRO_KATEGORIA_KONTROLI", indexes={@ORM\Index(name="IDX_WAPRO_KATKONTR_ID_KAT_RODZIC", columns={"ID_KATEGORII_RODZIC"}), @ORM\Index(name="IDX_WAPRO_KATKONTR_KOLEJNOSC", columns={"KOLEJNOSC"}), @ORM\Index(name="IDX_WAPRO_KATKONTR_KODTREE", columns={"KOD_TREE"}), @ORM\Index(name="IDX_WAPRO_KATKONTR_NAZWA_RODZIC", columns={"NAZWA", "ID_KATEGORII_RODZIC"}), @ORM\Index(name="IDX_WAPRO_KATKONTR_ID_KAT_KOLEJNOSC", columns={"ID_KATEGORII", "KOLEJNOSC"})})
 * @ORM\Entity
 */
class WaproKategoriaKontroli
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_KATEGORII", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idKategorii;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=false)
     */
    private $nazwa;

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
     * @ORM\Column(name="ID_KATEGORII_RODZIC", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idKategoriiRodzic;

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
     * @ORM\Column(name="PRGKOD", type="integer", nullable=false)
     */
    private $prgkod = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="SYSKAT", type="smallint", nullable=true)
     */
    private $syskat = '0';


}

