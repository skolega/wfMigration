<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KlasyfikatorSlownikWar
 *
 * @ORM\Table(name="KLASYFIKATOR_SLOWNIK_WAR")
 * @ORM\Entity
 */
class KlasyfikatorSlownikWar
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
     * @ORM\Column(name="WARTOSC", type="string", length=100, nullable=false)
     */
    private $wartosc;


}

