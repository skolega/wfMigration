<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RaportBlob
 *
 * @ORM\Table(name="RAPORT_BLOB")
 * @ORM\Entity
 */
class RaportBlob
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_RAPORTU", type="string", length=9, nullable=false)
     */
    private $idRaportu;

    /**
     * @var string
     *
     * @ORM\Column(name="RPT", type="blob", nullable=true)
     */
    private $rpt;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROZMIAR", type="integer", nullable=true)
     */
    private $rozmiar = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_ZM", type="integer", nullable=true)
     */
    private $dataZm;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZAS_ZM", type="integer", nullable=true)
     */
    private $czasZm;


}

