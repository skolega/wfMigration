<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SerwisZlecenieTyp
 *
 * @ORM\Table(name="SERWIS_ZLECENIE_TYP")
 * @ORM\Entity
 */
class SerwisZlecenieTyp
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_SERWIS_ZLECENIE_TYP", type="string", length=9, nullable=false)
     */
    private $idSerwisZlecenieTyp;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOMYSLNY", type="smallint", nullable=false)
     */
    private $domyslny = '0';


}

