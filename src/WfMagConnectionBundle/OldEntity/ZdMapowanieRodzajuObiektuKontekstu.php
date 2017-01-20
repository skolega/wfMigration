<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ZdMapowanieRodzajuObiektuKontekstu
 *
 * @ORM\Table(name="ZD_MAPOWANIE_RODZAJU_OBIEKTU_KONTEKSTU", uniqueConstraints={@ORM\UniqueConstraint(name="UQ_ZD_MAPOWANIE_RODZAJU_OBIEKTU_KONTEKSTU", columns={"NAZWA_TABELI"})})
 * @ORM\Entity
 */
class ZdMapowanieRodzajuObiektuKontekstu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_MAPOWANIA_RODZAJU_OBIEKTU_KONTEKSTU", type="integer", nullable=false)
     */
    private $idMapowaniaRodzajuObiektuKontekstu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_TABELI", type="string", length=256, nullable=false)
     */
    private $nazwaTabeli;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_RODZAJU", type="string", length=256, nullable=false)
     */
    private $nazwaRodzaju;


}

