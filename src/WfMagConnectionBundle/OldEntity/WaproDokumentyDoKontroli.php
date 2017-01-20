<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WaproDokumentyDoKontroli
 *
 * @ORM\Table(name="WAPRO_DOKUMENTY_DO_KONTROLI", uniqueConstraints={@ORM\UniqueConstraint(name="AK_AK_WAPRO_DOK_DO_KO_WAPRO_DO", columns={"ID_ZAPISU", "ID_ZAPISU_DZIENNIKA", "OPIS"})}, indexes={@ORM\Index(name="IDX_WAPRO_DOK_DO_KONTR_NRDOK", columns={"NR_IDENTYF"}), @ORM\Index(name="IDX_WAPRO_DOK_DO_KONTR_ID_DOK", columns={"ID_OBIEKTU"}), @ORM\Index(name="IDX_WAPRO_DOK_DO_KONTR_ID_ZAPISU_DZIENNIKA", columns={"ID_ZAPISU_DZIENNIKA"})})
 * @ORM\Entity
 */
class WaproDokumentyDoKontroli
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAPISU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idZapisu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAPISU_DZIENNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idZapisuDziennika;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=255, nullable=false)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_IDENTYF", type="string", length=50, nullable=true)
     */
    private $nrIdentyf;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_IDENTYF", type="string", length=50, nullable=true)
     */
    private $opisIdentyf;

    /**
     * @var string
     *
     * @ORM\Column(name="TABLICA", type="string", length=100, nullable=true)
     */
    private $tablica;

    /**
     * @var string
     *
     * @ORM\Column(name="FIRMA", type="string", length=50, nullable=true)
     */
    private $firma;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_DOK", type="integer", nullable=true)
     */
    private $dataDok;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OBIEKTU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idObiektu = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="STATUS", type="smallint", nullable=false)
     */
    private $status = '0';


}

