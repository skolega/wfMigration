<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpRozliczenie
 *
 * @ORM\Table(name="IMP_ROZLICZENIE")
 * @ORM\Entity
 */
class ImpRozliczenie
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_HANDLOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokumentuHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_FINANSOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokumentuFinansowego;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_ROZLICZENIA", type="decimal", precision=18, scale=0, nullable=true)
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
     * @ORM\Column(name="ID_DOKUMENTU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idDokumentu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU_HANDLOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRozrachunkuHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNKU_FINANSOWEGO", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRozrachunkuFinansowego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZLICZENIA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRozliczenia;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZLICZENIA_ZWIAZEK", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idRozliczeniaZwiazek;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_DOKUMENTU_HANDLOWEGO", type="string", length=30, nullable=true)
     */
    private $numerDokumentuHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMER_DOKUMENTU_FINANSOWEGO", type="string", length=30, nullable=true)
     */
    private $numerDokumentuFinansowego;


}

