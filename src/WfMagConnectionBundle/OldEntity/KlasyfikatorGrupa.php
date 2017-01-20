<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * KlasyfikatorGrupa
 *
 * @ORM\Table(name="KLASYFIKATOR_GRUPA")
 * @ORM\Entity
 */
class KlasyfikatorGrupa
{
    /**
     * @var string
     *
     * @ORM\Column(name="KOD_KLAS_GRUPY", type="string", length=30, nullable=false)
     */
    private $kodKlasGrupy;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA", type="string", length=50, nullable=false)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="NAZWA_IDENTYFIKATORA", type="string", length=50, nullable=false)
     */
    private $nazwaIdentyfikatora = '';

    /**
     * @var string
     *
     * @ORM\Column(name="TABELA", type="string", length=1, nullable=true)
     */
    private $tabela = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="KOD_DO_GNIAZDA", type="string", length=3, nullable=false)
     */
    private $kodDoGniazda = '';


}

