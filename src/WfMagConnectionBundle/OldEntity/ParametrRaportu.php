<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParametrRaportu
 *
 * @ORM\Table(name="PARAMETR_RAPORTU", uniqueConstraints={@ORM\UniqueConstraint(name="AK_PARAMRAP_IDRAP_NAZ_PARAMETR", columns={"ID_RAPORTU", "NAZWA"})}, indexes={@ORM\Index(name="PARRAP_IDRAP", columns={"ID_RAPORTU", "NAZWA"})})
 * @ORM\Entity
 */
class ParametrRaportu
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
     * @ORM\Column(name="ID_PARAMETRU", type="string", length=9, nullable=false)
     */
    private $idParametru;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;


}

