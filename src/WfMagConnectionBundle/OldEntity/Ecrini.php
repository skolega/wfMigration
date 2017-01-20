<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ecrini
 *
 * @ORM\Table(name="ECRINI")
 * @ORM\Entity
 */
class Ecrini
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ECR", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idEcr;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_KOMPUTERA", type="string", length=100, nullable=false)
     */
    private $nazwaKomputera;

    /**
     * @var string
     *
     * @ORM\Column(name="P1", type="string", length=255, nullable=true)
     */
    private $p1;

    /**
     * @var string
     *
     * @ORM\Column(name="P2", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $p2;


}

