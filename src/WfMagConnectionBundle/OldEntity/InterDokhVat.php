<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterDokhVat
 *
 * @ORM\Table(name="INTER_DOKH_VAT")
 * @ORM\Entity
 */
class InterDokhVat
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DOKUMENTU_HANDLOWEGO", type="string", length=9, nullable=false)
     */
    private $idDokumentuHandlowego;

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_VAT", type="string", length=3, nullable=false)
     */
    private $kodVat;

    /**
     * @var string
     *
     * @ORM\Column(name="NETTO", type="string", length=9, nullable=true)
     */
    private $netto;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT", type="string", length=9, nullable=true)
     */
    private $vat;

    /**
     * @var string
     *
     * @ORM\Column(name="NETTO_WAL", type="string", length=9, nullable=true)
     */
    private $nettoWal;

    /**
     * @var string
     *
     * @ORM\Column(name="VAT_WAL", type="string", length=9, nullable=true)
     */
    private $vatWal;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_MODYFIKOWANO", type="smallint", nullable=true)
     */
    private $czyModyfikowano;


}

