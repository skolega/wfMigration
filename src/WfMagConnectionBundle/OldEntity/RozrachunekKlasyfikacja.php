<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RozrachunekKlasyfikacja
 *
 * @ORM\Table(name="ROZRACHUNEK_KLASYFIKACJA", indexes={@ORM\Index(name="KR_IDKONTRAHENTA", columns={"ID_KONTRAHENTA"})})
 * @ORM\Entity
 */
class RozrachunekKlasyfikacja
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ROZRACHUNEK_KLASYFIKACJA", type="string", length=9, nullable=false)
     */
    private $idRozrachunekKlasyfikacja;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="string", length=9, nullable=true)
     */
    private $idKontrahenta;

    /**
     * @var string
     *
     * @ORM\Column(name="TYP_KARTOTEKI", type="string", length=1, nullable=true)
     */
    private $typKartoteki;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=20, nullable=true)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS", type="string", length=100, nullable=true)
     */
    private $opis;

    /**
     * @var integer
     *
     * @ORM\Column(name="CZY_AKTYWNY", type="smallint", nullable=true)
     */
    private $czyAktywny;


}

