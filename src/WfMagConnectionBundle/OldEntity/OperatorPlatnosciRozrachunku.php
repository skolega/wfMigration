<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OperatorPlatnosciRozrachunku
 *
 * @ORM\Table(name="OPERATOR_PLATNOSCI_ROZRACHUNKU")
 * @ORM\Entity
 */
class OperatorPlatnosciRozrachunku
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU", type="string", length=9, nullable=false)
     */
    private $idRozrachunku;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=false)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_OPERATORA", type="string", length=100, nullable=false)
     */
    private $nazwaOperatora;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FAKTURY", type="string", length=9, nullable=true)
     */
    private $idFaktury;


}

