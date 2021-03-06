<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsmInttmpeAtr
 *
 * @ORM\Table(name="ABSM_IntTmpE_Atr")
 * @ORM\Entity
 */
class AbsmInttmpeAtr
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
     * @ORM\Column(name="IdAtr", type="string", length=50, nullable=false)
     */
    private $idatr;

    /**
     * @var integer
     *
     * @ORM\Column(name="IdAtrType", type="integer", nullable=false)
     */
    private $idatrtype;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="ValueMin", type="string", length=200, nullable=true)
     */
    private $valuemin;

    /**
     * @var string
     *
     * @ORM\Column(name="ValueMax", type="string", length=200, nullable=true)
     */
    private $valuemax;

    /**
     * @var string
     *
     * @ORM\Column(name="ValueDefault", type="string", length=200, nullable=true)
     */
    private $valuedefault;

    /**
     * @var integer
     *
     * @ORM\Column(name="Required", type="integer", nullable=false)
     */
    private $required;

    /**
     * @var integer
     *
     * @ORM\Column(name="Sequence", type="integer", nullable=true)
     */
    private $sequence;

    /**
     * @var string
     *
     * @ORM\Column(name="AtrGroup", type="string", length=200, nullable=true)
     */
    private $atrgroup;


}

