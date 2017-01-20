<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KontrahentWiarygodnoscZamowienia
 *
 * @ORM\Table(name="KONTRAHENT_WIARYGODNOSC_ZAMOWIENIA", indexes={@ORM\Index(name="KONTRAHENT_WIARYGODNOSC_TEASER_ID_KONTRAHENTA_ZAMOWIENIE", columns={"ID_KONTRAHENTA", "NR_ZAMOWIENIA_WEW"})})
 * @ORM\Entity
 */
class KontrahentWiarygodnoscZamowienia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="TYP", type="integer", nullable=false)
     */
    private $typ;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_KONTRAHENTA", type="integer", nullable=false)
     */
    private $idKontrahenta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DATA", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="STATUS", type="string", length=30, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_ZAMOWIENIA_WEW", type="string", length=50, nullable=true)
     */
    private $nrZamowieniaWew;

    /**
     * @var string
     *
     * @ORM\Column(name="NR_ZAMOWIENIA_ZEW", type="string", length=50, nullable=true)
     */
    private $nrZamowieniaZew;

    /**
     * @var binary
     *
     * @ORM\Column(name="ZAMOWIENIE", type="binary", nullable=true)
     */
    private $zamowienie;

    /**
     * @var string
     *
     * @ORM\Column(name="TRYB_REALIZACJI", type="string", length=50, nullable=true)
     */
    private $trybRealizacji = 'Normalny';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $idUzytkownika;


}

