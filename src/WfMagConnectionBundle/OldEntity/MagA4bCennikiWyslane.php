<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagA4bCennikiWyslane
 *
 * @ORM\Table(name="MAG_A4B_CENNIKI_WYSLANE", uniqueConstraints={@ORM\UniqueConstraint(name="UIDX_MAG_A4B_CENNIKI_WYSLANE", columns={"ID_A4B", "ID_KONTRAHENTA", "ID_ARTYKULU"}), @ORM\UniqueConstraint(name="UIDX2_MAG_A4B_CENNIKI_WYSLANE", columns={"ID_A4B", "ID_OBIEKTU", "OPIS_OBIEKTU", "ID_KONTRAHENTA", "ID_ARTYKULU"})}, indexes={@ORM\Index(name="IDX3_MAG_A4B_CENNIKI_WYSLANE", columns={"ID_ARTYKULU", "ID_A4B"}), @ORM\Index(name="IDX4_MAG_A4B_CENNIKI_WYSLANE", columns={"ID_ARTYKULU", "ID_A4B", "ID_KONTRAHENTA", "ID_KATEGORII"})})
 * @ORM\Entity
 */
class MagA4bCennikiWyslane
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENNIKA_WYSLANEGO", type="string", length=50, nullable=false)
     */
    private $idCennikaWyslanego;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_JEDNOSTKI", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idJednostki;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_A4B", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idA4b;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_MAGAZYNU", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idMagazynu;

    /**
     * @var string
     *
     * @ORM\Column(name="cena_netto_po_rabacie", type="decimal", precision=16, scale=4, nullable=true)
     */
    private $cenaNettoPoRabacie;

    /**
     * @var string
     *
     * @ORM\Column(name="cena_brutto_po_rabacie", type="decimal", precision=16, scale=4, nullable=true)
     */
    private $cenaBruttoPoRabacie;

    /**
     * @var string
     *
     * @ORM\Column(name="symbol_wal", type="string", length=3, nullable=true)
     */
    private $symbolWal;

    /**
     * @var string
     *
     * @ORM\Column(name="przelicznik_wal", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $przelicznikWal;

    /**
     * @var string
     *
     * @ORM\Column(name="opis_pochodzenie", type="string", length=255, nullable=true)
     */
    private $opisPochodzenie;

    /**
     * @var string
     *
     * @ORM\Column(name="znacznik", type="string", length=1, nullable=true)
     */
    private $znacznik;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OBIEKTU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idObiektu;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS_OBIEKTU", type="string", length=50, nullable=false)
     */
    private $opisObiektu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GRUPY", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KATEGORII", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idKategorii;


}

