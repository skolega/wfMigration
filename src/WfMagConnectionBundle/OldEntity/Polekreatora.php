<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Polekreatora
 *
 * @ORM\Table(name="POLEKREATORA", uniqueConstraints={@ORM\UniqueConstraint(name="AK_POLEKREATORA_TAB_K_POLEKREA", columns={"TABELA", "KOD"})})
 * @ORM\Entity
 */
class Polekreatora
{
    /**
     * @var string
     *
     * @ORM\Column(name="TABELA", type="string", length=50, nullable=false)
     */
    private $tabela;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POLA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPola;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD", type="string", length=50, nullable=false)
     */
    private $kod;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_VIEW", type="string", length=500, nullable=false)
     */
    private $nazwaView;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DANYCH", type="string", length=20, nullable=false)
     */
    private $typDanych;

    /**
     * @var integer
     *
     * @ORM\Column(name="SZEROKOSCKOLUMNY", type="integer", nullable=false)
     */
    private $szerokosckolumny;

    /**
     * @var string
     *
     * @ORM\Column(name="MASKA", type="string", length=20, nullable=false)
     */
    private $maska;

    /**
     * @var string
     *
     * @ORM\Column(name="PODLEGA_WARUNKOM", type="string", length=1, nullable=false)
     */
    private $podlegaWarunkom = '1';


}

