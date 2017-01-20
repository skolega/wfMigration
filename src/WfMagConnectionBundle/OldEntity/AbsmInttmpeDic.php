<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsmInttmpeDic
 *
 * @ORM\Table(name="ABSM_IntTmpE_Dic")
 * @ORM\Entity
 */
class AbsmInttmpeDic
{
    /**
     * @var integer
     *
     * @ORM\Column(name="IdRecord", type="bigint", nullable=false)
     */
    private $idrecord;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdRecordSource", type="bigint", nullable=true)
     */
    private $idrecordsource;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdRecordHeader", type="bigint", nullable=true)
     */
    private $idrecordheader;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdSession", type="bigint", nullable=true)
     */
    private $idsession;

    /**
     * @var string
     *
     * @ORM\Column(name="RecordTime", type="string", length=8, nullable=true)
     */
    private $recordtime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="RecordCreateDate", type="datetime", nullable=false)
     */
    private $recordcreatedate = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="RecordProcessDate", type="datetime", nullable=true)
     */
    private $recordprocessdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="RecordStatus", type="integer", nullable=true)
     */
    private $recordstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="Comm", type="string", length=3, nullable=true)
     */
    private $comm;

    /**
     * @var string
     *
     * @ORM\Column(name="IdComp", type="string", length=50, nullable=true)
     */
    private $idcomp;

    /**
     * @var string
     *
     * @ORM\Column(name="IdWar", type="string", length=50, nullable=true)
     */
    private $idwar;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateMod", type="datetime", nullable=false)
     */
    private $datemod;

    /**
     * @var integer
     *
     * @ORM\Column(name="DelInd", type="integer", nullable=false)
     */
    private $delind;

    /**
     * @var string
     *
     * @ORM\Column(name="DicKeyName", type="string", length=50, nullable=true)
     */
    private $dickeyname;

    /**
     * @var string
     *
     * @ORM\Column(name="DicId", type="string", length=50, nullable=true)
     */
    private $dicid;

    /**
     * @var string
     *
     * @ORM\Column(name="DicValue", type="string", length=200, nullable=true)
     */
    private $dicvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="DicDescription", type="string", length=1000, nullable=true)
     */
    private $dicdescription;

    /**
     * @var string
     *
     * @ORM\Column(name="AtrKeyName", type="string", length=50, nullable=true)
     */
    private $atrkeyname;

    /**
     * @var string
     *
     * @ORM\Column(name="AtrId", type="string", length=50, nullable=true)
     */
    private $atrid;

    /**
     * @var integer
     *
     * @ORM\Column(name="CatOrder", type="integer", nullable=true)
     */
    private $catorder;


}

