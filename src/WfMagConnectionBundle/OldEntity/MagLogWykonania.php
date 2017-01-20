<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MagLogWykonania
 *
 * @ORM\Table(name="MAG_LOG_WYKONANIA")
 * @ORM\Entity
 */
class MagLogWykonania
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_ZAPISU", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idZapisu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_SESJI", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $idSesji;

    /**
     * @var string
     *
     * @ORM\Column(name="KONTEKST", type="string", length=50, nullable=false)
     */
    private $kontekst;

    /**
     * @var string
     *
     * @ORM\Column(name="ID1", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $id1;

    /**
     * @var string
     *
     * @ORM\Column(name="ID2", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $id2;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS1", type="string", length=255, nullable=true)
     */
    private $opis1;

    /**
     * @var string
     *
     * @ORM\Column(name="OPIS2", type="string", length=255, nullable=true)
     */
    private $opis2;


}

