<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormulaRaportu
 *
 * @ORM\Table(name="FORMULA_RAPORTU", uniqueConstraints={@ORM\UniqueConstraint(name="AK_FORMRAP_IDRAP_NAZW_FORMULA_", columns={"ID_RAPORTU", "NAZWA"})})
 * @ORM\Entity
 */
class FormulaRaportu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FORMULY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFormuly;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RAPORTU", type="string", length=9, nullable=true)
     */
    private $idRaportu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=100, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DANYCH", type="string", length=10, nullable=false)
     */
    private $typDanych;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_SQL", type="string", length=3000, nullable=true)
     */
    private $kodSql;


}

