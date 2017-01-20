<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaproWariantKontroli
 *
 * @ORM\Table(name="WAPRO_WARIANT_KONTROLI", uniqueConstraints={@ORM\UniqueConstraint(name="AK_WARIANT_KONTROLI_NAZWA_WARIANTU", columns={"NAZWA", "ID_UZYTKOWNIKA", "PRGKOD"})}, indexes={@ORM\Index(name="IDX_WAPRO_WARIANT_KONTROLI_NAZWA", columns={"NAZWA", "PRGKOD", "ID_UZYTKOWNIKA"}), @ORM\Index(name="IDX_WAPRO_WARIANT_KONTROLI_PRGKOD", columns={"PRGKOD", "ID_UZYTKOWNIKA", "NAZWA"})})
 * @ORM\Entity
 */
class WaproWariantKontroli
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_WARIANTU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idWariantu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=1000, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRGKOD", type="integer", nullable=false)
     */
    private $prgkod = '0';


}

