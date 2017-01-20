<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VatCechy
 *
 * @ORM\Table(name="VAT_CECHY")
 * @ORM\Entity
 */
class VatCechy
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_CECHY", type="string", length=9, nullable=false)
     */
    private $idCechy;

    /**
     * @var string
     *
     * @ORM\Column(name="SYMBOL", type="string", length=5, nullable=true)
     */
    private $symbol;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=50, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=true)
     */
    private $idFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_AKTYWNA", type="smallint", nullable=false)
     */
    private $czyAktywna;

    /**
     * @var integer
     *
     * @ORM\Column(name="NR_CECHY", type="smallint", nullable=true)
     */
    private $nrCechy;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP", type="string", length=1, nullable=true)
     */
    private $typ;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_AUT_NAG", type="string", length=9, nullable=true)
     */
    private $idAutNag = '0';


}

