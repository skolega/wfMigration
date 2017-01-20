<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SchematKsiegowania
 *
 * @ORM\Table(name="SCHEMAT_KSIEGOWANIA", indexes={@ORM\Index(name="SCHEMATKS_IDF_NAZWA", columns={"ID_FIRMY", "NAZWA", "ID_LATA_OBROT"})})
 * @ORM\Entity
 */
class SchematKsiegowania
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SCHEMATU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSchematu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_NETTO_WN_PLUS", type="string", length=70, nullable=true)
     */
    private $kontoNettoWnPlus;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_NETTO_WN_MINUS", type="string", length=70, nullable=true)
     */
    private $kontoNettoWnMinus;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_NETTO_MA_PLUS", type="string", length=70, nullable=true)
     */
    private $kontoNettoMaPlus;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTO_NETTO_MA_MINUS", type="string", length=70, nullable=true)
     */
    private $kontoNettoMaMinus;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_LATA_OBROT", type="string", length=9, nullable=true)
     */
    private $idLataObrot;

    /**
     * @var string
     *
     * @ORM\Column(name="SCHEMAT_OK", type="string", length=1, nullable=true)
     */
    private $schematOk;


}

