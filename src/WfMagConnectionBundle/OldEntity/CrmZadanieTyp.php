<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmZadanieTyp
 *
 * @ORM\Table(name="CRM_ZADANIE_TYP")
 * @ORM\Entity
 */
class CrmZadanieTyp
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=false)
     */
    private $idTypu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="ETAPOWE", type="string", length=1, nullable=true)
     */
    private $etapowe = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SYSTEMOWE", type="string", length=1, nullable=true)
     */
    private $systemowe = '0';

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

