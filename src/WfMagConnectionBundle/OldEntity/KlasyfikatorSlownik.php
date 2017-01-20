<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KlasyfikatorSlownik
 *
 * @ORM\Table(name="KLASYFIKATOR_SLOWNIK")
 * @ORM\Entity
 */
class KlasyfikatorSlownik
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SLOWNIKA", type="string", length=9, nullable=false)
     */
    private $idSlownika;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_DANYCH", type="string", length=20, nullable=true)
     */
    private $typDanych;

    /**
     * @var string
     *
     * @ORM\Column(name="MASKA_POLA", type="string", length=20, nullable=true)
     */
    private $maskaPola;


}

