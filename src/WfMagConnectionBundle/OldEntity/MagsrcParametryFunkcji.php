<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagsrcParametryFunkcji
 *
 * @ORM\Table(name="MAGSRC_PARAMETRY_FUNKCJI")
 * @ORM\Entity
 */
class MagsrcParametryFunkcji
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_parametru", type="integer", nullable=false)
     */
    private $idParametru;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

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
     * @var integer
     *
     * @ORM\Column(name="PROCSQL", type="smallint", nullable=false)
     */
    private $procsql = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="INTERFEJSOWY", type="smallint", nullable=false)
     */
    private $interfejsowy = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="DOMYSLNY_WARUNEK", type="string", length=30, nullable=false)
     */
    private $domyslnyWarunek = '';


}

