<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OfertaZamowienie
 *
 * @ORM\Table(name="OFERTA_ZAMOWIENIE", uniqueConstraints={@ORM\UniqueConstraint(name="AK_OFERTA_ZAMOWIENIE", columns={"ID_ZAMOWIENIA", "ID_OFERTY"})})
 * @ORM\Entity
 */
class OfertaZamowienie
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_OFERTY", type="string", length=9, nullable=false)
     */
    private $idOferty;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAMOWIENIA", type="string", length=9, nullable=false)
     */
    private $idZamowienia;


}

