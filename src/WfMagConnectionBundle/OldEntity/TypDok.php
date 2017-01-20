<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypDok
 *
 * @ORM\Table(name="TYP_DOK")
 * @ORM\Entity
 */
class TypDok
{
    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY_OPIS", type="string", length=50, nullable=true)
     */
    private $domyslnyOpis;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_TYP_DOK", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $idTypDok;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_TYP_DOK_UZ", type="string", length=6, nullable=false)
     */
    private $symTypDokUz;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_TYP_DOK", type="string", length=6, nullable=true)
     */
    private $symTypDok;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZ_TYP_DOK_UZ", type="string", length=50, nullable=true)
     */
    private $nazTypDokUz;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_AKTYWNY", type="smallint", nullable=true)
     */
    private $czyAktywny;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYT", type="string", length=8, nullable=true)
     */
    private $idUzyt;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=10, nullable=true)
     */
    private $idFirmy;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_KOREKTA", type="smallint", nullable=false)
     */
    private $czyKorekta;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_ZLOZONY", type="smallint", nullable=false)
     */
    private $czyZlozony;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY_SLOWNIK", type="string", length=10, nullable=true)
     */
    private $domyslnySlownik;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_RODZAJE_ROZRACH", type="string", length=1, nullable=true)
     */
    private $idRodzajeRozrach;

    /**
     * @var integer
     *
     * @ORM\Column(name="DOMYSLNE_UKRYWANIE_ROZRACH", type="smallint", nullable=true)
     */
    private $domyslneUkrywanieRozrach;


}

