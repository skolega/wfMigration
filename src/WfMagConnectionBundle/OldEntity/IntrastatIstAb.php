<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IntrastatIstAb
 *
 * @ORM\Table(name="INTRASTAT_IST_AB")
 * @ORM\Entity
 */
class IntrastatIstAb
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_INTRASTATU", type="string", length=9, nullable=false)
     */
    private $idIntrastatu;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP", type="string", length=10, nullable=false)
     */
    private $typ = '';

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_PRZYJECIA_LUB_ODMOWY", type="string", length=4, nullable=false)
     */
    private $dataPrzyjeciaLubOdmowy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="NrDeklaracji", type="string", length=35, nullable=false)
     */
    private $nrdeklaracji = '';

    /**
     * @var string
     *
     * @ORM\Column(name="NrWlasny", type="string", length=14, nullable=false)
     */
    private $nrwlasny = '';

    /**
     * @var string
     *
     * @ORM\Column(name="IdentyfikatorSystemowy", type="string", length=30, nullable=false)
     */
    private $identyfikatorsystemowy = '';

    /**
     * @var string
     *
     * @ORM\Column(name="KodBledu", type="string", length=3, nullable=false)
     */
    private $kodbledu = '';

    /**
     * @var string
     *
     * @ORM\Column(name="OpisBledu", type="string", length=512, nullable=false)
     */
    private $opisbledu = '';

    /**
     * @var string
     *
     * @ORM\Column(name="Pozycja", type="string", length=4, nullable=false)
     */
    private $pozycja = '';


}

