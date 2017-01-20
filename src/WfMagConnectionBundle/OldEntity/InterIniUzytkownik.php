<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InterIniUzytkownik
 *
 * @ORM\Table(name="INTER_INI_UZYTKOWNIK", indexes={@ORM\Index(name="INTER_INI_UZYT_KOL_IDKOL", columns={"ID_UZYTKOWNIKA", "KOLEJNOSC", "ID_KOLUMNY"})})
 * @ORM\Entity
 */
class InterIniUzytkownik
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID", type="string", length=9, nullable=false)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=true)
     */
    private $idUzytkownika;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_KOLUMNY", type="string", length=9, nullable=true)
     */
    private $idKolumny;

    /**
     * @var string
     *
     * @ORM\Column(name="ROZMIAR", type="string", length=9, nullable=true)
     */
    private $rozmiar;

    /**
     * @var string
     *
     * @ORM\Column(name="KOLEJNOSC", type="string", length=9, nullable=true)
     */
    private $kolejnosc;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMAT_KOLUMNY", type="string", length=200, nullable=true)
     */
    private $formatKolumny;


}

