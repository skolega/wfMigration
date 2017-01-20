<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagsrcGniazdaZadania
 *
 * @ORM\Table(name="MAGSRC_GNIAZDA_ZADANIA", uniqueConstraints={@ORM\UniqueConstraint(name="IDX_MAGSRC_GNIAZDA_ZADANIA_ID_GNIAZDA", columns={"ID_GNIAZDA"})})
 * @ORM\Entity
 */
class MagsrcGniazdaZadania
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZADANIA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idZadania;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GNIAZDA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idGniazda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="OSTATNIE_URUCHOMIENIE", type="datetime", nullable=true)
     */
    private $ostatnieUruchomienie;


}

