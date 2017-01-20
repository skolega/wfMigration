<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagsrcGniazdaZaznaczone
 *
 * @ORM\Table(name="MAGSRC_GNIAZDA_ZAZNACZONE")
 * @ORM\Entity
 */
class MagsrcGniazdaZaznaczone
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAZ", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idZaz;

    /**
     * @var integer
     *
     * @ORM\Column(name="UZYCIE", type="integer", nullable=false)
     */
    private $uzycie;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idUzytkownika;


}

