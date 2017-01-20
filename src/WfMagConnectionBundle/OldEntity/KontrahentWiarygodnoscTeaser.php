<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KontrahentWiarygodnoscTeaser
 *
 * @ORM\Table(name="KONTRAHENT_WIARYGODNOSC_TEASER", indexes={@ORM\Index(name="KONTRAHENT_WIARYGODNOSC_TEASER_ID_KONTRAHENTA_DATA", columns={"ID_KONTRAHENTA", "DATA"})})
 * @ORM\Entity
 */
class KontrahentWiarygodnoscTeaser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="integer", nullable=false)
     */
    private $idKontrahenta;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_COFACE", type="integer", nullable=true)
     */
    private $idCoface;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="TEASER_TEXT", type="text", length=-1, nullable=true)
     */
    private $teaserText;

    /**
     * @var integer
     *
     * @ORM\Column(name="OSTATNIA_OCENA_NR", type="smallint", nullable=true)
     */
    private $ostatniaOcenaNr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA_BADANIA", type="datetime", nullable=true)
     */
    private $dataBadania;


}

