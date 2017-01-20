<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagsrcZmienneAplikacji
 *
 * @ORM\Table(name="MAGSRC_ZMIENNE_APLIKACJI", uniqueConstraints={@ORM\UniqueConstraint(name="IDX_MAGSRC_ZMA_ID_GNIAZDA_NAZWA", columns={"ID_GNIAZDA", "NAZWA"})})
 * @ORM\Entity
 */
class MagsrcZmienneAplikacji
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZMIENNEJ", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idZmiennej;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_GNIAZDA", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idGniazda;

    /**
     * @var string
     *
     * @ORM\Column(name="TYPSQL", type="string", length=50, nullable=false)
     */
    private $typsql;

    /**
     * @var integer
     *
     * @ORM\Column(name="WYJSCIOWY", type="smallint", nullable=false)
     */
    private $wyjsciowy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY_WARUNEK", type="string", length=30, nullable=false)
     */
    private $domyslnyWarunek = '';


}

