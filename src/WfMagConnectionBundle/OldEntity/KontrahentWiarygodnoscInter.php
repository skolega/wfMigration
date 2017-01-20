<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KontrahentWiarygodnoscInter
 *
 * @ORM\Table(name="KONTRAHENT_WIARYGODNOSC_INTER", indexes={@ORM\Index(name="KONTRAHENT_WIARYGODNOSC_INTER_ID_KONTRAHENTA", columns={"ID_KONTRAHENTA"})})
 * @ORM\Entity
 */
class KontrahentWiarygodnoscInter
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


}

