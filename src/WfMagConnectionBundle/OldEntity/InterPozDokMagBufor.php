<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterPozDokMagBufor
 *
 * @ORM\Table(name="INTER_POZ_DOK_MAG_BUFOR")
 * @ORM\Entity
 */
class InterPozDokMagBufor
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK_MAG", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idPozDokMag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZYCJI", type="string", length=9, nullable=false)
     */
    private $idPozycji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK", type="string", length=9, nullable=false)
     */
    private $idDok;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOKUMENT", type="integer", nullable=false)
     */
    private $dokument;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=true)
     */
    private $ilosc;


}

