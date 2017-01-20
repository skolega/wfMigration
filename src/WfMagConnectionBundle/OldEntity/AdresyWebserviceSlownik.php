<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdresyWebserviceSlownik
 *
 * @ORM\Table(name="ADRESY_WEBSERVICE_SLOWNIK", uniqueConstraints={@ORM\UniqueConstraint(name="UQ__ADRESY_W__2A9BCF0C2BE78473", columns={"KOD_ADRESU"})})
 * @ORM\Entity
 */
class AdresyWebserviceSlownik
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_ADRESU", type="string", length=40, nullable=true)
     */
    private $kodAdresu;

    /**
     * @var string
     *
     * @ORM\Column(name="URL", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="PROTOKOL", type="string", length=10, nullable=true)
     */
    private $protokol;


}

