<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PozycjaOfertyPierwsza
 *
 * @ORM\Table(name="POZYCJA_OFERTY_PIERWSZA", uniqueConstraints={@ORM\UniqueConstraint(name="AK_POZYCJA_OFERTY_PIERWSZA_IDPIERWSZEJ", columns={"ID_PIERWSZEJ", "ID_OFERTY_PIERWSZEJ"})})
 * @ORM\Entity
 */
class PozycjaOfertyPierwsza
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAPISU_PIERWSZEJ", type="string", length=9, nullable=false)
     */
    private $idZapisuPierwszej;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PIERWSZEJ", type="string", length=9, nullable=false)
     */
    private $idPierwszej;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_OFERTY_PIERWSZEJ", type="string", length=9, nullable=false)
     */
    private $idOfertyPierwszej;


}

