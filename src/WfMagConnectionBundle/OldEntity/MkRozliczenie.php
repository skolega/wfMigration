<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MkRozliczenie
 *
 * @ORM\Table(name="MK_ROZLICZENIE", indexes={@ORM\Index(name="ROZL_ID_TRANS", columns={"ID_TRANSAKCJI", "ID_ROZLICZENIA"})})
 * @ORM\Entity
 */
class MkRozliczenie
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZLICZENIA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idRozliczenia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_FINANSOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokumentuFinansowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_HANDLOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokumentuHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TRANSAKCJI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idTransakcji;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_DOKUMENTU_FINANSOWEGO", type="string", length=30, nullable=true)
     */
    private $numerDokumentuFinansowego;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_DOKUMENTU_HANDLOWEGO", type="string", length=30, nullable=true)
     */
    private $numerDokumentuHandlowego;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_ROZLICZENIA", type="integer", nullable=true)
     */
    private $dataRozliczenia;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $kwota;

    /**
     * @var string
     *
     * @ORM\Column(name="KWOTA_W", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $kwotaW;

    /**
     * @var string
     *
     * @ORM\Column(name="MK_ID_NAG_DOK", type="string", length=9, nullable=true)
     */
    private $mkIdNagDok;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU_FINANSOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRozrachunkuFinansowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU_HANDLOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRozrachunkuHandlowego;


}

