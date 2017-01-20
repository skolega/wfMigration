<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Zamiennik
 *
 * @ORM\Table(name="ZAMIENNIK", uniqueConstraints={@ORM\UniqueConstraint(name="UIDX_ID_ZAMIENNIKA_ARTYKULU", columns={"ID_ZAMIENNIKA_ARTYKULU"})})
 * @ORM\Entity
 */
class Zamiennik
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
     * @ORM\Column(name="ID_ZAMIENNIKA", type="string", length=9, nullable=false)
     */
    private $idZamiennika;

    /**
     * @var integer
     *
     * @ORM\Column(name="KOLEJNOSC", type="integer", nullable=false)
     */
    private $kolejnosc;

    /**
     * @var string
     *
     * @ORM\Column(name="ILOSC", type="string", length=9, nullable=true)
     */
    private $ilosc = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAMIENNIKA_ARTYKULU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idZamiennikaArtykulu;


}

