<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AktywnoscWfs
 *
 * @ORM\Table(name="aktywnosc_wfs")
 * @ORM\Entity
 */
class AktywnoscWfs
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="progid", type="smallint", nullable=true)
     */
    private $progid;

    /**
     * @var string
     *
     * @ORM\Column(name="do_dbwer", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $doDbwer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Op_Data", type="datetime", nullable=true)
     */
    private $opData;

    /**
     * @var string
     *
     * @ORM\Column(name="Op_Komputer", type="string", length=50, nullable=true)
     */
    private $opKomputer;

    /**
     * @var string
     *
     * @ORM\Column(name="Op_Uzytkownik", type="string", length=100, nullable=true)
     */
    private $opUzytkownik;

    /**
     * @var string
     *
     * @ORM\Column(name="Op_Program", type="string", length=100, nullable=true)
     */
    private $opProgram;

    /**
     * @var string
     *
     * @ORM\Column(name="Nazwa_scr", type="string", length=50, nullable=true)
     */
    private $nazwaScr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data_scr", type="datetime", nullable=true)
     */
    private $dataScr;

    /**
     * @var string
     *
     * @ORM\Column(name="Nazwa_wfs", type="string", length=50, nullable=true)
     */
    private $nazwaWfs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data_wfs", type="datetime", nullable=true)
     */
    private $dataWfs;

    /**
     * @var binary
     *
     * @ORM\Column(name="T_wfs", type="binary", nullable=true)
     */
    private $tWfs;

    /**
     * @var integer
     *
     * @ORM\Column(name="Rozmiar_wfs", type="integer", nullable=true)
     */
    private $rozmiarWfs;

    /**
     * @var string
     *
     * @ORM\Column(name="Opis_wfs", type="string", length=1000, nullable=true)
     */
    private $opisWfs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Data_wfs_w_katalogu", type="datetime", nullable=true)
     */
    private $dataWfsWKatalogu;


}

