<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefinicjaProduktu
 *
 * @ORM\Table(name="DEFINICJA_PRODUKTU", uniqueConstraints={@ORM\UniqueConstraint(name="DEFPROD_IDART_KOL", columns={"ID_ARTYKULU", "ID_WARIANTU", "KOLEJNOSC"})}, indexes={@ORM\Index(name="DEFPROD_IDSKLAD", columns={"ID_SKLADNIKA", "ILOSC"}), @ORM\Index(name="DEFPROD_IDART", columns={"ID_ARTYKULU"})})
 * @ORM\Entity
 */
class DefinicjaProduktu
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DEFINICJI", type="string", length=9, nullable=false)
     */
    private $idDefinicji;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=true)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_WARIANTU", type="string", length=9, nullable=true)
     */
    private $idWariantu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SKLADNIKA", type="string", length=9, nullable=true)
     */
    private $idSkladnika;

    /**
     * @var string
     *
     * @ORM\Column(name="JEDNOSTKA", type="string", length=10, nullable=true)
     */
    private $jednostka;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=true)
     */
    private $ilosc;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK", type="string", length=9, nullable=true)
     */
    private $przelicznik;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=1000, nullable=true)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOLEJNOSC", type="integer", nullable=true)
     */
    private $kolejnosc = '0';


}

