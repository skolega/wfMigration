<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VatStawki
 *
 * @ORM\Table(name="VAT_STAWKI")
 * @ORM\Entity
 */
class VatStawki
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_STAWKI", type="string", length=10, nullable=false)
     */
    private $idStawki;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=5, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="WARTOSC", type="decimal", precision=4, scale=2, nullable=true)
     */
    private $wartosc;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=50, nullable=true)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_AKTYWNA", type="smallint", nullable=false)
     */
    private $czyAktywna;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_OD", type="integer", nullable=true)
     */
    private $dataOd;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_DO", type="integer", nullable=true)
     */
    private $dataDo;


}

