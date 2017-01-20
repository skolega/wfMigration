<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmKalendarz
 *
 * @ORM\Table(name="CRM_KALENDARZ")
 * @ORM\Entity
 */
class CrmKalendarz
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_CRM_KALENDARZ", type="string", length=9, nullable=false)
     */
    private $idCrmKalendarz;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY", type="string", length=1, nullable=true)
     */
    private $domyslny = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="KOLOR_DOM", type="integer", nullable=true)
     */
    private $kolorDom = '16633516';


}

