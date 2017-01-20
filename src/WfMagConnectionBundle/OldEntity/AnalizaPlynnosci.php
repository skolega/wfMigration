<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnalizaPlynnosci
 *
 * @ORM\Table(name="ANALIZA_PLYNNOSCI")
 * @ORM\Entity
 */
class AnalizaPlynnosci
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_ANALIZY", type="string", length=9, nullable=false)
     */
    private $idAnalizy;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_OD", type="string", length=4, nullable=true)
     */
    private $dataOd;

    /**
     * @var string
     *
     * @ORM\Column(name="DATA_DO", type="string", length=4, nullable=true)
     */
    private $dataDo;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=true)
     */
    private $idUzytkownika;


}

