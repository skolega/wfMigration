<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MobTrasyUzytkownika
 *
 * @ORM\Table(name="MOB_TRASY_UZYTKOWNIKA")
 * @ORM\Entity
 */
class MobTrasyUzytkownika
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TRASY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idTrasy;


}

