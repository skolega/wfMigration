<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TabelaOdsetek
 *
 * @ORM\Table(name="TABELA_ODSETEK", uniqueConstraints={@ORM\UniqueConstraint(name="AK_TABELA_ODSETEK_SEM_TABELA_O", columns={"SEMAFOR", "ID_TABELI_ODSETEK"}), @ORM\UniqueConstraint(name="AK_TABELA_ODSETEK_NAZ_TABELA_O", columns={"NAZWA"})})
 * @ORM\Entity
 */
class TabelaOdsetek
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_TABELI_ODSETEK", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idTabeliOdsetek;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=20, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=100, nullable=true)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_USTAWOWE", type="smallint", nullable=true)
     */
    private $czyUstawowe;

    /**
     * @var string
     *
     * @ORM\Column(name="SEMAFOR", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $semafor;

    /**
     * @var integer
     *
     * @ORM\Column(name="FLAGA_STANU", type="smallint", nullable=true)
     */
    private $flagaStanu = '0';


}

