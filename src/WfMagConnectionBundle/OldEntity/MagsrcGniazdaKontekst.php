<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagsrcGniazdaKontekst
 *
 * @ORM\Table(name="MAGSRC_GNIAZDA_KONTEKST")
 * @ORM\Entity
 */
class MagsrcGniazdaKontekst
{
    /**
     * @var string
     *
     * @ORM\Column(name="KONTEKST", type="string", length=50, nullable=false)
     */
    private $kontekst;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=100, nullable=false)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="UZYCIE", type="integer", nullable=false)
     */
    private $uzycie;


}

