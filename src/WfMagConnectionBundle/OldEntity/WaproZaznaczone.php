<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaproZaznaczone
 *
 * @ORM\Table(name="WAPRO_ZAZNACZONE")
 * @ORM\Entity
 */
class WaproZaznaczone
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
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idFirmy = '0';

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

