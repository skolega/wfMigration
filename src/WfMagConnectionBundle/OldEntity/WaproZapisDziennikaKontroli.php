<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaproZapisDziennikaKontroli
 *
 * @ORM\Table(name="WAPRO_ZAPIS_DZIENNIKA_KONTROLI", indexes={@ORM\Index(name="IDX_WAPRO_ZAPIS_ID_DZIENNIKA", columns={"ID_DZIENNIKA"}), @ORM\Index(name="IDX_WAPRO_ZAPIS_ID_FUNKCJI", columns={"ID_FUNKCJI_KONTROLI"})})
 * @ORM\Entity
 */
class WaproZapisDziennikaKontroli
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAPISU_DZIENNIKA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idZapisuDziennika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FUNKCJI_KONTROLI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idFunkcjiKontroli;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DZIENNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDziennika;

    /**
     * @var integer
     *
     * @ORM\Column(name="STATUS", type="smallint", nullable=false)
     */
    private $status = '0';


}

