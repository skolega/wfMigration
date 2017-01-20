<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpTransakcja
 *
 * @ORM\Table(name="IMP_TRANSAKCJA")
 * @ORM\Entity
 */
class ImpTransakcja
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_TRANSAKCJI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idTransakcji;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_MK_ZRDANYCH", type="integer", nullable=true)
     */
    private $idMkZrdanych;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FIRMY", type="integer", nullable=true)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=30, nullable=true)
     */
    private $nazwa;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_TRANSAKCJI", type="integer", nullable=true)
     */
    private $dataTransakcji;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZAS_TRANSAKCJI", type="integer", nullable=true)
     */
    private $czasTransakcji;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=500, nullable=true)
     */
    private $uwagi;

    /**
     * @var integer
     *
     * @ORM\Column(name="ZAIMPORTOWANY", type="smallint", nullable=true)
     */
    private $zaimportowany = '0';


}

