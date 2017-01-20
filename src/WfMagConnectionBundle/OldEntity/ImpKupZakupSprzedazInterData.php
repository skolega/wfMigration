<?php

namespace WfMagConnectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImpKupZakupSprzedazInterData
 *
 * @ORM\Table(name="IMP_KUP_ZAKUP_SPRZEDAZ_INTER_DATA")
 * @ORM\Entity
 */
class ImpKupZakupSprzedazInterData
{
    /**
     * @var string
     *
     * @ORM\Column(name="ID_DATY", type="string", length=9, nullable=false)
     */
    private $idDaty;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_FIRMY", type="string", length=9, nullable=false)
     */
    private $idFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_UZYTKOWNIKA", type="string", length=9, nullable=false)
     */
    private $idUzytkownika;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_EKSPORTU", type="integer", nullable=false)
     */
    private $dataEksportu;

    /**
     * @var integer
     *
     * @ORM\Column(name="DATA_WYKONANIA", type="integer", nullable=true)
     */
    private $dataWykonania;

    /**
     * @var integer
     *
     * @ORM\Column(name="GODZINA_WYKONANIA", type="integer", nullable=true)
     */
    private $godzinaWykonania;

    /**
     * @var string
     *
     * @ORM\Column(name="INFO", type="string", length=500, nullable=true)
     */
    private $info;


}

