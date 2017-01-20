<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozOstCenaKontrTmp
 *
 * @ORM\Table(name="POZ_OST_CENA_KONTR_TMP", indexes={@ORM\Index(name="PO_ARTYKULE", columns={"ID_ARTYKULU"})})
 * @ORM\Entity
 */
class PozOstCenaKontrTmp
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ_DOK_MAG", type="string", length=9, nullable=false)
     */
    private $idPozDokMag;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $cenaNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO", type="decimal", precision=16, scale=2, nullable=true)
     */
    private $cenaBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO_WAL", type="decimal", precision=16, scale=4, nullable=true)
     */
    private $cenaNettoWal;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO_WAL", type="decimal", precision=16, scale=4, nullable=true)
     */
    private $cenaBruttoWal;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal;


}

