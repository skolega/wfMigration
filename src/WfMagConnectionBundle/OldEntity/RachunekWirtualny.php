<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RachunekWirtualny
 *
 * @ORM\Table(name="RACHUNEK_WIRTUALNY", indexes={@ORM\Index(name="RACHUNEKWIRTUALNY_NUMERRACHUNKU", columns={"NUMER_RACHUNKU"}), @ORM\Index(name="RACHUNEKWIRTUALNY_IDKONTRAHENTA", columns={"ID_KONTRAHENTA"})})
 * @ORM\Entity
 */
class RachunekWirtualny
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_RACHUNKU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idRachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SCHEMATU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idSchematu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_RACHUNKU", type="string", length=50, nullable=true)
     */
    private $numerRachunku;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_DOMYSLNY", type="smallint", nullable=true)
     */
    private $czyDomyslny;


}

