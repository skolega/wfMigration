<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VatGrupy
 *
 * @ORM\Table(name="VAT_GRUPY")
 * @ORM\Entity
 */
class VatGrupy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="string", length=10, nullable=false)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_POZYCJI", type="string", length=10, nullable=true)
     */
    private $nrPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="SKROT", type="string", length=40, nullable=true)
     */
    private $skrot;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=150, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_VAT_GRUPY_NAG", type="string", length=10, nullable=true)
     */
    private $idVatGrupyNag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_STAWKI", type="string", length=10, nullable=true)
     */
    private $idStawki;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP", type="string", length=1, nullable=true)
     */
    private $typ;


}

