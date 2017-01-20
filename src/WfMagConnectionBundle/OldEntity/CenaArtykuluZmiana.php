<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CenaArtykuluZmiana
 *
 * @ORM\Table(name="CENA_ARTYKULU_ZMIANA")
 * @ORM\Entity
 */
class CenaArtykuluZmiana
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENA_ARTYKULU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idCenaArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal = '';

    /**
     * @var string
     *
     * @ORM\Column(name="PRZELICZNIK_WAL", type="decimal", precision=14, scale=8, nullable=true)
     */
    private $przelicznikWal = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_NETTO", type="string", length=9, nullable=true)
     */
    private $cenaNetto;

    /**
     * @var string
     *
     * @ORM\Column(name="CENA_BRUTTO", type="string", length=9, nullable=true)
     */
    private $cenaBrutto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataZmiany", type="datetime", nullable=true)
     */
    private $datazmiany = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="StatusObiektu", type="integer", nullable=true)
     */
    private $statusobiektu;


}

