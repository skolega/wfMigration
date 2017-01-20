<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WfmIntSystem
 *
 * @ORM\Table(name="WFM_INT_SYSTEM", uniqueConstraints={@ORM\UniqueConstraint(name="AK_WFM_INT_SYSTEM_OPIS", columns={"Opis"})})
 * @ORM\Entity
 */
class WfmIntSystem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Systemu", type="bigint", nullable=false)
     */
    private $idSystemu;

    /**
     * @var string
     *
     * @ORM\Column(name="Opis", type="string", length=50, nullable=false)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="Aktywny", type="smallint", nullable=false)
     */
    private $aktywny = '1';


}

