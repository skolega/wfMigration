<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaproDziennikKontroli
 *
 * @ORM\Table(name="WAPRO_DZIENNIK_KONTROLI", uniqueConstraints={@ORM\UniqueConstraint(name="AK_MAG_DZIENNIK_WAPRO_DZ", columns={"DATAICZAS"})})
 * @ORM\Entity
 */
class WaproDziennikKontroli
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DZIENNIKA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idDziennika;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATAICZAS", type="datetime", nullable=false)
     */
    private $dataiczas = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRGKOD", type="integer", nullable=false)
     */
    private $prgkod = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ", type="string", length=1, nullable=false)
     */
    private $rodzaj = 'K';


}

