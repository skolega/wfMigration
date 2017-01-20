<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MkKraje
 *
 * @ORM\Table(name="MK_KRAJE")
 * @ORM\Entity
 */
class MkKraje
{
    /**
     * @var string
     *
     * @ORM\Column(name="SYM_KRAJU", type="string", length=3, nullable=false)
     */
    private $symKraju;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=true)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="KRAJEUE", type="smallint", nullable=true)
     */
    private $krajeue = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TRANSACKJI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idTransackji;

    /**
     * @var integer
     *
     * @ORM\Column(name="KRAJUE", type="smallint", nullable=true)
     */
    private $krajue = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TRANSAKCJI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idTransakcji;


}

