<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypDokumentuFinansowego
 *
 * @ORM\Table(name="TYP_DOKUMENTU_FINANSOWEGO", uniqueConstraints={@ORM\UniqueConstraint(name="TYP_DOK_FIN_IDFIR_SYGNATURA", columns={"ID_FIRMY", "SYGNATURA"})})
 * @ORM\Entity
 */
class TypDokumentuFinansowego
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=false)
     */
    private $idTypu;

    /**
     * @var string
     *
     * @ORM\Column(name="SYGNATURA", type="string", length=5, nullable=false)
     */
    private $sygnatura;

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
     * @ORM\Column(name="RODZAJ_OPERACJI", type="string", length=1, nullable=true)
     */
    private $rodzajOperacji;

    /**
     * @var string
     *
     * @ORM\Column(name="KIERUNEK", type="string", length=1, nullable=true)
     */
    private $kierunek;

    /**
     * @var string
     *
     * @ORM\Column(name="CZY_SYSTEMOWY", type="string", length=1, nullable=true)
     */
    private $czySystemowy;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_OPERACJI_DOM", type="string", length=5, nullable=true)
     */
    private $kodOperacjiDom = '';


}

