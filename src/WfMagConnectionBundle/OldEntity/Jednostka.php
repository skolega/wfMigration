<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jednostka
 *
 * @ORM\Table(name="JEDNOSTKA", indexes={@ORM\Index(name="JEDNOSTKA_IDFIR_SKROT", columns={"ID_FIRMY", "ID_ARTYKULU", "SKROT"})})
 * @ORM\Entity
 */
class Jednostka
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_JEDNOSTKI", type="string", length=9, nullable=false)
     */
    private $idJednostki;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=20, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="SKROT", type="string", length=10, nullable=false)
     */
    private $skrot;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK", type="string", length=9, nullable=true)
     */
    private $przelicznik = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="PODZIELNA", type="string", length=1, nullable=true)
     */
    private $podzielna;

    /**
     * @var string
     *
     * @ORM\Column(name="WZORZEC_INNEJ", type="string", length=1, nullable=true)
     */
    private $wzorzecInnej = '0';


}

