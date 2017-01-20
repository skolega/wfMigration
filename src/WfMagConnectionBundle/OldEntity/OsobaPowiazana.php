<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OsobaPowiazana
 *
 * @ORM\Table(name="OSOBA_POWIAZANA", uniqueConstraints={@ORM\UniqueConstraint(name="SOBA_POWIAZANA_NAZWA", columns={"ID_KONTRAHENTA", "FUNKCJA", "DOKUMENT", "NAZWA"})}, indexes={@ORM\Index(name="SOBA_POWIAZANA_IND1", columns={"ID_KONTRAHENTA", "FUNKCJA", "DOKUMENT", "CZY_DOMYSLNY"})})
 * @ORM\Entity
 */
class OsobaPowiazana
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_OSOPOW", type="string", length=9, nullable=false)
     */
    private $idOsopow;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=false)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="FUNKCJA", type="string", length=50, nullable=false)
     */
    private $funkcja;

    /**
     * @var string
     *
     * @ORM\Column(name="DOKUMENT", type="string", length=1, nullable=false)
     */
    private $dokument;

    /**
     * @var string
     *
     * @ORM\Column(name="CZY_DOMYSLNY", type="string", length=1, nullable=false)
     */
    private $czyDomyslny;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;


}

