<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagA4bProceslock
 *
 * @ORM\Table(name="MAG_A4B_PROCESLOCK")
 * @ORM\Entity
 */
class MagA4bProceslock
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdLock", type="bigint", nullable=false)
     */
    private $idlock;

    /**
     * @var string
     *
     * @ORM\Column(name="Resource", type="string", length=100, nullable=false)
     */
    private $resource;

    /**
     * @var integer
     *
     * @ORM\Column(name="Spid", type="bigint", nullable=false)
     */
    private $spid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LockCreateDate", type="datetime", nullable=false)
     */
    private $lockcreatedate = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="LockReleaseDate", type="datetime", nullable=true)
     */
    private $lockreleasedate;

    /**
     * @var integer
     *
     * @ORM\Column(name="LockTimeMilisec", type="integer", nullable=true)
     */
    private $locktimemilisec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="StatStartTime", type="datetime", nullable=false)
     */
    private $statstarttime = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="StatLocks", type="integer", nullable=false)
     */
    private $statlocks = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="Direciton", type="string", length=1, nullable=true)
     */
    private $direciton;

    /**
     * @var integer
     *
     * @ORM\Column(name="Active", type="smallint", nullable=false)
     */
    private $active = '1';


}

