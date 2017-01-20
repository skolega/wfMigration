<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wariant
 *
 * @ORM\Table(name="WARIANT", uniqueConstraints={@ORM\UniqueConstraint(name="AK_WARIANT_IDRAP_NAZW_WARIANT", columns={"ID_RAPORTU", "NAZWA"})})
 * @ORM\Entity
 */
class Wariant
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_RAPORTU", type="string", length=9, nullable=false)
     */
    private $idRaportu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_WARIANTU", type="string", length=9, nullable=false)
     */
    private $idWariantu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;


}

