<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApZamOkresTemp
 *
 * @ORM\Table(name="AP_ZAM_OKRES_TEMP")
 * @ORM\Entity
 */
class ApZamOkresTemp
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idPoz;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OST_KOREKTY", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idOstKorekty;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_MAG", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokMag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOK_HAN", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokHan;

    /**
     * @var string
     *
     * @ORM\Column(name="RODZAJ", type="string", length=1, nullable=true)
     */
    private $rodzaj;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="decimal", precision=16, scale=4, nullable=true)
     */
    private $ilosc;


}

