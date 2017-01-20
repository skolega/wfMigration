<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypDokumentuHandlowego
 *
 * @ORM\Table(name="TYP_DOKUMENTU_HANDLOWEGO", uniqueConstraints={@ORM\UniqueConstraint(name="TYP_DOK_HANDL_IDFIR_SYGNATURA", columns={"ID_FIRMY", "SYGNATURA"})})
 * @ORM\Entity
 */
class TypDokumentuHandlowego
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
     * @ORM\Column(name="CZY_SYSTEMOWY", type="string", length=1, nullable=true)
     */
    private $czySystemowy;

    /**
     * @var string
     *
     * @ORM\Column(name="SUMOWANIE", type="string", length=10, nullable=true)
     */
    private $sumowanie;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DOKUMENTU", type="string", length=2, nullable=true)
     */
    private $typDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="KOLEJNOSC", type="string", length=9, nullable=false)
     */
    private $kolejnosc = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="AKTYWNY", type="string", length=1, nullable=true)
     */
    private $aktywny = '1';


}

