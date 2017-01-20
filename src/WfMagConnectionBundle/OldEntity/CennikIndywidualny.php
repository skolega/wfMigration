<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CennikIndywidualny
 *
 * @ORM\Table(name="CENNIK_INDYWIDUALNY", uniqueConstraints={@ORM\UniqueConstraint(name="UIDX_ID_CENNIK_INDYWIDUALNY", columns={"ID_CENNIK_INDYWIDUALNY"})}, indexes={@ORM\Index(name="CENADLA_KONTRAHENTA_IDART_IDGRUPY", columns={"ID_ARTYKULU", "ID_GRUPY"})})
 * @ORM\Entity
 */
class CennikIndywidualny
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="string", length=9, nullable=false)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENY", type="string", length=9, nullable=true)
     */
    private $idCeny;

    /**
     * @var string
     *
     * @ORM\Column(name="INDEKS", type="string", length=20, nullable=true)
     */
    private $indeks;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_ARTYKULU", type="string", length=40, nullable=true)
     */
    private $nazwaArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="UWAGI", type="string", length=50, nullable=true)
     */
    private $uwagi;

    /**
     * @var integer
     *
     * @ORM\Column(name="TRYB", type="smallint", nullable=true)
     */
    private $tryb;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO", type="string", length=9, nullable=true)
     */
    private $cenaNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO", type="string", length=9, nullable=true)
     */
    private $cenaBrutto;

    /**
     * @var string
     *
     * @ORM\Column(name="UPUST", type="string", length=5, nullable=true)
     */
    private $upust;

    /**
     * @var integer
     *
     * @ORM\Column(name="SPRZEDAZ_ZAKUP", type="smallint", nullable=false)
     */
    private $sprzedazZakup = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENNIK_INDYWIDUALNY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idCennikIndywidualny;


}

