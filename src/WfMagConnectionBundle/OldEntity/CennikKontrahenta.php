<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CennikKontrahenta
 *
 * @ORM\Table(name="CENNIK_KONTRAHENTA", uniqueConstraints={@ORM\UniqueConstraint(name="UIDX_ID_CENNIK_KONTRAHENTA", columns={"ID_CENNIK_KONTRAHENTA"})}, indexes={@ORM\Index(name="INDEKSIND_IDART", columns={"ID_ARTYKULU"}), @ORM\Index(name="INDEKSIND_IDKONTR", columns={"ID_KONTRAHENTA"}), @ORM\Index(name="INDEKSIND_IDCENY", columns={"ID_CENY"})})
 * @ORM\Entity
 */
class CennikKontrahenta
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=false)
     */
    private $idKontrahenta;

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
     * @ORM\Column(name="ID_CENNIK_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idCennikKontrahenta;


}

