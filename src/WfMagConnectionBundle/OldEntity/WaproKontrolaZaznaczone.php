<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaproKontrolaZaznaczone
 *
 * @ORM\Table(name="WAPRO_KONTROLA_ZAZNACZONE", uniqueConstraints={@ORM\UniqueConstraint(name="IDX_WAPRO_KONTROLA_ZAZNACZONE_ZAZ", columns={"PRGKOD", "ID_UZYTKOWNIKA", "UZYCIE", "ID_ZAZ"})})
 * @ORM\Entity
 */
class WaproKontrolaZaznaczone
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAZ", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idZaz;

    /**
     * @var string
     *
     * @ORM\Column(name="UZYCIE", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $uzycie;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRGKOD", type="integer", nullable=false)
     */
    private $prgkod = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idUzytkownika;


}

