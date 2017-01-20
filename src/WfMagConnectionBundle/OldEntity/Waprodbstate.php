<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Waprodbstate
 *
 * @ORM\Table(name="WAPRODBSTATE", uniqueConstraints={@ORM\UniqueConstraint(name="AK_WAPRODBSTATE_PRGKOD", columns={"PRGKOD"}), @ORM\UniqueConstraint(name="AK_WAPRODBSTATE_PRGNAZWA", columns={"PRGNAZWA"})})
 * @ORM\Entity
 */
class Waprodbstate
{
    /**
     * @var string
     *
     * @ORM\Column(name="IDTAB", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idtab;

    /**
     * @var integer
     *
     * @ORM\Column(name="PRGKOD", type="smallint", nullable=false)
     */
    private $prgkod;

    /**
     * @var string
     *
     * @ORM\Column(name="PRGNAZWA", type="string", length=257, nullable=false)
     */
    private $prgnazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="PRGWER", type="string", length=20, nullable=false)
     */
    private $prgwer = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DBWER", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $dbwer = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="START", type="smallint", nullable=false)
     */
    private $start = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ConfigInfo", type="string", length=50, nullable=true)
     */
    private $configinfo;

    /**
     * @var integer
     *
     * @ORM\Column(name="WORKSTATIONS", type="smallint", nullable=false)
     */
    private $workstations = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ZASOB", type="integer", nullable=true)
     */
    private $zasob;


}

