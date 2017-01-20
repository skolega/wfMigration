<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrzecenaPoz
 *
 * @ORM\Table(name="PRZECENA_POZ")
 * @ORM\Entity
 */
class PrzecenaPoz
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_POZ", type="string", length=9, nullable=false)
     */
    private $idPoz;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_PRZECENY", type="string", length=9, nullable=false)
     */
    private $idPrzeceny;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ARTYKULU", type="string", length=9, nullable=false)
     */
    private $idArtykulu;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_CENY", type="string", length=9, nullable=false)
     */
    private $idCeny;

    /**
     * @var string
     *
     * @ORM\Column(name="SYM_WAL", type="string", length=3, nullable=true)
     */
    private $symWal;

    /**
     * @var string
     *
     * @ORM\Column(name="S_CN", type="string", length=9, nullable=true)
     */
    private $sCn;

    /**
     * @var string
     *
     * @ORM\Column(name="S_CB", type="string", length=9, nullable=true)
     */
    private $sCb;

    /**
     * @var string
     *
     * @ORM\Column(name="N_CN", type="string", length=9, nullable=true)
     */
    private $nCn;

    /**
     * @var string
     *
     * @ORM\Column(name="N_CB", type="string", length=9, nullable=true)
     */
    private $nCb;

    /**
     * @var string
     *
     * @ORM\Column(name="STAN", type="decimal", precision=16, scale=4, nullable=false)
     */
    private $stan = '0';


}

