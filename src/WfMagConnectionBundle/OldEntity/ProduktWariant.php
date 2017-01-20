<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProduktWariant
 *
 * @ORM\Table(name="PRODUKT_WARIANT", uniqueConstraints={@ORM\UniqueConstraint(name="PO_ARTYKULE", columns={"ID_ARTYKULU", "NAZWA"})})
 * @ORM\Entity
 */
class ProduktWariant
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_WARIANTU", type="string", length=9, nullable=false)
     */
    private $idWariantu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=500, nullable=true)
     */
    private $opis;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY", type="string", length=1, nullable=true)
     */
    private $domyslny;

    /**
     * @var string
     *
     * @ORM\Column(name="ZABLOKOWANY", type="string", length=1, nullable=true)
     */
    private $zablokowany;

    /**
     * @var string
     *
     * @ORM\Column(name="JEDNOSTKA_PROD", type="string", length=10, nullable=true)
     */
    private $jednostkaProd;

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_PROD", type="string", length=9, nullable=true)
     */
    private $przelicznikProd;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC_PROD", type="string", length=9, nullable=true)
     */
    private $iloscProd;


}

