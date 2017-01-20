<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CrmEtap
 *
 * @ORM\Table(name="CRM_ETAP", indexes={@ORM\Index(name="IDX_3A89A28219437C1C", columns={"ID_ZADANIA"})})
 * @ORM\Entity
 */
class CrmEtap
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ETAPU", type="string", length=9, nullable=false)
     */
    private $idEtapu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYPU", type="string", length=9, nullable=true)
     */
    private $idTypu;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_ETAPU", type="string", length=1, nullable=true)
     */
    private $nrEtapu;

    /**
     * @var string
     *
     * @ORM\Column(name="TEMAT", type="string", length=50, nullable=false)
     */
    private $temat;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=1000, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_OD", type="string", length=4, nullable=true)
     */
    private $dataOd;

    /**
     * @var integer
     *
     * @ORM\Column(name="GODZINA_OD", type="integer", nullable=true)
     */
    private $godzinaOd;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_DO", type="string", length=4, nullable=true)
     */
    private $dataDo;

    /**
     * @var integer
     *
     * @ORM\Column(name="GODZINA_DO", type="integer", nullable=true)
     */
    private $godzinaDo;

    /**
     * @var string
     *
     * @ORM\Column(name="REALIZACJA", type="decimal", precision=8, scale=2, nullable=true)
     */
    private $realizacja = '0';

    /**
     * @var \WfMagConnectionBundle\Entity\CrmZadanie
     *
     * @ORM\ManyToOne(targetEntity="WfMagConnectionBundle\Entity\CrmZadanie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_ZADANIA", referencedColumnName="ID_ZADANIA")
     * })
     */
    private $idZadania;


}

